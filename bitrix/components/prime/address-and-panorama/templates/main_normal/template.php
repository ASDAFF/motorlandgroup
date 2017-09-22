<h1 style="text-align: center; margin: 20px !important;">Наш адрес</h1>
<div class="main_map">

    <div class="map_block">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/map_main.php",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>
    </div>
</div>
<div class="salon-photo">
    <div class="contacts">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/work_time.php",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>
    </div>

    <div class="photo">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/photo_salon.php",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>
    </div>
</div>