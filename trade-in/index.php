<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Автомобили с пробегом (trade-in)");
?>
    <style>
        .nav.force-sticky-nav {
            background-color: #222 !important;
        }
    </style>
<?
$APPLICATION->IncludeComponent(
    "prime:html-blocks.header-secondary",
    "",
    Array(
        "MAIN_LINK" => [
            "TEXT"=>"Каталог Автомобилей в Trade In. Телефон отдела 8-919-232-99-99",
            "HAS_BACK_ARROW" => "N",
        ],
        "HALF_STATIC_NAV_LOGO" => "Y",
        "HALF_STATIC_NAV_RIGHT_SIDE" => "Y",
    )
);
?>

    <div id="main-model-2" class="main-model-2">
        <div class="w-container">

            <?
            $APPLICATION->IncludeComponent("bitrix:catalog.section", "offers.on.model2", Array(
                "ADD_PICT_PROP" => "-",
                "LABEL_PROP" => "-",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_BTN_DETAIL" => "Подробнее",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "IBLOCK_TYPE" => "content",	// Тип инфоблока
                "IBLOCK_ID" => "17",	// Инфоблок
                "SECTION_ID" => "",	// ID раздела
                "SECTION_CODE" => "",	// Код раздела
                "SECTION_USER_FIELDS" => array(	// Свойства раздела
                    0 => "",
                    1 => "",
                ),
                "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
                "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
                "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
                "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
                "FILTER_NAME" => "arrOffers",	// Имя массива со значениями фильтра для фильтрации элементов
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
                "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
                "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
                "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
                "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
                "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
                "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
                "PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
                "LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "REMAINING",
                    1 => "MODEL",
                    2 => "CAPACITY",
                    3 => "CONSUMPTION",
                    4 => "TRANSMISS",
                    5 => "NEW_PRICE",
                    6 => "OLD_PRICE",
                    7 => "SERVICE",
                    8 => "LINK1",
                    9 => "LINK2",
                    10 => "",
                ),
                "OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
                "PRICE_CODE" => "",	// Тип цены
                "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
                "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
                "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
                "PRODUCT_PROPERTIES" => "",	// Характеристики товара
                "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
                "CACHE_TYPE" => "N",	// Тип кеширования
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_NOTES" => "",
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                "PAGER_TITLE" => "Товары",	// Название категорий
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "TEMPLATE_THEME" => "blue",
                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
                "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            ),
                false
            );
            ?>
            <!--<div class="spec_trade_in">-->
            <div class="super-trade" style="margin-top: 20px;">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "trade-in_slider-2", Array(
                    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                    "IBLOCK_ID" => "17",	// Код информационного блока
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "SORT_BY1" => "sort",	// Поле для первой сортировки новостей
                    "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                    "SORT_BY2" => "id",	// Поле для второй сортировки новостей
                    "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                    "FILTER_NAME" => "",	// Фильтр
                    "FIELD_CODE" => array(	// Поля
                        0 => "DETAIL_PICTURE",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(	// Свойства
                        0 => "NEW_PRICE",
                        1 => "OLD_PRICE",
//                    2 => "",
                        2 => "YEAR",
                    ),
                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "AJAX_MODE" => "N",	// Включить режим AJAX
                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                    "CACHE_TYPE" => "N",	// Тип кеширования
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "PREVIEW_TRUNCATE_LEN" => "205",	// Максимальная длина анонса для вывода (только для типа текст)
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                    "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "PARENT_SECTION" => "",	// ID раздела
                    "PARENT_SECTION_CODE" => "",	// Код раздела
                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                    "PAGER_TITLE" => "",	// Название категорий
                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                ),
                    false
                );?>
            </div>

        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>