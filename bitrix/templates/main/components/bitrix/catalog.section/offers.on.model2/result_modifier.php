<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["ITEMS"] as $cell=> $arItem){
$file=array();
$file = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>300, 'height'=>220), BX_RESIZE_IMAGE_PROPORTIONAL, true);                                                  
$arResult['ITEMS'][$cell]['PICT']=$file;

}
?>