<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 */

$APPLICATION->IncludeComponent('bitrix:map.google.system', '', array(
	'MAP_ID' => $arParams['MAP_ID'],
	'INIT_MAP_SCALE' => $arParams['INIT_MAP_SCALE'],
	'INIT_MAP_LAT' => $arParams['INIT_MAP_LAT'],
	'INIT_MAP_LON' => $arParams['INIT_MAP_LON'],
	'MAP_WIDTH' => $arParams['MAP_WIDTH'],
	'MAP_HEIGHT' => $arParams['MAP_HEIGHT'],
	'CONTROLS' => $arParams['CONTROLS'],
	'OPTIONS' => $arParams['OPTIONS'],
	'API_KEY' => $arParams['API_KEY'],
), null, array('HIDE_ICONS' => 'Y'));

?>
<script type="text/javascript">
	BX.message({'MGE_DELETE':'<?=\CUtil::JSEscape(\GetMessage('MGE_JS_DELETE'))?>'});
	BX.Fileman.Map.instance('<?=\CUtil::JSEscape($arParams['MAP_ID'])?>', {
		multiple: <?=$arParams['MULTIPLE'] === 'Y' ? 'true' : 'false'?>
	});
<?
if(is_array($arParams['POINTS']))
{
?>
	BX.Fileman.Map.instance('<?=\CUtil::JSEscape($arParams['MAP_ID'])?>').onMapInit(function(){
<?
	foreach($arParams['POINTS'] as $point)
	{
?>
		this.createPoint({lat: '<?=$point[0]?>', lng: '<?=$point[1]?>'});
<?
	}
?>
	});
<?
}
?>
</script>


