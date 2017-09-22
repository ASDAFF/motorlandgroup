<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["ITEMS"] as $cell=> $arItem){
$file=array();
$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>920, 'height'=>700), BX_RESIZE_IMAGE_PROPORTIONAL);
$arResult['ITEMS'][$cell]['PICT']=$file;

}
?>