<!DOCTYPE html>
<html lang="ru-RU" class="is-nav-transparent home">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>




    <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/app.css">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick-theme.css"/>


    <!--//JQUERY//-->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.3.min.js"></script>


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
        <img src="http://motorlandgroup.ru/img/volvo-logo-scaled.png" alt="" />
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
               href="#" onclick="test_form(); return false;">Тест-драйв
            </a>
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

                            <li class="nav-drop-body-item" id="bx_3218110189_22">
                                <a href="/models/xc90/" class="nav-drop-body-item-title small-after clearfix">
                                    <h3>XC90 </h3>
                                </a>
                                <a href="/models/xc90/" class="nav-drop-body-item-img-link">

                                    <img src="http://motorlandgroup.ru/upload/resize_cache/iblock/032/196_71_1/03217f9f118b00791e21403cd726498c.png?w=197" srcset="http://motorlandgroup.ru/upload/resize_cache/iblock/032/196_71_1/03217f9f118b00791e21403cd726498c.png?w=197 1x, http://motorlandgroup.ru/upload/resize_cache/iblock/032/196_71_1/03217f9f118b00791e21403cd726498c.png?w=394 2x" sizes=""
                                         class="nav-drop-body-item-img--default"
                                        />
                                    <img src="http://motorlandgroup.ru/upload/resize_cache/iblock/3dc/196_71_1/3dc3bfc21747c651e0813d097a75ce62.png?w=197" srcset="http://motorlandgroup.ru/upload/resize_cache/iblock/3dc/196_71_1/3dc3bfc21747c651e0813d097a75ce62.png?w=197 1x, http://motorlandgroup.ru/upload/resize_cache/iblock/3dc/196_71_1/3dc3bfc21747c651e0813d097a75ce62.png?w=394 2x" sizes=""
                                         class="nav-drop-body-item-img--hover"
                                        />
                                </a>
                                <div class="nav-drop-body-item-links">
                                    <a href="/configurator/?model=xc90">Создайте</a><span class="sep"></span>
                                    <a href="/models/xc90/">Подробнее</a>
                                </div>
                                <span class="nav-drop-body-item-subtitle"> &nbsp;</span>
                            </li>

                        </ul>
                    </div>


                    <div class="nav-drop-body">

                        <ul class="nav-drop-body-row">

                            <li class="nav-drop-body-item">
                                <a class="nav-drop-body-item-link" target="_blank"   href="http://www.volvocars.com/ru/configurator-volvo/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%8B-%D0%B2%D0%BD%D0%B5%D0%B4%D0%BE%D1%80%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8">Конфигуратор            </a>
                            </li>

                        </ul>

                    </div>

                </li>

                <li id="nav-drop-item-about" class="nav-drop-item nav-drop-cars">
                    <div class="nav-drop-body nav-drop-car">
                        <img src="http://motorlandgroup.ru/img/foto_salona.jpg" class="w-lazy"/>
                    </div>
                    <div class="nav-drop-body">

                        <ul class="nav-drop-body-row">

                            <li class="nav-drop-body-item">
                                <a class="nav-drop-body-item-link" target="_blank"   href="/contacts/">Контакты</a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav-drop-hotzone">&nbsp;</div>
    </div>
</nav>

