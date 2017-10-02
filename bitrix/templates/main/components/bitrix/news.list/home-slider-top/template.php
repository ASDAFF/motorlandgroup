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
<div class="triple-banner">

	<div class="b1">
		<div class="bgImg" style="background-image: url('<?=CFile::ResizeImageGet($arItem["PROPERTIES"]["IMG"]["VALUE"][0], array('width'=>2000, 'height'=>2000), BX_RESIZE_IMAGE_EXACT, true)['src'];?>');"></div>
	</div>

	<div class="b2 active">

		<div class="bgImg" style="background-image: url('<?=CFile::ResizeImageGet($arItem["PROPERTIES"]["IMG"]["VALUE"][1], array('width'=>2000, 'height'=>2000), BX_RESIZE_IMAGE_EXACT, true)['src'];?>');"></div>
		<div class="headerz">
			<p class="h3"><?=$arItem["PROPERTIES"]["TEXT"]["ONE_TEXT"]?></p>
			<? foreach($arItem["PROPERTIES"]["TEXT"]["VALUE"] as $text):?>
				<p class="h2"><?=$text;?></p>
			<? endforeach;?>
		</div>
	</div>

	<div class="b3">
		<div class="bgImg" style="background-image: url('<?=CFile::ResizeImageGet($arItem["PROPERTIES"]["IMG"]["VALUE"][2], array('width'=>2000, 'height'=>2000), BX_RESIZE_IMAGE_EXACT, true)['src'];?>');">

		</div>
	</div>

	<div class="s1">
		<div class="headerz">
			<p class="h3">Модельный Ряд</p>
			<p class="h2"></p>
			<a class="mtr-btn mtr-btn-white" href=""></a>
		</div>

		<div class="block-with-menu">
			<div class="cont">
				<div class="triple-menu-models">
					<p class="hSlimLine">Модельный Ряд</p>



					<nav class="nicescroll">
						<ul>

							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"model-home-banner",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array("NAME",""),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "7",
									"IBLOCK_TYPE" => "products",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "40",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array("","FOTO_1","FOTO_2",""),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								)
							);?>

						</ul>
						<a class="mtr-btn mtr-btn-blue go-test-drive bottom-appearer bottom-appearer-left" href="<?=$arItem['CODE']?>">Пройти Тест Драйв</a>
					</nav>

				</div>

			</div>
		</div>

	</div>

	<div class="s2">
		<div class="headerz">
			<p class="h3"><?=$arItem["PROPERTIES"]["TEXT"]["ONE_TEXT"]?></p>
			<? foreach($arItem["PROPERTIES"]["TEXT"]["VALUE"] as $text):?>
			<p class="h2"><?=$text;?></p>
			<? endforeach;?>
			<a class="mtr-btn mtr-btn-white" href="<?=$arItem["PROPERTIES"]["LINK_BTN"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["TEXT_BTN"]["VALUE"];?></a>
		</div>

	</div>

	<div class="s3">
		<div class="headerz">
			<p class="h3">Спецпредложения</p>
			<p class="h2"></p>
			<a class="mtr-btn mtr-btn-white" href=""></a>
		</div>

		<div class="block-with-menu">
			<div class="cont">
				<div class="triple-menu-offers">
					<p class="hSlimLine">Спецпредложения</p>
					<nav>
						<ul style="padding: 0">

							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"offer-home-banner",
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "NAME",
										1 => "DETAIL_PICTURE",
										2 => "",
									),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "8",
									"IBLOCK_TYPE" => "products",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "40",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
										0 => "PROFIT",
										1 => "",
										2 => "",
									),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N",
									"COMPONENT_TEMPLATE" => "offer-home-banner"
								),
								false
							);?>

						</ul>
					</nav>
				</div>

			</div>
		</div>

	</div>

</div>


<div class="triple-banner-SM">

	<div class="b2" style="background-image: url('<?=CFile::ResizeImageGet($arItem["PROPERTIES"]["IMG"]["VALUE"][1], array('width'=>415, 'height'=>660), BX_RESIZE_IMAGE_EXACT, true)['src'];?>');">
		<div class="headerz">
			<p class="h3"><?=$arItem["PROPERTIES"]["TEXT"]["ONE_TEXT"]?></p>
			<? foreach($arItem["PROPERTIES"]["TEXT"]["VALUE"] as $text):?>
				<p class="h2"><?=$text;?></p>
			<? endforeach;?>
			<a class="mtr-btn mtr-btn-white" href="<?=$arItem["PROPERTIES"]["LINK_BTN"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["TEXT_BTN"]["VALUE"];?></a>
		</div>

	</div>

	<div class="b1">
		<div class="block-with-menu">
			<div class="cont">
				<div class="triple-menu-models">
					<p class="hSlimLine">Модельный Ряд</p>

					<nav class="nicescroll">
						<ul>

							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"model-home-banner",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array("NAME",""),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "7",
									"IBLOCK_TYPE" => "products",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "40",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array("","FOTO_1","FOTO_2",""),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								)
							);?>

						</ul>
						<a class="mtr-btn mtr-btn-blue go-test-drive bottom-appearer bottom-appearer-left" href="<?=$arItem['CODE']?>">Пройти Тест Драйв</a>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="b3">
		<div class="block-with-menu">
			<div class="cont">
				<div class="triple-menu-offers">
					<p class="hSlimLine">Спецпредложения</p>
					<nav>
						<ul>

							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"offer-home-banner",
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "NAME",
										1 => "DETAIL_PICTURE",
										2 => "",
									),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "8",
									"IBLOCK_TYPE" => "products",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "40",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
										0 => "PROFIT",
										1 => "",
										2 => "",
									),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N",
									"COMPONENT_TEMPLATE" => "offer-home-banner"
								),
								false
							);?>

						</ul>
					</nav>
				</div>

			</div>
		</div>
	</div>

</div>
<?endforeach;?>


