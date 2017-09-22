<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["ITEMS"] as $cell=> $arItem){
$file=array();
$file = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>275, 'height'=>150), BX_RESIZE_IMAGE_EXACT, true);                                                  
$arResult['ITEMS'][$cell]['PICT']=$file;

}
?>