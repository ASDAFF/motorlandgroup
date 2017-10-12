<?php

foreach($arResult["ITEMS"] as &$arItem){
    $arItem["PROPERTIES"]["TEXT"]['ONE_TEXT'] = $arItem["PROPERTIES"]["TEXT"]["VALUE"][0];
    $arItem["PROPERTIES"]["TEXT"]['ONE_DESCRIPTION'] = $arItem["PROPERTIES"]["TEXT"]["DESCRIPTION"][0];
    unset($arItem["PROPERTIES"]["TEXT"]["VALUE"][0]);
    unset($arItem["PROPERTIES"]["TEXT"]["DESCRIPTION"][0]);
}

?>
