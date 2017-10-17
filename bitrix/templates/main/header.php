<!DOCTYPE html>
<html lang="ru-RU" class="is-nav-transparent home">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?$APPLICATION->ShowTitle()?></title>

    <!--//JQUERY//-->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.3.min.js"></script>

    <?$APPLICATION->ShowHead();?>

    <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/app.css">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick-theme.css"/>




    <!--//PRIME//-->
    <script type="text/javascript" src="http://incut.prime-ltd.su/incut/incut.js" async></script>
    <link rel="stylesheet" href="http://incut.prime-ltd.su/incut/incut.css">
    <!--//PRIME//-->
</head>

<body class="">
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

<script>
    $(function(){
        var panel = $('#panel');
        panel.toggleClass('hiddenz');
        $(document).keypress("z",function(e) {
            if(e.ctrlKey && e.keyCode == '26') {
                console.dir(e);
                console.dir('ctrl+z pressed');
                panel.toggleClass('hiddenz');
            }
        });
    });
</script>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>



<!--HEADER-->


<nav id="nav" class="nav force-sticky-nav transparent nav-fallback">
    <a class="nav-logo" href="/">
        <img src="/img/volvo-logo-scaled.png" alt="" />
    </a>

    <div class="nav-list nav-list-prim">
        <a data-nav-drop-id="#nav-" class="nav-list-item is-icon is-menu js-drop" href="#"><i class="icon icon-menu"></i></a>
        <a data-nav-drop-id="#nav-drop-item-cars" class="nav-list-item nav-list-item-first js-drop">Модельный ряд </a>
        <a data-nav-drop-id="#nav-drop-item-about"  onclick='window.location.href = "/about/"' href="/abaut/" class="nav-list-item js-drop">О компании</a>

        <a target="_blank" class="nav-list-item nav-list-item-last" href="http://www.volvocars.com/ru/configurator-volvo/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%8B-%D0%B2%D0%BD%D0%B5%D0%B4%D0%BE%D1%80%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8" target="" data-nav-drop-id="#nav-drop-item-car-configurator">Конфигуратор</a>
        <a class="nav-list-item nav-list-item-last" href="/service/" target="" data-nav-drop-id="#nav-drop-item-car-configuratorZZ">Сервис</a>
    </div>

    <div class="n-top-phone-box n-top-phone-box-alt">
        <a href="tel:+74732330323">(473) 23-303-23</a>
    </div>

    <div class="right-side-head">

        <div class="nav-list nav-list-sec">
            <a class="nav-list-item w-test-drive-head-button"
               href="/feedback/test-drive/">Тест-драйв
            </a>
        </div>

        <div class="n-top-phone-box">
            <a href="/reviews/">ОТЗЫВЫ</a> 
        </div>

        <div class="n-bestdiler-logo">
            <div class="bestdealerOnHat" title="Лучший дилер VOLVO"></div>
        </div>

        <div class="n-top-phone-box">
            <a href="tel:+74732330323">(473) 23-303-23</a>
        </div>

        <div class="clearfix"></div>
    </div>
</nav>

<nav id="nav-drop" class="nav-drop nav-fallback">
    <a class="nav-drop-close" href="#"><i class="icon icon-close"></i></a>
    <div class="nav-drop-container-wrapper">
        <div class="nav-drop-container">
            <ul class="nav-drop-list">
                <li class="nav-drop-list-item">
                    <a data-nav-drop-id="#nav-drop-item-cars" class="js-slide" href="#">Модельный ряд<i class="icon icon-angle-right"></i></a>
                    <a data-nav-drop-id="#nav-drop-item-about" class="js-slide" href="/abaut/">О компании<i class="icon icon-angle-right"></i></a>
                    <a target="_blank" href="/configurator-volvo/" target="" data-nav-drop-id="#nav-drop-item-car-configurator">Конфигуратор</a>
                    <a href="/service/">Сервис</a>
                </li>
            </ul>

            <ul class="nav-drop-items">
                <li id="nav-drop-item-cars" class="nav-drop-item nav-drop-cars">
                    <a class="nav-drop-item-back" href="#"><i class="icon icon-angle-left"></i>Назад</a>

                    <div class="nav-drop-body nav-drop-car">
                        <a href="#" class="nav-drop-item-title nav-drop-item-toggle">Все модели<i class="icon icon-angle-up"></i></a>
                        <ul class="nav-drop-body-row on here2">

                            <?$APPLICATION->IncludeComponent("bitrix:news.list", "model-list-menu", Array(
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

                        </ul>
                    </div>


                    <div class="nav-drop-body">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "model-and-about-menu", Array(
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

                </li>

                <li id="nav-drop-item-about" class="nav-drop-item nav-drop-cars">
                    <div class="nav-drop-body nav-drop-car">
                        <img src="/img/foto_salona.jpg" class="w-lazy"/>
                    </div>
                    <div class="nav-drop-body">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "model-and-about-menu", Array(
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
                </li>
            </ul>
        </div>
        <div class="nav-drop-hotzone">&nbsp;</div>
    </div>
</nav>


