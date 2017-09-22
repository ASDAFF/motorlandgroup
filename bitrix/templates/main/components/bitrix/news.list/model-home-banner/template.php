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
<li>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<img src="<?=CFile::GetPath($arItem['PROPERTIES']['FOTO_1']['VALUE']);?>" alt="<?=$arItem['NAME']?>">
		<p class="name"><?=$arItem['NAME']?></p>
	</a>
</li>
<?endforeach;?>



