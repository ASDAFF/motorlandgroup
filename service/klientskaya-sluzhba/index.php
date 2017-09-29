<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("kalkulyator-to");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/service-menu.php"
    )
);?>

    <link href="/css/services-path.css" type="text/css"  rel="stylesheet" />

    <div class="img-one" style="height: 522px;">
        <img class="w-lazy delme" src="/upload/iblock/4a7/4a741d64216e916f9713a54cd116c519.jpg">
        <div class="banner-text">
            <p>Актуальные спецпредложения дилера</p>
            <p>в ленте ниже</p>
        </div>
    </div>



    <div class="visual">


        <style>
            #nav.nav.force-sticky-nav.transparent {
                background-color: #222;
            }
            .contact-list{
                list-style: none;
            }
        </style>
        <!--<h3>cars</h3>-->
        <div class="container">
            <div class="row">


                <div class="col-xs-12 strange-page-content">
                    <div class="page">
                        <h2>Программы технического обслуживания автомобилей Volvo</h2>
                        <div class="optional-service-form">
                            <ul class="contact-list">
                                <li class="active">
                                    <div class="slider">
                                        <span class="offer-form-title">Клиентская служба</span>
                                        <?$APPLICATION->IncludeComponent("mystery:feedback.all.ajax", "page.feedback.form", array(
                                            "IBLOCK_TYPE" => "Feedback",
                                            "IBLOCK_ID" => "19",
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

                        <style>
                            .page > p {
                                font-family: 'Volvo Sans Regular', 'Arial Narrow', 'Helvetica Neue', Helvetica, Roboto, Arial, Arial, Helvetica, sans-serif;
                                font-size: 18px;
                                font-weight: normal;
                                line-height: 27px;
                                text-align: justify;
                            }
                        </style>

                        <p style="font-weight: bold;">
                            При шиномонтаже в нашем сервисном центре комплексная мойка и проверка углов установки колес в подарок!
                        </p>
                        <p style="text-align: center;">
	<span style="font-weight: bold;"><br>
	</span>
                        </p>
                        <p style="text-align: center;">
	<span style="font-weight: bold;"><br>
	</span>
                        </p>
                        <p style="text-align: center;">
	<span style="font-weight: bold;"><img width="800" alt="107eb25a35f2f082ab23af1bed70dd28.jpg" src="/upload/medialibrary/dfd/dfd61c3be56a5bb3dc7baf9372ab3894.jpg" height="1142" title="107eb25a35f2f082ab23af1bed70dd28.jpg"><br>
	</span>
                        </p>
                        <p style="text-align: center;">
	<span style="font-weight: bold;"><br>
	</span>
                        </p>
                        <p style="text-align: center;">
                            <span style="font-weight: bold;">Еще одна новая услуга от нашего салона – сезонное хранение шин.</span><br>
                        </p>
                        <p style="text-align: justify;">
                            Теперь вы можете не только переобуть зимнюю резину на летнюю, не простаивая очередей в шиномонтажках, а потягивая горячий кофе в нашем салоне, но и оставить нам вашу резину до следующей смены сезонов. Не нужно больше складировать комплекты шин в гараже, сарае или на балконе. Просто оставьте эти хлопоты нам.
                        </p>
                        <p style="text-align: justify; ">
                            <img alt="333.jpg" src="/upload/medialibrary/e43/e43afb40c89365b3b5191bf9294cfb20.jpg" title="333.jpg" border="0">
                        </p>
                        <p style="font-weight: bold;">
                            Узнать обо всем подробнее и записаться на шиномонтаж и проверку развал/схождения можно по телефону: (473) 23-303-23.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>