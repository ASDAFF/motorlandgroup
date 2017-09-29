<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("kalkulyator-to");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/service-menu.php"
	)
);?>
<div class="img-one" style="height: 660px;">
 <img src="/img/calculator_TO.jpg" class="w-lazy delme">
	<div class="banner-text">
		<p>
		</p>
		<p>
		</p>
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
        </style> <!--<h3>cars</h3>-->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 strange-page-content">
				<div class="page">
					<div class="row">
						<div class="form-new-detail">
							<h1>Запись на ТО</h1>
							 <?$APPLICATION->IncludeComponent(
	"mystery:feedback.all.ajax",
	"page.feedback.form",
	Array(
		"ACTIVED" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CAPTCHA_HEIGHT" => "",
		"CAPTCHA_WIDTH" => "",
		"DESC_TEXT" => "Все поля отмеченные *, обязательны для заполнения",
		"EMAIL_TO" => "zhukov@motorlandgroup.ru, savvina@motorlandgroup.ru, obrazhnikov@motorlandgroup.ru",
		"EVENT_MESSAGE_ID" => array(0=>"8",),
		"FIELDS" => array(0=>"NAME",1=>"PHONE",2=>"EMAIL",3=>"TIME",4=>"MODEL",),
		"IBLOCK_ID" => "20",
		"IBLOCK_TYPE" => "Feedback",
		"ID_POPUP" => "feedback2",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"PHONE",2=>"EMAIL",),
		"USE_CAPTCHA" => "N"
	)
);?>
						</div>
					</div>
					<h2 style="text-align: center;">Программы технического обслуживания автомобилей Volvo</h2>
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
						 Грамотное и своевременное обслуживание - залог надежности и долговечности Вашего Вольво.
					</p>
					<p>
						 Начните с нулевого ТО, которое проводится через три месяца после начала эксплуатации автомобиля Вами, во время которого мы произведем диагностику:
					</p>
					<p>
						 - электрооборудования автомобиля;
					</p>
					<p>
						 - износа резины и давления в шинах;
					</p>
					<p>
						 - функционирование омывателей, очистителей ветрового стекла и светотехники;
					</p>
					<p>
						 - уровня и состояния технических жидкостей.
					</p>
					<p>
						 Специалисты нашего сервиса проконсультируют вас и ответят на все ваши вопросы, появившиеся в процессе эксплуатации автомобиля.
					</p>
					<p>
						 Нулевое ТО поможет вашему Volvo оставаться надежным и безопасным.
					</p>
 <br>
					<p style="font-weight: bold;">
						 Регламент технических работ в рамках обязательного Технического обслуживания:
					</p>
					<p>
 <a href="http://motorlandgroup.ru/upload/iblock/758/7587c93eb2cbe569b76158c01287b09b.pdf" target="_blank">Техническое обслуживание для автомобилей S60, S80, XC60, V70/XC80</a>
					</p>
					<p>
 <a href="http://motorlandgroup.ru/upload/iblock/758/Tehnicheskoe obslujivanie V40CC.pdf" target="_blank">Техническое обслуживание для автомобилей V40CC</a>
					</p>
					<p>
 <a href="http://motorlandgroup.ru/upload/iblock/758/Tehnicheskoe obslujivanie dlya avtomobilei XC90.pdf" target="_blank">Техническое обслуживание для автомобилей XC90</a>
					</p>
					<p>
 <br>
					</p>
					<p style="font-weight: bold;">
						 Узнать подробнее о прохождении ТО и записаться на сервис можно по телефону: (473) 23-303-23.
					</p>
					<p>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>