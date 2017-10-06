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
 * @var CBitrixComponent $component
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
AddMessage2Log($arParams);

?>
<div class="bx-gsuf-wrap" id="<?=$arParams['MAP_ID']?>_wrap" style="position: relative;">
	<div><input type="text" data-role="search-input" /></div>
<?

if($arParams['SHOW_MAP'] === 'Y'):
?>
	<div class="bx-gsuf-map-wrap" id="<?=$arParams['MAP_ID']?>_wrap">
<?
	$APPLICATION->IncludeComponent(
		'bitrix:map.google.edit',
		'.default',
		$arParams,
		null,
		array('HIDE_ICONS' => 'Y')
	);
?>
	</div>
<?
endif;
?>
</div>
<script>
	(new BX.Fileman.Map.AddressSearch(
		'<?=\CUtil::JSEscape($arParams['MAP_ID'])?>',
		{
			node: BX('<?=$arParams['MAP_ID']?>_wrap'),
<?
if($arParams['SHOW_MAP'] === 'Y'):
?>
			map: BX.Fileman.Map.instance('<?=\CUtil::JSEscape($arParams['MAP_ID'])?>')
<?
endif;
?>
		}
	)).setGeoCoder(new BX.Fileman.Map.GoogleGeoCoder());
</script>


