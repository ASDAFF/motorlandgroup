<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<?
$APPLICATION->AddHeadScript('/js/contacts/runtime.js');
$APPLICATION->AddHeadScript('/js/contacts/giant-script.js');
$APPLICATION->AddHeadScript("/js/contacts/run-map-rendering.js");
?>




<?
$APPLICATION->IncludeComponent(
	"prime:html-blocks.header-secondary",
	"",
	Array(
		"MAIN_LINK" => [
			"TEXT"=>"Контакты",
			"HAS_BACK_ARROW" => "N",
		],
		"HALF_STATIC_NAV_LOGO" => "Y",
		"HALF_STATIC_NAV_RIGHT_SIDE" => "Y",
	)
);
?>

	<div class="otodvigatel"></div>

	<div class="container">
		<div class="row w-contact-hold">
			<div class="col-sm-6">
				<div id="swiffycontainer" style="width: 100%; height: 540px" data-height-ratio="1"></div>
			</div>
			<div class="col-sm-6">
				<div class="addres" style="text-align: center;margin-top: 150px;font-family: 'Volvo Sans Medium','Volvo Sans Regular','Arial Narrow','Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-weight: 400;font-size: 18px;">
					<address>Воронеж, ул. Изыскателей, 23</address>

					<ul class="phone-list" style="list-style: none;padding: 0;">
						<li>Телефон: +7 (473) 23-303-23</li>

						<li>Факс: +7 (473) 23-303-23</li>

						<li>Дни и часы работы:</li>

						<li>Пн-Вс с 9:00 до 20:00</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>

<?
$APPLICATION->IncludeComponent("prime:form-tabs-on-contacts", "", []);
?>




<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"offers-list",
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
			0 => "CODE",
			1 => "NAME",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
			0 => "NEW_PRICE",
			1 => "OLD_PRICE",
			2 => "",
			3 => "",
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
		"COMPONENT_TEMPLATE" => "offers-list"
	),
	false
);?>


<?
$APPLICATION->IncludeComponent(
	"prime:address-and-panorama",
	"main_normal"
);

?>

<?$APPLICATION->IncludeComponent ( "bitrix:main.include",
	"",
	Array (
		"AREA_FILE_SHOW" => "file",
		"PATH"           => "/include/vk-plugin.php",
		"EDIT_TEMPLATE"  => ""
	),
	false );
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>