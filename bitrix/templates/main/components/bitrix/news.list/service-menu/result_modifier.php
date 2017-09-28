<?php
foreach($arResult["ITEMS"] as &$arItem){

    foreach($arItem['DISPLAY_PROPERTIES'] as $key => $ib){

        if($ib['LINK_IBLOCK_ID']) {
            $arItem['DISPLAY_PROPERTIES_E'][] = $key;
            $iblock = $ib['LINK_IBLOCK_ID'];

            $arSelect = Array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PAGE_URL","LIST_PAGE_URL");
            $arFilter = Array("IBLOCK_ID" => $iblock, "ID" => $arItem['PROPERTIES'][$key]['VALUE'], "ACTIVE" => "Y");
            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                if ($arFields) {
                    $arItem[$key][] = $arFields;
                } else {
                    $arItem[$key] = false;
                }
            }
        }
    }

}


