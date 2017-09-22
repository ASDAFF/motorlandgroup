<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<style>
    #nav.nav.force-sticky-nav.transparent {
        background-color: #222;
    }
</style>
<!--<h3>cars</h3>-->
<div class="container">
    <div class="row">

        <?
            $classes = (count($arResult["ITEMS"]) > 0)
                ? 'col-xs-12 col-md-9 col-md-push-3'
                : 'col-xs-12';
        ?>

        <div class="<?=$classes?> strange-page-content">
            <div class="page">
                <h2><?=$arResult["UF_TITLE"]?></h2>
                <?if($arResult["UF_FORM_TO"]!=""){?>
                    <div class="optional-service-form">
                        <ul class="contact-list">
                            <li class="active">
                                <div class="slider">
                                    <span class="offer-form-title">Запись на ТО</span>
                                    <?$APPLICATION->IncludeComponent("mystery:feedback.all.ajax", "page.feedback.form", array(
                                        "IBLOCK_TYPE" => "Feedback",
                                        //								"IBLOCK_ID" => "6",
                                        "IBLOCK_ID" => "23",
                                        "ACTIVED" => "Y",
                                        "ID_POPUP" => "feedback2",
                                        "DESC_TEXT" => "Все поля отмеченные *, обязательны для заполнения",
                                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                        "EMAIL_TO" => "zhukov@motorlandgroup.ru, savvina@motorlandgroup.ru, obrazhnikov@motorlandgroup.ru",
                                        "FIELDS" => array(
                                            0 => "NAME",
                                            1 => "PHONE",
                                            2 => "EMAIL",
                                            3 => "TIME",
                                            4 => "MODEL",
                                        ),
                                        "REQUIRED_FIELDS" => array(
                                            0 => "NAME",
                                            1 => "PHONE",
                                            2 => "EMAIL",
                                        ),
                                        "EVENT_MESSAGE_ID" => array(
                                            0 => "8",
                                        ),
                                        "USE_CAPTCHA" => "N",
                                        "CAPTCHA_WIDTH" => "",
                                        "CAPTCHA_HEIGHT" => "",
                                        "AJAX_MODE" => "Y",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "N",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => ""
                                    ),
                                        false
                                    );?>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?}?>
                <?if($arResult["UF_FORM_TIRE"]!=""){?>
                    <div class="optional-service-form">
                        <ul class="contact-list">
                            <li class="active">
                                <div class="slider">
                                    <span class="offer-form-title">Записаться на Шиномонтаж</span>
                                    <?$APPLICATION->IncludeComponent(
                                        "mystery:feedback.all.ajax",
                                        "page.feedback.form",
                                        array(
                                            "IBLOCK_TYPE" => "Feedback",
                                            //		"IBLOCK_ID" => "10",
                                            "IBLOCK_ID" => "24",
                                            "ACTIVED" => "Y",
                                            "ID_POPUP" => "feedback3",
                                            "DESC_TEXT" => "Все поля отмеченные *, обязательны для заполнения",
                                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                            "EMAIL_TO" => "pivovarova@motorlandgroup.ru, obrazhnikov@motorlandgroup.ru",
                                            "FIELDS" => array(
                                                0 => "NAME",
                                                1 => "PHONE",
                                                2 => "EMAIL",
                                                3 => "TIME",
                                                4 => "MODEL",
                                            ),
                                            "REQUIRED_FIELDS" => array(
                                                0 => "NAME",
                                                1 => "PHONE",
                                                2 => "EMAIL",
                                            ),
                                            "EVENT_MESSAGE_ID" => array(
                                                0 => "8",
                                            ),
                                            "USE_CAPTCHA" => "N",
                                            "CAPTCHA_WIDTH" => "",
                                            "CAPTCHA_HEIGHT" => "",
                                            "AJAX_MODE" => "Y",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "N",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => ""
                                        ),
                                        false
                                    );?>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?}?>

                <?if($arResult["UF_FORM_QEST"]!=""){?>
                    <div class="optional-service-form">
                        <ul class="contact-list">
                            <li class="active">
                                <div class="slider">
                                    <span class="offer-form-title">Задать вопрос</span>
                                    <?$APPLICATION->IncludeComponent(
                                        "mystery:feedback.all.ajax",
                                        'page.feedback.form',
                                        array(
                                            "IBLOCK_TYPE" => "Feedback",
                                            //		"IBLOCK_ID" => "4",
                                            "IBLOCK_ID" => "22",
                                            "ACTIVED" => "Y",
                                            "ID_POPUP" => "feedback",
                                            "DESC_TEXT" => "Все поля отмеченные *, обязательны для заполнения",
                                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                            "EMAIL_TO" => "isemenova@motorlandgroup.ru, obrazhnikov@motorlandgroup.ru",
                                            "FIELDS" => array(
                                                0 => "NAME",
                                                1 => "PHONE",
                                                2 => "EMAIL",
                                                3 => "MESSAGE",
                                            ),
                                            "REQUIRED_FIELDS" => array(
                                                0 => "NAME",
                                                1 => "PHONE",
                                                2 => "EMAIL",
                                                3 => "MESSAGE",
                                            ),
                                            "EVENT_MESSAGE_ID" => array(
                                                0 => "8",
                                            ),
                                            "USE_CAPTCHA" => "N",
                                            "CAPTCHA_WIDTH" => "",
                                            "CAPTCHA_HEIGHT" => "",
                                            "AJAX_MODE" => "Y",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "N",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => ""
                                        ),
                                        false
                                    );?>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?}?>
                <?=$arResult["DESCRIPTION"]?>
            </div>
        </div>

        <?if(count($arResult["ITEMS"]) > 0):?>
            <div class="col-xs-12 col-md-3 col-md-pull-9 strange-menu">
                <ul>
                    <?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
                        <li><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></li>
                    <?endforeach;?>
                </ul>
            </div>
        <?endif;?>

    </div>
</div>