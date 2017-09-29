<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("service");
?>

    <div class="service">

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





        <?$APPLICATION->IncludeComponent("bitrix:news.list", "service-banner", Array(
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
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "31",	// Код информационного блока
            "IBLOCK_TYPE" => "slide_and_banner",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",	// Количество новостей на странице
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
                0 => "ICON",
                1 => "",
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



        <div class="container">

            <h1 style="">Сервисный центр</h1>

            <p style="text-align: center;margin-bottom: 25px">Решения Sensus включают в себя самые современные возможности доступа к информации и развлечениям. Встроенная точка доступа обеспечивает вам и вашему XC90 постоянную связь с Интернетом.123</p>


            <div class="row">

                <?
                $arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL","PREVIEW_TEXT","PREVIEW_PICTURE");
                $arFilter = Array("IBLOCK_ID" => 29,"ACTIVE"=>"Y");
                $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                while($ob = $res->GetNextElement())
                {
                    $arFields = $ob->GetFields();
                    ?>
                    <div class="col-md-4">
                        <div class="service-box">
                            <img src="<?=CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src']?>">
                            <p class="banner-text-h1"><?=$arFields['NAME']?></p>
                            <p><?=TruncateText($arFields['PREVIEW_TEXT'], 70);?></p>
                            <a class="button" href="<?=$arFields['CODE']?>">Узнать подробнее</a>
                        </div>
                    </div>
                    <?

                }
                ?>

            </div>


        </div>


        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/service-banner.php"
            )
        );?>


        <div class="container">

            <div class="margin-50"></div>
            <div class="row">

                <?
                $arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL","PREVIEW_TEXT","PREVIEW_PICTURE");
                $arFilter = Array("IBLOCK_ID" => 30,"ACTIVE"=>"Y");
                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>3), $arSelect);
                while($ob = $res->GetNextElement())
                {
                    $arFields = $ob->GetFields();
                    ?>
                    <div class="col-md-4">
                        <div class="service-box">
                            <img src="<?=CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src']?>">
                            <p class="banner-text-h1"><?=$arFields['NAME']?></p>
                            <p><?=TruncateText($arFields['PREVIEW_TEXT'], 70);?></p>
                            <a class="button" href="<?=$arFields['DETAIL_PAGE_URL']?>">Узнать подробнее</a>
                        </div>
                    </div>
                    <?

                }
                ?>

            </div>

        </div>

    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>