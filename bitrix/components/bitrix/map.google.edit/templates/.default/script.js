;(function(){

	'use strict';

	BX.namespace('BX.Fileman.Map');

	if(!!BX.Fileman.Map.Google)
	{
		return;
	}

	var mapInstance = {};

	BX.Fileman.Map.instance = function(mapId, param)
	{
		if(typeof mapInstance[mapId] === 'undefined')
		{
			mapInstance[mapId] = new BX.Fileman.Map.Google(mapId, param);
		}

		return mapInstance[mapId];
	};

	BX.Fileman.Map.Google = function(mapId, param)
	{
		this.mapId = mapId;
		this.mapInitHandlerList = [];

		this.param = {
			multiple: !!param.multiple
		};

		this.mapData = [];

		this.map = null;
		this.deleteWindow = null;

		this.onMapInit(BX.proxy(this.init, this));

		this.editMode = true;

		this.waitForMap();
	};

	BX.Fileman.Map.Google.prototype.getMap = function()
	{
		return this.map;
	};

	BX.Fileman.Map.Google.prototype.setEditMode = function(editMode)
	{
		this.editMode = editMode;
	};

	BX.Fileman.Map.Google.prototype.addListener = function(cb)
	{
		BX.addCustomEvent(this, 'onGoogleMapChangeData', cb);
	};

	BX.Fileman.Map.Google.prototype.waitForMap = function()
	{
		if(window.GLOBAL_arMapObjects === null)
		{
			return;
		}

		if(window.GLOBAL_arMapObjects[this.mapId] && window.google && window.google.maps && window.google.maps.event)
		{
			this.map = window.GLOBAL_arMapObjects[this.mapId];
			this.callOnMapInit();
		}
		else
		{
			setTimeout(BX.proxy(this.waitForMap, this), 300);
		}
	};

	BX.Fileman.Map.Google.prototype.onMapInit = function(cb)
	{
		this.mapInitHandlerList.push(cb);
	};

	BX.Fileman.Map.Google.prototype.callOnMapInit = function()
	{
		this.onMapInit = BX.delegate(function(cb)
		{
			cb.apply(this, arguments);
		}, this);

		for(var i = 0; i < this.mapInitHandlerList.length; i++)
		{
			this.onMapInit(this.mapInitHandlerList[i]);
		}

		this.mapInitHandlerList = [];

		BX.onCustomEvent(this, 'onGoolgeMapEditInit');
	};

	BX.Fileman.Map.Google.prototype.init = function()
	{
		BX.addCustomEvent('onAdminTabsChange', BX.delegate(function()
		{
			BXMapGoogleAfterShow(this.mapId);
		}, this));

		this.map.addListener('click', BX.proxy(this.onMapClick, this));
	};

	BX.Fileman.Map.Google.prototype.onMapClick = function(e)
	{
		if(this.editMode)
		{
			if(this.param.multiple || this.mapData.length <= 0)
			{
				this.addPoint(e.latLng);
			}
			else
			{
				this.movePoint(0, e.latLng);
			}
		}

		BX.onCustomEvent(this, 'onMapClick');
	};

	BX.Fileman.Map.Google.prototype.addPoint = function(googleLatLng)
	{
		var pointIndex = this.createPoint({lat: googleLatLng.lat(), lng: googleLatLng.lng()});
		this.callChangeEvent(pointIndex);

		return pointIndex;
	};

	BX.Fileman.Map.Google.prototype.createPoint = function(latLng)
	{
		var index = this.mapData.length;

		this.mapData.push(new BX.Fileman.Map.Google.Point(this, {
			lat: latLng.lat, lng: latLng.lng
		}, index));

		return index;
	};

	BX.Fileman.Map.Google.prototype.movePoint = function(index, googleLatLng)
	{
		this.mapData[index].moveTo({
			lat: googleLatLng.lat(), lng: googleLatLng.lng()
		});

		this.callChangeEvent(index);
	};

	BX.Fileman.Map.Google.prototype.removePoint = function(point)
	{
		for(var i=0; i < this.mapData.length; i++)
		{
			if(this.mapData[i] === point)
			{
				this.mapData[i].clean();
				this.mapData = BX.util.deleteFromArray(this.mapData, i);

				this.callChangeEvent(i);

				break;
			}
		}
	};

	BX.Fileman.Map.Google.prototype.panTo = function(googleLatLng)
	{
		this.getMap().panTo(googleLatLng);
	};

	BX.Fileman.Map.Google.prototype.callChangeEvent = function(index)
	{
		BX.onCustomEvent(this, 'onGoogleMapChangeData', [this, this.mapData, index]);
	};

	BX.Fileman.Map.Google.prototype.showDeleteWindow = function(marker)
	{
		if(this.deleteWindow === null)
		{
			this.deleteWindow = new BX.Fileman.Map.Google.DeleteWindow(this);
		}

		this.deleteWindow.setMarker(marker);
		this.deleteWindow.show();
	};

	BX.Fileman.Map.Google.Point = function(parent, latLng, index)
	{
		this.parent = parent;
		this.index = index;
		this.latLng = new google.maps.LatLng(latLng.lat, latLng.lng);
		this.marker = new google.maps.Marker({
			position: this.latLng,
			map: this.parent.getMap(),
			draggable: true
		});

		this.marker.addListener('click', BX.proxy(this.click, this));
		this.marker.addListener('dragend', BX.proxy(this.dragend, this));

	};

	BX.Fileman.Map.Google.Point.prototype.getMarker = function()
	{
		return this.marker;
	};

	BX.Fileman.Map.Google.Point.prototype.moveTo = function(latLng)
	{
		this.latLng = new google.maps.LatLng(latLng.lat, latLng.lng);
		this.marker.setPosition(this.latLng);
	};

	BX.Fileman.Map.Google.Point.prototype.click = function(e)
	{
		this.parent.showDeleteWindow(this);
	};

	BX.Fileman.Map.Google.Point.prototype.dragend = function(e)
	{
		this.latLng = this.marker.getPosition();
		this.callChangeEvent();
		this.parent.callChangeEvent(this.index);
	};

	BX.Fileman.Map.Google.Point.prototype.callChangeEvent = function()
	{
		BX.onCustomEvent(this, 'onGoogleMapPointChanged', [this.index, this.latLng]);
	};

	BX.Fileman.Map.Google.Point.prototype.clean = function()
	{
		this.marker.setMap(null);
		this.marker = null;
	};

	BX.Fileman.Map.Google.Point.prototype.getPosition = function()
	{
		return [this.latLng.lat(), this.latLng.lng()];
	};

	BX.Fileman.Map.Google.DeleteWindow = function(parent)
	{
		this.parent = parent;

		this.infoWindow = null;
		this.marker = null;
	};

	BX.Fileman.Map.Google.DeleteWindow.prototype.setMarker = function(marker)
	{
		this.marker = marker;
	};

	BX.Fileman.Map.Google.DeleteWindow.prototype.action = function()
	{
		this.parent.removePoint(this.marker);
	};

	BX.Fileman.Map.Google.DeleteWindow.prototype.show = function()
	{
		if(this.infoWindow === null)
		{
			this.infoWindow = new google.maps.InfoWindow({
				content: BX.create('span', {
					text: BX.message('MGE_DELETE'),
					props: {className: 'bx-mge-delete'},
					events: {
						click: BX.proxy(this.action, this)
					}
				})
			});
		}

		this.infoWindow.open(this.parent.getMap(), this.marker.getMarker());
	};

	/**
	 * Geo type handler class. Will be initialized in Factory.
	 *
	 * @constructor
	 */
	BX.Main.UF.TypeGeo = function()
	{
	};
	BX.extend(BX.Main.UF.TypeGeo, BX.Main.UF.BaseType);

	BX.Main.UF.TypeGeo.USER_TYPE_ID = 'geo';

	BX.Main.UF.Factory.setTypeHandler(BX.Main.UF.TypeGeo.USER_TYPE_ID, BX.Main.UF.TypeGeo);

})();