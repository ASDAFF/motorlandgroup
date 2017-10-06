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

<? if($arResult['DETAIL_PICTURE']): ?>
<div class="img-one">
	<img class="w-lazy delme" src="<?=CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>1920, 'height'=>660), BX_RESIZE_IMAGE_EXACT, true)['src'];?>">
	<div class="banner-text">
		<?=$arResult['DETAIL_PICTURE']['DESCRIPTION']?>
	</div>
</div>
<? endif; ?>

<div class="container">

	<?echo $arResult["DETAIL_TEXT"];?>

</div>
