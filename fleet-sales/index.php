<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "Финансовые Услуги");
?>
<style>
    .nav.force-sticky-nav {
        background-color: #222 !important;
    }
    .typo1 {

    }

    .typo1 strong {
        font-weight: bold;
    }

    .typo1 h2 {
        font-family: 'Arial Narrow', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif !important;
        font-size: 46px;
        line-height: 60px;
        font-weight: 600;
        letter-spacing: -1px;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .typo1 h2 {
            line-height: 35px;
            font-size: 30px;
        }
    }

    .typo1 h3 {
        font-size: 32px;
        line-height: 37px;
        font-weight: normal;
        font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif !important;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 5px;
    }

    .typo1 a {
        border-bottom: none;
    }

    .typo1 h3.t-center,
    .typo1 a.t-center,
    .typo1 p.t-center {
        text-align: center;
    }

    .typo1 a.t-center {
        width: 100%;
        display: block;
    }

    .typo1 h4 {
        font-size: 26px;
        line-height: 30px;
        font-weight: normal;
        font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif !important;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 5px;
    }



    .typo1 h5 {
        font-size: 18px;
        font-weight: bold;
    }



    .typo1 .t-columns {
        zoom: 1;
        margin-top: 40px;
    }
    .typo1 .t-column {
        text-align: left;
        zoom: 1;
        display: inline-block;
        /*outline: 1px solid blue;*/
        /*width: 380px;*/
        max-width: 380px;
        vertical-align: top;
        margin-bottom: 40px;
    }

    .typo1 .t-column p,
    .typo1 .t-column h3 {
        /*.typo1 .t-column h3,*/
        /*.typo1 .t-column ul {*/
    }
    .typo1 .t-column ul {
        margin-right: 20px;
        margin-left: 43px;
    }

    .typo1 p,
    .typo1 a,
    .typo1 ul li,
    .typo1 ol li {
        font-size: 16px;
        line-height: 24px;
    }
    .typo1 p.soaring1 {
        font-style: italic;
        margin-bottom: 130px;
    }
    .typo1 p.soaring1.soaring1notLast {
        margin-bottom: 10px;
    }

    .typo1 p.nano-small {
        text-align: left;
        max-width: 70%;
        font-size: 12px;
        line-height: 18px;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .typo1 p.disclaimer {
        text-align: left;
        font-size: 12px;
        line-height: 18px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .typo1 ol,
    .typo1 ul {
        text-align: left;
        margin-left: 23px;
        margin-bottom: 10px;
    }

    .typo1 ol li,
    .typo1 ul li {
        list-style-position: outside;
    }

    .typo1 ol li {
        list-style-type: decimal;
    }

    .typo1 ul li {
        list-style-type: disc;
    }

    .typo1 .imgAndCont {
        text-align: center;
    }

    .typo1 .imgAndCont .imgWrapperz,
    .typo1 .imgAndCont .cont {
        display: inline-block;
        /*width: 600px;*/
        max-width: 600px;
        vertical-align: top;
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .typo1 .imgAndCont img {

    }
    .typo1 .imgAndCont .cont {
        text-align: left;
        margin-left: 40px;
    }

    @media (max-width: 1274px) {
        .typo1 .imgAndCont .imgWrapperz,
        .typo1 .imgAndCont .cont {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .typo1 .imgAndCont .cont {
            margin-left: 0px;
        }
    }

    .typo1 .bigBlueLabel {
        background-color: #003057;
        color: white;
        width: 75%;
        margin: 0px auto;
        margin-bottom: 60px;
        font-weight: bold;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .typo1 .bigBlueLabel p {
        max-width: 100%;
    }

    .typo1 .table1 {
        width: 75%;
        min-width: 290px;
        margin: 0 auto;
        margin-bottom: 90px;
        border: 1px solid;
    }
    .typo1 .table1 tr {
        zoom: 1;
    }

    .typo1 .table1 tbody tr:nth-child(even) {
        background-color: #ddd;
    }

    .typo1 .table1 tr td {
        border-bottom: 1px solid;
        border-left: 1px solid;
    }

    .typo1 .table1 tr td p {
        min-width: 100%;
    }

    .typo1 .table1 tr td * {
        margin-left: 20px;
    }

    .typo1 .table1 tr td h4 {
        margin-right: 20px;
        overflow: hidden;
        font-size: 22px;
    }


    .typo1 .table1 tr td:first-child {
        text-align: left;
    }

    .typo1 .table1 thead {
        background-color: #ddd;
    }

    .typo1 .table1 body {
        zoom: 1;
    }

    .typo1 .zVerySimpleContent {
        width: 70%;
        text-align: left;
        margin: 0 auto;
        margin-bottom: 80px;
        min-width: 290px;
    }


    .typo1 .zVerySimpleContent p {
        min-width: 100%;
    }

    .no-border-bottom {
        border-bottom: none !important;
    }


    .z-subnav {
        position: fixed;
        top: 200px;
        outline: 1px solid black;
    }

    /***************************************************/

    .design-and-buy {
        text-align: center;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .design-and-buy.design-and-buy-dark {
        background-color: #111;
        color: white;
    }

    .design-and-buy p {
        margin-left: auto;
        margin-right: auto;
    }

    .design-and-buy__block-wrapper {
        zoom: normal;
        margin-top: 40px;
    }
    .design-and-buy__block-wrapper:after {
        content : "";
        display: table;
        clear: both;
    }

    .design-and-buy__block {
        zoom: normal;
        /*outline: 1px solid darkblue;*/
        /*width: 380px;*/
        display: inline-block;
        vertical-align: top;
        max-width: 380px;
        margin-bottom: 10px;
    }

    .design-and-buy__block img {
        margin-bottom: 10px;
        max-width: 285px;
    }

    .design-and-buy__block p {
        zoom: 1;
        margin-left: 10px;
        margin-right: 10px;
    }

    .design-and-buy__block a.zSquared {
        zoom: 1;
        color: white;
        border: 1px solid white;
        display: block;
        width: 200px;
        height: 40px;
        text-transform: uppercase;
        line-height: 37px;
        margin: 0 auto;
        text-decoration: none !important;

        transition: color 0.2s, background-color 0.2s;
    }

    .design-and-buy__block a.zSquared:hover {
        background-color: white;
        color: #111;
    }

    /***************************************************/
    /***************************************************/

    .z-leasing-program {
        /*outline: 1px solid green;*/
        margin-top: 50px;
    }

    .z-leasing-program-item {
        /*outline: 1px solid darkred;*/
        display: inline-block;
    }

    .z-leasing-program-item .z-img-href {
        zoom: 1;
        display: block;
        margin-bottom: 15px;
        text-decoration: none;
        border-bottom: none;
    }

    .z-leasing-program-item .z-img-href img{
        zoom: 1;
    }

    .z-leasing-program-item .z-text-href {
        zoom: 1;
    }
    /***************************************************/

    /***************************************************/

    .w-container {
        box-sizing: border-box;
        margin: 0 auto;
    }

    .w-container p {
        max-width: 100%;
        color: #222;
    }
    @media (max-width: 639px){
        .w-container {
            width: 100%;
        }
        .w-container.w-container-paddinged {
            padding-left: 15px;
            padding-right: 15px;
        }

        .no-xs {display: none;}
    }
    @media (min-width: 640px) and (max-width: 919px){
        /*.w-container {width: 640px;}*/
        .w-container {width: 600px;}
        .no-sm {display: none;}
    }

    @media (min-width: 920px) and (max-width: 1279px) {
        /*.w-container {width: 920px;}*/
        .w-container {width: 880px;}
        .no-md {display: none;}
    }

    @media (min-width: 1280px) {
        /*.w-container {width: 1280px;}*/
        .w-container {width: 1240px;}
        .no-lg {display: none;}
    }


</style>

<?$APPLICATION->IncludeComponent(
    "prime:html-blocks.header-secondary",
    "",
    Array(
        "MAIN_LINK" => [
            "TEXT" => "Финансовые Услуги",
            "HREF" => "/fleet-sales/",
            "HAS_BACK_ARROW" => ""
        ],
        "HALF_STATIC_NAV_LOGO" => "Y",
        "HALF_STATIC_NAV_RIGHT_SIDE" => "Y",
    )
);?>


<?$APPLICATION->IncludeComponent(
    "prime:html-blocks.big-banner",
    "",
    Array(
        "BG_IMAGE_URL" => "/img/hero_InvestorRelations_VCC_26747_2.jpg",
        "TEXT_PRE_HEADER" => "КОРПОРАТИВНЫЕ ПРОДАЖИ",
        "TEXT_HEADER" => "Разумный выбор <br> для вашего бизнеса",
        "TEXT_POST_HEADER" => "Volvo на службе у вашей компании."
    )
);?>

<div class="typo1 design-and-buy">
    <h2>Подойдет для любого бизнеса</h2>
    <p>Автомобили Volvo в течение многих лет пользуются заслуженной популярностью в корпоративных автопарках. Наш модельный ряд предлагает решения для самых разных потребностей вашего бизнеса. Безопасность, надёжность и готовность к эксплуатации в суровых условиях, высококлассное сервисное обслуживание вместе с индивидуальным подходом к каждому клиенту. Автомобили Volvo — созданы для вашего бизнеса.</p>
    <div class="t-columns">

        <div class="t-column">
            <a href="/models/xc60/"><img src="/img/car/XC60.png" alt=""></a>
            <h3 class="t-center">Внедорожник для дальних поездок</h3>
            <p class="t-center">XC60</p>
            <a class="t-center" href="/models/xc60/">УЗНАЙТЕ БОЛЬШЕ</a>

        </div>

        <div class="t-column">
            <a href="/models/s60/"><img src="/img/car/S60.png" alt=""></a>
            <h3 class="t-center">Повседневная работа и отдых</h3>
            <p class="t-center">S60</p>
            <a class="t-center" href="/models/s60/">УЗНАЙТЕ БОЛЬШЕ</a>
        </div>

        <br>

        <div class="t-column">
            <a href="/models/v40_cross_country/"><img src="/img/car/V40 Cross Country.png" class=""></a>
            <h3 class="t-center">Поездки по городу</h3>
            <p class="t-center">V40 Сross Country</p>
            <a class="t-center" href="/models/v40_cross_country/">УЗНАЙТЕ БОЛЬШЕ</a>

        </div>

    </div>
</div>


</div>
</div>
</div>

<?$APPLICATION->IncludeComponent(
    "prime:html-blocks.big-banner",
    "",
    Array(
        "BG_IMAGE_URL" => "/img/hero.jpg",
        "TEXT_PRE_HEADER" => "",
        "TEXT_HEADER" => "ОСТАВЬТЕ ЗАЯВКУ — ОСТАЛЬНОЕ МЫ <br>ВОЗЬМЕМ НА СЕБЯ",
        "TEXT_POST_HEADER" => "Наша задача — обеспечить максимально удобный процесс приобретения автомобилей, а также сервисной поддержки для корпоративных клиентов."
    )
);?>

<div class="typo1 design-and-buy">
    <div class="imgAndCont">
        <div class="imgWrapperz">
            <!--<img data-src="/images/pages/cars/fleet-sales/Fleet_Feature.jpg" class="w-lazy">-->
        </div>
        <div class="cont">
            <p>Более 50 лет VOLVO успешно поставляет автомобили дипломатическим миссиям, международным организациям и дипломатам по всему миру. Сегодня Volvo Cars предлагает превосходную программу восхитительных продуктов, обладающих бескомпромиссной безопасностью, новаторским дизайном, высоким качеством и экологической безопасностью.</p>
            <p>Подразделение Volvo Cars по продаже автомобилей дипломатам (Volvo Cars Diplomat Sales) отвечает за продвижение этой специальной программы в международном сообществе. Наша программа служит только одной цели — мы стремимся обеспечить для вас преимущества и удобство при покупке автомобиля, отвечающего вашим требованиям, а также соблюдение применимых правил и предписаний.</p>
            <p>Пожалуйста, попросите официального дилера Volvo, имеющего специализированных продавцов-консультантов, предоставить вам дополнительную информацию о нашей программе продажи автомобилей дипломатам и доступных вам льготах.</p>
        </div>
    </div>

    <div class="imgAndCont">
        <div class="cont">
            <p>СОТРУДНИЧЕСТВО С VOLVO</p>
            <p>Более подробную информацию о корпоративных продажах Volvo Вы можете получить, связавшись с нами.</p>
            <p>
                Воронеж, ул. Изыскателей, 23 <br>
                Телефон: +7 (473) 23-303-23 <br>
                Факс: +7 (473) 23-303-23<br>
            </p>
        </div>
        <div class="imgWrapperz">
            <!--<img data-src="/images/pages/cars/fleet-sales/extfeat2_xc60_vertical.jpg" class="w-lazy">-->
        </div>
    </div>
</div>


<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>