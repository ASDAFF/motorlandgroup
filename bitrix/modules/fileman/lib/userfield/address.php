<?php
namespace Bitrix\Fileman\UserField;


use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Text\HtmlFilter;

Loc::loadMessages(__FILE__);


class Address extends \Bitrix\Main\UserField\TypeBase
{
	const USER_TYPE_ID = 'address';

	function getUserTypeDescription()
	{
		return array(
			"USER_TYPE_ID" => static::USER_TYPE_ID,
			"CLASS_NAME" => __CLASS__,
			"DESCRIPTION" => GetMessage("USER_TYPE_ADDRESS_DESCRIPTION"),
			"BASE_TYPE" => \CUserTypeManager::BASE_TYPE_STRING,
			"EDIT_CALLBACK" => array(__CLASS__, 'GetPublicEdit'),
			//"VIEW_CALLBACK" => array(__CLASS__, 'GetPublicView'),
		);
	}

	function PrepareSettings($arUserField)
	{
		return array(
			"SHOW_MAP" => $arUserField["SETTINGS"]["SHOW_MAP"] === 'N' ? 'N' : 'Y',
		);
	}

	function GetDBColumnType($arUserField)
	{
		global $DB;
		switch(strtolower($DB->type))
		{
			case "mysql":
				return "text";
		}
	}

	function GetSettingsHTML($arUserField = false, $arHtmlControl, $bVarsFromForm)
	{
		$result = '';
		if($bVarsFromForm)
		{
			$value = $GLOBALS[$arHtmlControl["NAME"]]["SHOW_MAP"] === 'N' ? 'N' : 'Y';
		}
		elseif(is_array($arUserField))
		{
			$value = $arUserField["SETTINGS"]["DEFAULT_VALUE"] === 'N' ? 'N' : 'Y';
		}
		else
		{
			$value = "Y";
		}
		$result .= '
		<tr>
			<td>'.GetMessage("USER_TYPE_ADDRESS_SHOW_MAP").':</td>
			<td>
				<input type="hidden" name="'.$arHtmlControl["NAME"].'[SHOW_MAP]" value="N">
				<label><input type="checkbox" name="'.$arHtmlControl["NAME"].'[SHOW_MAP]" value="Y" '.($value === 'Y' ? ' checked="checked"' : '').'> '.GetMessage('MAIN_YES').'</label>
			</td>
		</tr>
		';

		/// start position

		return $result;
	}

	function GetEditFormHTML($arUserField, $arHtmlControl)
	{
		return static::getAdminEdit($arUserField, $arHtmlControl);
	}

	function GetEditFormHtmlMulty($arUserField, $arHtmlControl)
	{
		return static::getAdminEdit($arUserField, $arHtmlControl);
	}

	protected static function getAdminEdit($arUserField, $arHtmlControl)
	{
		global $APPLICATION;

		ob_start();

		$controlId = $arUserField['FIELD_NAME'];

		$APPLICATION->IncludeComponent(
			'bitrix:map.google.search',
			'userfield',
			array(
				'SKIP_POSITION_CHECK' => 'Y',
				'MAP_ID' => $controlId,
				'SHOW_MAP' => $arUserField['SETTINGS']['SHOW_MAP'],
			),
			null,
			array('HIDE_ICONS' => 'Y')
		);
?>
<span style="display: none;" id="<?=HtmlFilter::encode($arUserField['FIELD_NAME'])?>_result"></span>
<script>
	BX.addCustomEvent(
		BX.Fileman.Map.AddressSearch.get('<?=\CUtil::JSEscape($controlId)?>'),
		'onAddressSearchResultSelect',
		function(result)
		{
			var resultNode = BX('<?=\CUtil::JSEscape(HtmlFilter::encode($arUserField['FIELD_NAME']))?>_result');
			var str = <?if($arUserField['MULTIPLE'] === 'Y'):?>resultNode.innerHTML<?else:?>''<?endif;?>;

			var text = BX.util.htmlspecialchars(result.text);

			str += '<input type="hidden" name="<?=HtmlFilter::encode($arHtmlControl['NAME'])?>" value="'+text+'|' + BX.util.htmlspecialchars(result.coords.join(';')) + '" />';

			resultNode.innerHTML = str;
		}
	);
</script>
<?
		return ob_get_clean();
	}

	public static function GetPublicEdit($arUserField, $arAdditionalParameters = array())
	{
		return static::getAdminEdit($arUserField, array());
	}


}