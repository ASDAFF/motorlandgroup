<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$file=array();
$file = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array('width'=>275, 'height'=>150), BX_RESIZE_IMAGE_EXACT, true);
$arResult['PICT']=$file;
?>