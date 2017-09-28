<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="service-banner">
	<img src="<?=CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width' => 1950, 'height'=>680), BX_RESIZE_IMAGE_EXACT, true)['src']?>">
	<div class="banner-icons">

	<?foreach($arItem["PROPERTIES"]["ICON"]["VALUE"] as $key => $icon):?>
	<? $icon_text = explode('~',$arItem["PROPERTIES"]["ICON"]["DESCRIPTION"][$key]); ?>
		<div class="banner-icon">
			<i class="fa <?=$icon;?> fa-5x" aria-hidden="true"></i>
			<div class="icon-text">
				<p><?=$icon_text[0]?></p>
				<p><?=$icon_text[1]?></p>
			</div>
		</div>
	<?endforeach;?>

	</div>
	<div class="banner-text">
		<h1><?=$arItem['NAME']?></h1>
		<?=$arItem['PREVIEW_TEXT']?>
		<?if($arItem['CODE']):?>
		<a href="<?=$arItem['CODE']?>" class="button">Скачать прайс</a>
		<?endif;?>
	</div>

</div>
<?endforeach;?>