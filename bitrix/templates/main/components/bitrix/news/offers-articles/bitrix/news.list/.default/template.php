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
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/service-menu.php"
	)
);?>

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
					<?
					if($arItem['DATE_ACTIVE_TO'] and $arItem['DATE_ACTIVE_FROM']):
					$diff = (strtotime(explode(' ',$arItem['DATE_ACTIVE_TO'])[0])-strtotime(explode(' ',$arItem['DATE_ACTIVE_FROM'])[0]))/(60*60*24);
					?>
					<p class="offer-blue">До конца акции осталось <?=$diff;?> дн.</p>
					<?endif?>
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




