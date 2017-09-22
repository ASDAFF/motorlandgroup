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
<li style="height: 300px">
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<img src="<?=CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array('width'=>360, 'height'=>210), BX_RESIZE_IMAGE_EXACT, true)['src'];?>" alt="<?echo $arItem["NAME"]?>" data-height-ratio-triple="0.6">

		<p class="name"><?echo $arItem["NAME"]?></p>

		<span class="toBottomThem">
			<div class="old-new-prices-block">
				<div class="price-text">
					<p>Выгода:</p>
				</div>
				<div class="price-values">
					<p class="new-price"><?=$arItem['PROPERTIES']['PROFIT']['VALUE'];?></p>
				</div>
			</div>
			<span class="mtr-btn mtr-btn-blue">Подробнее</span>
		</span>
	</a>
</li>
<?endforeach;?>


