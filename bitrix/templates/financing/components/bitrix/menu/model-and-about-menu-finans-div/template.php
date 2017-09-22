<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
	<div class="right-tools-menu-item">
		<a href="<?=$arItem["LINK"]?>" data-parent="Покупка" target="_self"><?=$arItem["TEXT"]?></a>
	</div>
	<?else:?>
	<div class="right-tools-menu-item">
		<a href="<?=$arItem["LINK"]?>" data-parent="Покупка" target="_self"><?=$arItem["TEXT"]?></a>
	</div>
	<?endif?>
	
<?endforeach?>


<?endif?>



