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

	<div class="h1_serv" style=""><?=$arResult['NAME']?></div>

<!--	<p style="text-align: center;margin-bottom: 25px">Решения Sensus включают в себя самые современные возможности доступа к информации и развлечениям. Встроенная точка доступа обеспечивает вам и вашему XC90 постоянную связь с Интернетом.123</p>-->


	<div class="row">


		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="col-md-4">
				<div class="service-box" onclick="window.location.href='<?=$arItem['DETAIL_PAGE_URL']?>'">
					<img src="<?=CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src']?>">
					<p class="banner-text-h1"><?=$arItem['NAME']?></p>
					<p><?=TruncateText($arItem['PREVIEW_TEXT'], 70);?></p>
					<a class="button" href="<?=$arItem['DETAIL_PAGE_URL']?>">Узнать подробнее</a>
				</div>
			</div>
		<?endforeach;?>


	</div>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>


<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/service-banner.php"
	)
);?>


<div class="container">

	<div class="margin-50"></div>
	<div class="row">

		<?
		$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL","PREVIEW_TEXT","PREVIEW_PICTURE");
		$arFilter = Array("IBLOCK_ID" => 30,"ACTIVE"=>"Y");
		$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>3), $arSelect);
		while($ob = $res->GetNextElement())
		{
			$arFields = $ob->GetFields();
			?>
			<div class="col-md-4">
				<div class="service-box" onclick="window.location.href='<?=$arFields['DETAIL_PAGE_URL']?>'">
					<img src="<?=CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src']?>">
					<p class="banner-text-h1"><?=$arFields['NAME']?></p>
					<p><?=TruncateText($arFields['PREVIEW_TEXT'], 70);?></p>
					<a class="button" href="<?=$arFields['DETAIL_PAGE_URL']?>">Узнать подробнее</a>
				</div>
			</div>
			<?

		}
		?>

	</div>

</div>









