<?php

//Комплектация и цены
$arFilter = Array('IBLOCK_ID' => 11,"ID" =>  $arResult['PROPERTIES']['price']['VALUE']);
$db_list = CIBlockSection::GetList(false, $arFilter, true);

while($ar_result = $db_list->GetNext())
{
    $arResult['COMPLECT_AND_PRICE'][$ar_result['ID']]['NAME'] = $ar_result['NAME'];

    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID"=> $ar_result['IBLOCK_ID'],"SECTION_ID" => $ar_result['ID'], "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        $arResult['COMPLECT_AND_PRICE'][$ar_result['ID']]['ITEM'][$arFields['ID']]['name'] = $arFields['NAME'];
        $arResult['COMPLECT_AND_PRICE'][$ar_result['ID']]['ITEM'][$arFields['ID']]['power'] = $arProps['power']['VALUE'];
        $arResult['COMPLECT_AND_PRICE'][$ar_result['ID']]['ITEM'][$arFields['ID']]['trans'] = $arProps['trans']['VALUE'];
        $arResult['COMPLECT_AND_PRICE'][$ar_result['ID']]['ITEM'][$arFields['ID']]['price'] = $arProps['price']['VALUE'];
    }

}


//Комплектация
$arFilter = Array('IBLOCK_ID' => 12,"ID" =>  $arResult['PROPERTIES']['complete']['VALUE']);
$db_list = CIBlockSection::GetList(false, $arFilter, true);

while($ar_result = $db_list->GetNext())
{
    $arResult['COMPLECT'][$ar_result['ID']]['NAME'] = $ar_result['NAME'];

    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID"=> $ar_result['IBLOCK_ID'],"SECTION_ID" => $ar_result['ID'], "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();

        foreach($arProps as $key => $val){
            if($arProps[$val['CODE']]['VALUE']){
                $arProps[$val['NAME']] = $arProps[$val['CODE']]['VALUE'];
                unset($arProps[$val['CODE']]);
            }else{
                unset($arProps[$val['CODE']]);
            }
        }
        $arResult['COMPLECT'][$ar_result['ID']]['ITEM'] = $arProps;
    }
}

//Контент пазл на модельной странице
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PREVIEW_PICTURE","PREVIEW_TEXT");
$arFilter = Array("IBLOCK_ID" => 13,"ID" => $arResult['PROPERTIES']['PAZZLE_CONTENT']['VALUE'], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult['PAZZLE'][] = $arFields;
}