<!--[if lte IE 8]>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="ru-RU" class="lt-ie9 standard-page">
<![endif]-->
<!--[if gt IE 8]><!-->
<!DOCTYPE html>
<html lang="ru-RU" class="standard-page">
<!--<![endif]-->
<head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.min.css" />

    <!-- COM-526 Add Canonical Tag Change Ends -->
    <!--[if !IE]><!-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/spi.min.css?v=1.8.0.16725" />
    <!--<![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.ie9-blessed3.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.ie9-blessed2.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.ie9-blessed1.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.ie9.css?v=1.8.0.16725" />
    <![endif]-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/LeadNurturingCustomStyle.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/core.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/oxp.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/lxp.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/about.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/storytelling.min.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/car-locator.min.css?v=1.8.0.16725" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->ShowHead();?>

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <script src="<?=SITE_TEMPLATE_PATH?>/js/head.min.js?v=1.8.0.16725"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/adrum-config.js?v=1.8.0.16725"></script> <!-- RUM Configuration -->

    <!--[if !IE]><!-->

    <!--<![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.ie9-blessed1.css?v=1.8.0.16725" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.ie9.css?v=1.8.0.16725" />
    <![endif]-->

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ru.css">

</head>
<body>
<style>
    #panel {
        position: fixed;
        top: 0px;
        z-index: 10000;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        transition: top 0.2s;
    }

    #panel.hiddenz {
        top: -200px;
        display: none;
    }
</style>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="volvo" class="content">

    <nav id="New-Main-Navigation">
        <div id="primary-navigation-bar" class="primary-navigation-bar">

            <div class="logo-block">
                <div class="logo-container">
                    <a href="/"> <img src="/img/volvo-logo-scaled.png" alt="Volvo Logo" /></a>
                </div>
            </div>
            <div id="v2-mob" class="v2-nav-scroll">
                <div class="left-menu-block">
                    <div class="nav-list new-nav nav-list-prim v2nav-mob-menu force-sticky-nav">
                        <a data-nav-drop-id="#nav-" class="nav-list-item is-icon is-menu js-drop" href="#">
                            <i class="menu-nav">Меню</i>
                            <i class="icon icon-close"></i>
                        </a>

                    </div>
                    <div class="primary-nav-wrap">
                        <div class="left-menu-title" data-nav-title="Автомобили" id="Автомобили">
                            Модельный ряд
                            <span></span>
                        </div>
                        <div class="nav-arrow-down icon-angle-right"></div>

                        <div id="left-menu-content_Автомобили" data-cattype="Автомобили" data-index="0" class="left-menu-content v2newnav left-menu-closed">

                            <div class="v2new-subnav on">
                                <div class="v2nav-container">
                                    <a id="v2nav-mob-angle" href="javascript:show_menu();" class="v2nav-mob-angle"><i class="icon icon-angle-left"></i></a>
                                    <div class="left-gradient"></div>
                                    <div class="right-gradient"></div>
                                    <div id="outter_sub_cat_Автомобили" class="v2_nav_sub_menu_out">

                                        <ul id="sub_cat_Автомобили" class="v2newnav-list">
                                            <li data-index="1" data-tab="Все"><a>Все</a> </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div id="navigation-bar-content" class="navigation-bar-content">
                                <div class="v2new-navigation">
                                    <div class="v2nav-container">
                                        <div class="v2nav-inner">
                                            <div id="left_Автомобили" class="v2nav-cont-left cars">
                                                <div data-count="1" data-all='0' class="item v2nav-inner v2nav-list" id="Все">

                                                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "model-list-menu-finans", Array(
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
                                                            0 => "NAME",
                                                            1 => "",
                                                        ),
                                                        "FILTER_NAME" => "",	// Фильтр
                                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                                        "IBLOCK_ID" => "7",	// Код информационного блока
                                                        "IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
                                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                                                        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                                        "NEWS_COUNT" => "40",	// Количество новостей на странице
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
                                                            1 => "FOTO_1",
                                                            2 => "FOTO_2",
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


                                                </div>


                                                <div data-count="5" class="item v2nav-inner v2nav-list extraLink-mobile" id="Узнать_больше">


                                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "model-and-about-menu-finans", Array(
                                                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                                            0 => "",
                                                        ),
                                                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                                        "ROOT_MENU_TYPE" => "model_menu",	// Тип меню для первого уровня
                                                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                                    ),
                                                        false
                                                    );?>

                                                </div>

                                            </div>

                                            <div id="right" class="v2nav-cont-rgt">
                                                <div class="v2nav-nav-drop-body">
                                                    <h3 class="v2nav-nav-drop-item-title"><span>Узнать больше</span></h3>

                                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "model-and-about-menu-finans", Array(
                                                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                                            0 => "",
                                                        ),
                                                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                                        "ROOT_MENU_TYPE" => "model_menu",	// Тип меню для первого уровня
                                                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                                    ),
                                                        false
                                                    );?>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="close-drop-down"></div>

                            </div>
                        </div>
                    </div>
                    <div class="primary-nav-wrap">
                        <div class="left-menu-title" data-nav-title="Покупка" id="Покупка">
                            О компании
                            <span></span>
                        </div>
                        <div class="nav-arrow-down icon-angle-right"></div>

                        <div id="left-menu-content_Покупка" data-cattype="Покупка" data-index="1" class="left-menu-content v2newnav left-menu-closed">

                            <div class="v2new-subnav">
                                <div class="v2nav-container">
                                    <a id="v2nav-mob-angle" href="javascript:show_menu();" class="v2nav-mob-angle"><i class="icon icon-angle-left"></i></a>
                                    <div class="left-gradient"></div>
                                    <div class="right-gradient"></div>
                                    <div id="outter_sub_cat_Покупка" class="v2_nav_sub_menu_out">

                                        <ul id="sub_cat_Покупка" class="v2newnav-list other-sub-cat-title">
                                            <li data-index="1" id="sub_allcat_Покупка" data-count="1" data-tab="Все"><a>Все</a> </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div id="navigation-bar-content" class="navigation-bar-content">
                                <div class="v2new-navigation v2new-about-wrap">
                                    <div class="v2nav-container">
                                        <div class="v2nav-inner">
                                            <div id="left_Покупка" class="v2nav-cont-left">
                                                <div class="nav-drop-car">
                                                    <img src="http://motorlandgroup.ru/img/foto_salona.jpg" class="w-lazy"/>
                                                </div>
                                            </div>

                                            <div class="v2nav-cont-rgt">
                                                <div class="v2nav-nav-drop-body">
                                                    <div class="v2nav-nav-drop-item-title">
                                                        Узнать больше
                                                    </div>
                                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "model-and-about-menu-finans-div", Array(
                                                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                                            0 => "",
                                                        ),
                                                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                                        "ROOT_MENU_TYPE" => "about_menu",	// Тип меню для первого уровня
                                                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                                    ),
                                                        false
                                                    );?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="close-drop-down"></div>

                            </div>
                        </div>
                    </div>
                    <div class="primary-nav-wrap" onclick="window.location.href='http://www.volvocars.com/ru/configurator-volvo/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%8B-%D0%B2%D0%BD%D0%B5%D0%B4%D0%BE%D1%80%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8';return false;">
                            <div class="left-menu-title" id="">
                                Конфигуратор
                                <span></span>
                            </div>
                    </div>
                    <div class="primary-nav-wrap" onclick="window.location.href='/service/';return false;">
                        <div class="left-menu-title" id="">
                            Сервис
                            <span></span>
                        </div>
                    </div>


                </div>

                <div class="right-menu-block">
                    <div class="right-menu-title"><a href="/feedback/test-drive/" target="_self">Тест-драйв</a><span></span></div>
                    <div class="right-menu-title"><a href="https://www.privilegeclub.ru/" target="_self">Privilege Club™</a><span></span></div>
                    <div class="right-menu-title"><a href="http://www.volvocars.com/ru/configurator-volvo/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%8B-%D0%B2%D0%BD%D0%B5%D0%B4%D0%BE%D1%80%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8" target="_self">Конфигуратор</a><span></span></div>

                    <nav class="lxp-mainMenu lxp-js-mainMenu"></nav>

                </div>
            </div>
        </div>

    </nav>

    <div id="backupSection" style="display:none">
        <ul id="backupTitlle"></ul>
        <div id="backupleftContent"></div>

    </div>


