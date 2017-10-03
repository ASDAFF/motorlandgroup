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
 <img src="/upload/client_sl.jpg" class="w-lazy delme">
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
							<h1>Записаться на Шиномонтаж</h1>
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
		"IBLOCK_ID" => "36",
		"IBLOCK_TYPE" => "Feedback",
		"ID_POPUP" => "feedback2",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"PHONE",2=>"EMAIL",),
		"USE_CAPTCHA" => "N"
	)
);?>
						</div>
					</div>
					<h2 style="text-align: center;">Отдел по работе с клиентами</h2>
					 <style>
                            .page > p {
                                font-family: 'Volvo Sans Regular', 'Arial Narrow', 'Helvetica Neue', Helvetica, Roboto, Arial, Arial, Helvetica, sans-serif;
                                font-size: 18px;
                                font-weight: normal;
                                line-height: 27px;
                                text-align: justify;
                            }
                        </style>
					<p>
						 Деятельность всех отделов компании Мотор Ленд направлена на достижение общей цели Volvo – быть первыми среди автомобильных компаний в удовлетворении потребностей клиентов. Поэтому ваше мнение о качестве работы нашего дилерского центра очень важно для нас.<br>
					</p>
					<p style="font-weight: bold;">
						 Если вы недовольны услугами, предоставленными вам в нашем салоне, обращайтесь с вопросами, замечаниями и пожеланиями непосредственно руководителю клиентской службе, Ирине Семеновой.<br>
					</p>
					<p>
						 Тел. 8-920-405-20-25. <br>
						 E-mail: <a href="mailto:isemenova@motorlandgroup.ru">isemenova@motorlandgroup.ru</a>
					</p>
					<p style="text-align: center;">
 <span style="font-weight: bold;"><img src="/upload/klientskaya-sl.JPG" style="width:35%"><br>
 </span> <br>
 <br>
					</p>
					<p>
						 С уважением, отдел по работе с клиентами Мотор Ленд.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>