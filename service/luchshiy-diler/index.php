<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("luchshiy-diler");
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

    <div class="container">
        <div class="row">


            <div class="col-xs-12 strange-page-content">
                <div class="page">
                    <h2>Мотор Ленд - лучший дилер Volvo в России!</h2>

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
                        <img alt="120323_0028.jpg" src="/upload/medialibrary/f2a/f2a9af785518691db2f38282fa706a9e.jpg" title="120323_0028.jpg" border="0">
                    </p>
                    <p>
                        В Volvo Car Russia подвели итоги работы официальных дилерских центров в России за 2014 год. По результатам оценки работы автосалонов, включающих более 60 критериев, были выбраны четыре победителя. Cреди дилеров в городах-миллионниках победителем стала компания «Мотор-Ленд».
                    </p>
                    <p style="text-align: center;">
                        <img alt="15.jpg" src="/upload/medialibrary/338/338bf1161f3bb7bcdea6f3768b3e506e.jpg" id="bxid_705508" title="15.jpg" border="0">
                    </p>
                    <p>
                        Знаменательно, что именно мы, Мотор Ленд, уже второй год подряд удостаиваемся звания "Лучший дилер". В первую очередь, это результат нашей работы и внимательного отношения к каждому клиенту Volvo, который обращался в салон. Клиент - часть нашей команды, и мы никогда об этом не забываем. И конечно же, качество сервисного обслуживания напрямую зависит от профессионализма наших сервисменов. И, как показали итоги 2012, 2013 и 2014 годов, мы лучшие в России!
                    </p>            </div>
            </div>


        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>