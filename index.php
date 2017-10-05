<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Официальный дилер Volvo в Воронеже - автосалон Вольво. Все комплектации и цены ");
$APPLICATION->SetTitle("");
?>


    <!--CONTENT-->

<?$APPLICATION->IncludeComponent("bitrix:news.list", "home-slider-top", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "FILTER_NAME" => "",	// Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "27",	// Код информационного блока
    "IBLOCK_TYPE" => "slide_and_banner",	// Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "3",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",	// Название категорий
    "PARENT_SECTION" => "",	// ID раздела
    "PARENT_SECTION_CODE" => "",	// Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "TEXT",
        2 => "TEXT_BTN",
        3 => "LINK_BTN",
        4 => "IMG",
    ),
    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
),
    false
);?>


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
if (CModule::IncludeModule("iblock")):
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PAGE_URL","PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => 23, "ACTIVE" => "Y","PROPERTY_SHOW_HOME_VALUE" => "Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($res->result->num_rows):
?>
    <div class="model-seo-text">

        <?
        while($ob = $res->GetNextElement()):
            $arFields = $ob->GetFields();
        ?>

                <div class="model-seo-text-item">
                 <a href="<?=$arFields['DETAIL_PAGE_URL']?>">
                    <div class="model-seo-text-item-text">
                        <div class="model-seo-text-item-text-wrapper">
                            <h2><?=$arFields['NAME']?></h2>
                            <p><?=$arFields['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
                    <div class="model-seo-text-item-image delme" style="display: block; background-image: url('<?=CFile::GetPath($arFields['PREVIEW_PICTURE']);?>');"></div>
                 </a>
                </div>


        <? endwhile; ?>

    </div>
    <?endif;?>
<?endif;?>

    <div class="clear"></div>

<?
if (CModule::IncludeModule("iblock")):
    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PAGE_URL","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID" => 28, "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($res->result->num_rows):
        ?>
        <h1 style="text-align: center;margin-top: 100px; margin-bottom: 10px;"><?=CIBlock::GetByID(28)->GetNext()['NAME'];?></h1>
        <div class="model-seo-text">
            <?
            while($ob = $res->GetNextElement()):
                $arFields = $ob->GetFields();
                ?>
                <div class="model-seo-text-item">
                    <a href="<?=$arFields['DETAIL_PAGE_URL']?>">
                        <div class="model-seo-text-item-text">
                            <div class="model-seo-text-item-text-wrapper">
                                <h2><?=$arFields['NAME']?></h2>
                                <p><?=$arFields['PREVIEW_TEXT']?></p>
                            </div>
                        </div>
                        <div class="model-seo-text-item-image delme" style="display: block; background-image: url('<?=CFile::GetPath($arFields['PREVIEW_PICTURE']);?>');"></div>
                    </a>
                </div>
            <? endwhile; ?>
        </div>
    <?endif;?>
<?endif;?>

    <div class="clear"></div>



    <div class="main-page-content-wrapper" style="display: block; background-image: url('/img/home-par.jpg');">
        <div class="main-page-content">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/home-text.php"
                )
            );?>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>