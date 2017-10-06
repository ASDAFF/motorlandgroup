;(function(){

	'use strict';

	BX.namespace('BX.Fileman.Map');

	var controlStack = {};

	BX.Fileman.Map.AddressSearch = function(controlId, param)
	{
		controlStack[controlId] = this;

		this.node = param.node;

		this.tplRoles = {'INPUT': 'search-input'};
		this.parts = {
			'INPUT': []
		};

		this.searchInput = [];
		this.resultDisplay = [];

		this.map = param.map;

		this.map.setEditMode(false);

		BX.ready(BX.delegate(this.init, this));
	};

	BX.Fileman.Map.AddressSearch.get = function(controlId)
	{
		return controlStack[controlId];
	};

	BX.Fileman.Map.AddressSearch.prototype.init = function()
	{
		var i;
		for(i in this.tplRoles)
		{
			if(this.tplRoles.hasOwnProperty(i))
			{
				var node = BX.findChild(this.node, {
					attribute: {
						'data-role': this.tplRoles[i]
					}
				}, true);

				if(BX.type.isArray(this.parts[i]))
				{
					this.parts[i].push(node);
				}
				else
				{
					this.parts[i] = node;
				}
			}
		}

		for(i = 0; i < this.parts.INPUT.length; i++)
		{
			this.searchInput[i] = new BX.Fileman.Map.AddressSearchInput(this, this.parts.INPUT[i], i);
		}
	};

	BX.Fileman.Map.AddressSearch.prototype.setGeoCoder = function(geoCoder)
	{
		this.geoCoder = geoCoder;
	};

	BX.Fileman.Map.AddressSearch.prototype.getGeoCoder = function()
	{
		if(this.geoCoder === null)
		{
			this.setGeoCoder(new BX.Fileman.Map.GoogleGeoCoder());
		}

		return this.geoCoder;
	};

	BX.Fileman.Map.AddressSearch.prototype.setResultDisplay = function(index, resultDisplay)
	{
		this.resultDisplay[index] = resultDisplay;
	};

	BX.Fileman.Map.AddressSearch.prototype.getResultDisplay = function(index)
	{
		if(typeof(this.resultDisplay[index]) === 'undefined')
		{
			this.setResultDisplay(index, new BX.Fileman.Map.AddressSearchResult(
				this,
				{
					bindNode: this.parts.INPUT[index],
					callback: BX.proxy(this.addResult, this)
				},
				index
			));
		}

		return this.resultDisplay[index];
	};

	BX.Fileman.Map.AddressSearch.prototype.addResult = function(index, result)
	{
		BX.onCustomEvent(this, 'onAddressSearchResultSelect', [result]);

		this.parts.INPUT[index].value = result.text;
	};

	/**
	 * Search input class
	 *
	 * @param parent BX.Fileman.Map.AddressSearch object
	 * @param input Input DOM node
	 * @param index Search input index
	 *
	 * @constructor
	 */
	BX.Fileman.Map.AddressSearchInput = function(parent, input, index)
	{
		this.parent = parent;
		this.input = input;
		this.index = index;

		var changeHandler = BX.debounce(this.onChangeValue, 300, this);

		BX.bind(this.input, 'focus', changeHandler);
		BX.bind(this.input, 'bxchange', changeHandler);
		BX.unbind(this.input, 'blur', changeHandler);
		BX.unbind(this.input, 'change', changeHandler);
	};

	BX.Fileman.Map.AddressSearchInput.prototype.onChangeValue = function(e)
	{
		this.parent.getGeoCoder().search(this.input.value, BX.proxy(this.searchCallback, this));
	};

	BX.Fileman.Map.AddressSearchInput.prototype.searchCallback = function(result)
	{
		BX.onCustomEvent(this, 'onAddressSearchResult', [result]);
		this.parent.getResultDisplay(this.index).display(result);
	};

	/**
	 *
	 * @param parent
	 * @param param
	 * @param index
	 * @constructor
	 */

	BX.Fileman.Map.AddressSearchResult = function(parent, param, index)
	{
		this.parent = parent;

		this.bindNode = param.bindNode;
		this.callback = param.callback;

		this.index = index;

		this.popup = null;
		this.point = null;

		BX.bind(document, 'click', BX.proxy(this.close, this));

		this.resultNode = null;
	};

	BX.Fileman.Map.AddressSearchResult.prototype.display = function(result, skipSetPoint)
	{
		BX.cleanNode(this.getResultNode());

		if(result.length > 0)
		{
			this.getResultNode().appendChild(this.createResultRow(result[0]));

			if(!!this.parent.map && !skipSetPoint)
			{
				this.setPoint(result[0].coords);
			}

/*
			for(var i = 0; i < result.length; i++)
			{
				this.getResultNode().appendChild(this.createResultRow(result[i]));
			}
*/
		}
		else
		{
			this.getResultNode().innerHTML = 'Nothing found!';
		}

		this.adjustResultNode();
	};

	BX.Fileman.Map.AddressSearchResult.prototype.setPoint = function(latLng)
	{
		var googleLatLng = new google.maps.LatLng(latLng[0], latLng[1]);

		if(this.point === null)
		{
			this.point = this.parent.map.addPoint(googleLatLng);
			BX.addCustomEvent(window, 'onGoogleMapPointChanged', BX.proxy(this.pointChangeHandler, this));
		}
		else
		{
			this.parent.map.movePoint(this.point, googleLatLng);
		}

		this.parent.map.panTo(googleLatLng);
	};

	BX.Fileman.Map.AddressSearchResult.prototype.pointChangeHandler = function(index, googleLatLng)
	{
		this.parent.getGeoCoder().search(googleLatLng, BX.proxy(this.updateResult, this));
	};

	BX.Fileman.Map.AddressSearchResult.prototype.updateResult = function(result)
	{
		this.parent.getResultDisplay(this.index).display(result, true);
	};

	BX.Fileman.Map.AddressSearchResult.prototype.close = function()
	{
		//BX.hide(this.getResultNode());
		this.getPopup().close();
	};

	BX.Fileman.Map.AddressSearchResult.prototype.adjustResultNode = function()
	{
		this.getPopup().show();
/*
		var pos = BX.pos(this.bindNode, true);
		this.getResultNode().style.top = (pos.height + 5) + 'px';
		BX.show(this.getResultNode());
*/
	};

	BX.Fileman.Map.AddressSearchResult.prototype.createResultRow = function(item)
	{
		return BX.create('DIV', {
			text: item.text,
			style: {
				cursor: 'pointer',
				borderBottom: 'dotted 1px gray',
				margin: '10px'
			},
			events: {
				click: BX.proxy(this.resultClickHandler(item), this)
			}
		})
	};

	BX.Fileman.Map.AddressSearchResult.prototype.resultClickHandler = function(item)
	{
		return function(e)
		{
			this.callback(this.index, item);
			this.close();

			return (e||window.event).preventDefault();
		}
	};

	BX.Fileman.Map.AddressSearchResult.prototype.getResultNode = function()
	{
		if(this.resultNode === null)
		{
			this.resultNode = this.bindNode.parentNode.insertBefore(BX.create('DIV', {
				/*style: {
					position: 'absolute',
					zIndex: '3'
				}*/
			}), this.bindNode);
		}

		return this.resultNode;
	};

	BX.Fileman.Map.AddressSearchResult.prototype.getPopup = function()
	{
		if(this.popup === null)
		{
			this.popup = new BX.PopupWindow('google_search_result_' + this.index, this.bindNode,
			{
				closeIcon: true,
				content: this.getResultNode(),
				angle: {
					position: 'top'
				}
			});
		}

		return this.popup;
	};


	/**
	 * Google geocoder class. MUST implement method .search(searchString, callback)
	 *
	 * @constructor
	 */
	BX.Fileman.Map.GoogleGeoCoder = function()
	{
		this.geocoder = null;
	};

	BX.Fileman.Map.GoogleGeoCoder.prototype.search = function(searchString, cb)
	{
		if(searchString !== '')
		{
			if(this.geocoder === null)
			{
				this.geocoder = new google.maps.Geocoder();
			}

			var geocodeParam = {
				language: BX.message('LANGUAGE_ID')
			};

			if(searchString instanceof google.maps.LatLng)
			{
				geocodeParam.latLng = searchString;
			}
			else
			{
				geocodeParam.address = searchString;
			}

			this.geocoder.geocode(geocodeParam, BX.delegate(this.processResult(cb), this));
		}
	};

	BX.Fileman.Map.GoogleGeoCoder.prototype.processResult = function(cb)
	{
		return function(googleSearchResult, status)
		{
			var result = [];

			if(status !== google.maps.GeocoderStatus.OK && status !== google.maps.GeocoderStatus.ZERO_RESULTS)
			{
				this.throwError(status);
			}
			else
			{

				for(var i = 0; i < googleSearchResult.length; i++)
				{
					result.push({
						text: googleSearchResult[i].formatted_address,
						components: googleSearchResult[i].address_components,
						coords: [googleSearchResult[i].geometry.location.lat(), googleSearchResult[i].geometry.location.lng()],
						viewport: [
							[googleSearchResult[i].geometry.viewport.getNorthEast().lat(),googleSearchResult[i].geometry.viewport.getNorthEast().lng()],
							[googleSearchResult[i].geometry.viewport.getSouthWest().lat(),googleSearchResult[i].geometry.viewport.getSouthWest().lng()]
						]
					});
				}
			}
			cb(result);
		}
	};

	BX.Fileman.Map.GoogleGeoCoder.prototype.throwError = function(message)
	{
		console.error(message ? message.message : 'Google error!');
	};



})();