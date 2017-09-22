<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>


    <!--CONTENT-->

    <div class="triple-banner">

        <div class="b1">
            <div class="bgImg" style="background-image: url('http://motorlandgroup.ru/upload/iblock/ff3/ff3a019c64ad10d99c2fe0469ba64ca3.jpg');"></div>
        </div>

        <div class="b2 active">

            <div class="bgImg" style="background-image: url('http://motorlandgroup.ru/upload/resize_cache/iblock/7ab/2000_2000_1/7ab00bf8182a092bbe4faccea2720b00.jpg');"></div>
            <div class="headerz">
                <p class="h3">Только этой осенью! Volvo V90 Cross Country</p>
                <p class="h2">с выгодой до 500 000 РУБ. </p>
            </div>
        </div>

        <div class="b3">
            <div class="bgImg" style="background-image: url('http://motorlandgroup.ru/upload/iblock/aa7/aa76a3b732940e1ac5bffc7fe743a118.jpg');">

            </div>
        </div>

        <div class="s1">
            <div class="headerz">
                <p class="h3">Модельный Ряд</p>
                <p class="h2"></p>
                <a class="mtr-btn mtr-btn-white" href=""></a>
            </div>

            <div class="block-with-menu">
                <div class="cont">
                    <div class="triple-menu-models">
                        <p class="hSlimLine">Модельный Ряд</p>



                        <nav class="nicescroll">
                            <ul>

                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "model-home-banner",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array("NAME",""),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "7",
                                        "IBLOCK_TYPE" => "products",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "40",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array("","FOTO_1","FOTO_2",""),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                );?>

                            </ul>
                            <a class="mtr-btn mtr-btn-blue go-test-drive bottom-appearer bottom-appearer-left" href="#" onclick="test_form(); return false;">Пройти Тест Драйв</a>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

        <div class="s2">
            <div class="headerz">
                <p class="h3">Только этой осенью! Volvo V90 Cross Country</p>
                <p class="h2">с выгодой до 500 000 РУБ. </p>
                <a class="mtr-btn mtr-btn-white" href="http://motorlandgroup.ru/news/vygoda_15_na_khs60_i_khs90/">СПЕЦИАЛЬНАЯ СЕРИЯ</a>
            </div>

        </div>

        <div class="s3">
            <div class="headerz">
                <p class="h3">Спецпредложения</p>
                <p class="h2"></p>
                <a class="mtr-btn mtr-btn-white" href=""></a>
            </div>

            <div class="block-with-menu">
                <div class="cont">
                    <div class="triple-menu-offers">
                        <p class="hSlimLine">Спецпредложения</p>
                        <nav>
                            <ul>

                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "offer-home-banner",
                                    array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(
                                            0 => "NAME",
                                            1 => "DETAIL_PICTURE",
                                            2 => "",
                                        ),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "8",
                                        "IBLOCK_TYPE" => "products",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "40",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array(
                                            0 => "PROFIT",
                                            1 => "",
                                            2 => "",
                                        ),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "COMPONENT_TEMPLATE" => "offer-home-banner"
                                    ),
                                    false
                                );?>

                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <div class="triple-banner-SM">

        <div class="b2" style="background-image: url('http://motorlandgroup.ru/upload/resize_cache/iblock/7ab/2000_2000_1/7ab00bf8182a092bbe4faccea2720b00.jpg');">
            <div class="headerz">
                <p class="h3">Только этой осенью! Volvo V90 Cross Country</p>
                <p class="h2">с выгодой до 500 000 РУБ. </p>
                <a class="mtr-btn mtr-btn-white" href="http://motorlandgroup.ru/news/vygoda_15_na_khs60_i_khs90/">СПЕЦИАЛЬНАЯ СЕРИЯ</a>
            </div>

        </div>

        <div class="b1">
            <div class="block-with-menu">
                <div class="cont">
                    <div class="triple-menu-models">
                        <p class="hSlimLine">Модельный Ряд</p>

                        <nav class="nicescroll">
                            <ul>

                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "model-home-banner",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array("NAME",""),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "7",
                                        "IBLOCK_TYPE" => "products",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "40",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array("","FOTO_1","FOTO_2",""),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                );?>

                            </ul>
                            <a class="mtr-btn mtr-btn-blue go-test-drive bottom-appearer bottom-appearer-left" href="#" onclick="test_form(); return false;">Пройти Тест Драйв</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="b3">
            <div class="block-with-menu">
                <div class="cont">
                    <div class="triple-menu-offers">
                        <p class="hSlimLine">Спецпредложения</p>
                        <nav>
                            <ul>

                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "offer-home-banner",
                                    array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(
                                            0 => "NAME",
                                            1 => "DETAIL_PICTURE",
                                            2 => "",
                                        ),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "8",
                                        "IBLOCK_TYPE" => "products",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "40",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array(
                                            0 => "PROFIT",
                                            1 => "",
                                            2 => "",
                                        ),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "COMPONENT_TEMPLATE" => "offer-home-banner"
                                    ),
                                    false
                                );?>

                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

    </div>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"offers-list", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "CODE",
			1 => "NAME",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "NEW_PRICE",
			1 => "OLD_PRICE",
			2 => "",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "offers-list"
	),
	false
);?>

<?
if (CModule::IncludeModule("iblock")):
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PAGE_URL","PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => 23, "ACTIVE" => "Y","PROPERTY_SHOW_HOME_VALUE" => "Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($res->result->num_rows):
?>
    <div class="model-seo-text">

        <?
        while($ob = $res->GetNextElement()):
            $arFields = $ob->GetFields();
        ?>

                <div class="model-seo-text-item">
                 <a href="<?=$arFields['DETAIL_PAGE_URL']?>">
                    <div class="model-seo-text-item-text">
                        <div class="model-seo-text-item-text-wrapper">
                            <h2><?=$arFields['NAME']?></h2>
                            <p><?=$arFields['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
                    <div class="model-seo-text-item-image delme" style="display: block; background-image: url('<?=CFile::GetPath($arFields['PREVIEW_PICTURE']);?>');"></div>
                 </a>
                </div>


        <? endwhile; ?>

    </div>
    <?endif;?>
<?endif;?>

    <div class="clear"></div>



    <style>
        .main-page-content-wrapper {
            /*width: 170px;*/
            width: 100%;
            margin: 0 auto;
            /*outline: 1px solid darkblue;*/
            text-align: center;
            color: #181818;
            position: relative;
            color: #B2B2B2;

            padding-left: 10px;
            padding-right: 10px;
            /*margin-bottom: 30px;*/

            /*background-image: url('//motorlandgroup.ru.images.1c-bitrix-cdn.ru/images/big-banners/15fe7c18db68e201371bcad26226c230.jpg?148544686398467');*/
            background-size: cover;
            background-position: center;
            z-index: -1;
            background-attachment: fixed;
        }

        .main-page-content-wrapper:before {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #202020;
            z-index: -1;
            content: "";
            opacity: 0.9;
        }
        .main-page-content-wrapper:after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            content: "";
            opacity: 0.1;
        }

        .main-page-content {
            max-width: 980px;
            margin: 0px auto;
            padding: 20px 0;
            text-align: left;
        }

        .main-page-content h1 {
            margin: 20px auto 10px;
            color: white;
        }

        .main-page-content h2 {
            /*margin: 20px auto 10px;*/
            color: white;

            font-family: "Volvo Broad","Volvo Sans Medium","Volvo Sans Regular","Arial Narrow","Helvetica Neue",Helvetica,Roboto,Arial,Arial,Helvetica,sans-serif !important;
            font-weight: normal !important;
            font-size: 35px !important;
            margin: 0 !important;
            padding: 0 !important;
            line-height: initial !important;
            letter-spacing: normal !important;
            margin-top: 20px;
        }

        .main-page-content p {
            margin: 10px auto;
            line-height: normal;
            font-size: 16px;
            max-width: 100%;
            color: white;
        }

        .main-page-content ul {
            color: white;
            margin-left: 30px;
        }

        .main-page-content ul li {
            font-size: 16px;
            color: white;
            list-style-type: disc;
            list-style-position: inside;
            line-height: initial;
        }

        .main-page-content a {
            font-size: 16px;
            color: #386ACA;
            text-decoration: none;
            border-bottom: none;
        }

        .main-page-content a:hover {
            text-decoration: underline;
        }

    </style>

    <div class="main-page-content-wrapper" style="display: block; background-image: url('http://motorlandgroup.ru/images/big-banners/15fe7c18db68e201371bcad26226c230.jpg');">
        <div class="main-page-content">
            <h2>Ваш лучший выбор<br>
            </h2>
            <p>
                Мы ради приветствовать вас в цитадели качественного шведского авто - автосалоне Вольво в Воронеже. Здесь вы сможете прикоснуться и стать обладателями самых мощных и безопасных моделей Volvo, качество которых оценили уже миллионы счастливчиков по всему миру. Особенно машины марки Вольво ценятся в Европе за их экологичность, мощность и лояльную ценовую политику, несмотря на все передовые инновации, которые вносят инженеры этого автоконцерна в каждую новую модель Volvo. Мы гордо презентуем вам лучшие экземпляры этих автомобилей, потому что уверены в их истинном шведском качестве.
            </p>
            <h2>Контроль качества<br>
            </h2>
            <p>
                Мы, как официальный дилер Вольво, можем предложить вам специальную цену, выгодно отличающуюся от конкурентов, на любую модель, которая придется вам по душе. Мы наслаждаемся своей работой, и испытываем огромное удовольствие, когда наш посетитель, заказав тест-драйв нового Вольво, выходит из машины с восторженными глазами и счастливой улыбкой, ведь именно ради этого мы стараемся! И, как правило, вскоре большая часть "испытателей" возвращаются в автосалон еще более довольными - оформлять покупку.
            </p>
            <h2>Безопасность важнее всего<br>
            </h2>
            <p>
                Надо признаться что мы с грустью провожаем каждый экземпляр из салона, ведь они для нас не просто машины - они образец качества, мужественности и управляемости. Каждый автомобиль, попадающий салон Мотор Ленд в Воронеже, проходит несколько сотен придирчивых проверок и тестов. Особенное внимание при осмотре мы обращаем на ходовую часть и двигатели, а профессиональный специалист дополнительно тестирует работоспособность всех систем безопасности, что бы вы стали обладателем лучшего представителя этого шведского семейства.
            </p>
            <h2>Вы это оцените<br>
            </h2>
            <p>
                Помимо продажи автомобилей, у нас вы можете пройти техническое обслуживание авто, заказать кузовной ремонт и полировку краски, приобрести дополнительные аксессуары, получить бесплатную консультацию и многое другое. Мы, как официальный автосалон Volvo в Воронеже готовы предоставить вам весь спектр услуг, связанный с покупкой и владением европейским эталоном - Вольво. На этом сайте вы можете познакомиться с моделями и комплектациями, спецпредложениями и акциями, доступными в Воронеже. Если вы еще не были владельцем Вольво, то приготовьтесь - совсем скоро вы измените свое представление о комфорте и экологичности.
            </p>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>