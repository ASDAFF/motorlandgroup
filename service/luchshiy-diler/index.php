<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("luchshiy-diler");
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
    <img src="/upload/best-1.jpg" class="w-lazy delme">
    <div class="banner-text">
        <p></p>
        <p></p>
    </div>
</div>

    <div class="container">
        <div class="row">


            <div class="col-xs-12 strange-page-content">
                <div class="page">
                    <h2 style="text-align: center;">Мотор Ленд - лучший дилер Volvo в России!</h2>

                    <style>
                        .page > p {
                            font-family: 'Volvo Sans Regular', 'Arial Narrow', 'Helvetica Neue', Helvetica, Roboto, Arial, Arial, Helvetica, sans-serif;
                            font-size: 18px;
                            font-weight: normal;
                            line-height: 27px;
                            text-align: justify;
                            word-spacing: opx;
                        }
                    </style>
                    <p style="text-align: center;">
                        <img alt="120323_0028.jpg" src="/upload/best_dil.jpg" style="width:50%" border="0">
                    </p>
                    <p>
                        В Volvo Car Russia подвели итоги работы официальных дилерских центров в России за 2014 год. По результатам оценки работы автосалонов, включающих более 60 критериев, были выбраны четыре победителя. Cреди дилеров в городах-миллионниках победителем стала компания «Мотор-Ленд».
                    </p>
                    <p>
                        Знаменательно, что именно мы, Мотор Ленд, уже второй год подряд удостаиваемся звания "Лучший дилер". В первую очередь, это результат нашей работы и внимательного отношения к каждому клиенту Volvo, который обращался в салон. Клиент - часть нашей команды, и мы никогда об этом не забываем. И конечно же, качество сервисного обслуживания напрямую зависит от профессионализма наших сервисменов. И, как показали итоги 2012, 2013 и 2014 годов, мы лучшие в России!
                    </p>            </div>
            </div>


        </div>
    </div><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>