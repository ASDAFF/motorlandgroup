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

<div class="img-one">
	<img class="w-lazy delme" src="<?=CFile::ResizeImageGet($arResult['PICTURE'], array('width'=>1920, 'height'=>660), BX_RESIZE_IMAGE_EXACT, true)['src'];?>">
	<div class="banner-text">
		<?=$arResult['DESCRIPTION']?>
	</div>
</div>


<div class="container">

	<h1><?=$arResult['NAME']?></h1>

	<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="row margin-bottom-70">

		<div class="offer-block">
			<div class="col-md-6">
				<div class="offer-img">
					<img src="<?=CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width' => 560, 'height' => 270), BX_RESIZE_IMAGE_EXACT, true)['src'];?>">
				</div>
			</div>

			<div class="col-md-6">
				<div class="offer-text">
					<h1><?=$arItem['NAME']?></h1>
					<p class="offer-blue"><?=$arItem['PROPERTIES']['SALE_END']['VALUE']?></p>
					<p><?=$arItem['PREVIEW_TEXT']?></p>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="button">Узнать подробнее</a>
				</div>
			</div>
		</div>

	</div>
	<?endforeach;?>


	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>




