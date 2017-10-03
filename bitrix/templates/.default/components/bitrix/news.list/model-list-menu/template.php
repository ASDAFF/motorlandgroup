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
<li class="nav-drop-body-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="nav-drop-body-item-title small-after clearfix">
		<div class="h3"><?=$arItem['NAME']?></div>
	</a>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="nav-drop-body-item-img-link">
		<img src="<?=CFile::ResizeImageGet($arItem['PROPERTIES']['FOTO_1']['VALUE'], array('width'=>196, 'height'=>71), BX_RESIZE_IMAGE_EXACT, true)['src'];?>" alt="<?=$arItem['NAME']?>"  sizes="" class="nav-drop-body-item-img--default"/>
		<img src="<?=CFile::ResizeImageGet($arItem['PROPERTIES']['FOTO_2']['VALUE'], array('width'=>196, 'height'=>71), BX_RESIZE_IMAGE_EXACT, true)['src'];?>" alt="<?=$arItem['NAME']?>"  sizes="" class="nav-drop-body-item-img--hover"/>
	</a>
	<div class="nav-drop-body-item-links">
		<a href="/configurator/?model=<?=$arItem['CODE']?>">Создайте</a><span class="sep"></span>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
	</div>
	<span class="nav-drop-body-item-subtitle"> &nbsp;</span>
</li>
<?endforeach;?>


