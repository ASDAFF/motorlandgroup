<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<yml_catalog date="'.date('Y-m-d H:m').'">';
$xml .= '<shop>';
$xml .= '<name>Моторленд</name>';
$xml .= '<company>Motorlandgroup</company>';
$xml .= '<url>http://motorlandgroup.ru/</url>';
$xml .= '<currencies>';
$xml .= '<currency id="RUR" rate="1"/>';
$xml .= '<currency id="USD" rate="61"/>';
$xml .= '</currencies>';
$xml .= '<categories>';
$xml .= '<category id="15">Volvo</category>';
$xml .= '</categories>';
$xml .= '<delivery-options>';
$xml .= '<option cost="500" days="0" order-before="15"/>';
$xml .= '</delivery-options>';
$xml .= '<offers>';

	if(CModule::IncludeModule("iblock")):

	$arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=>8, "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{

	  $arFields = $ob->GetFields();  
	  $arProps = $ob->GetProperties();
	  $arResult = array_merge($arFields, $arProps);
	  
	  if($arResult['ADD_FOR_AVITO_OFFER']['VALUE'] == 'Y'){
	  
	  
	  		if(preg_match('/XC90/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$body_type = 'Внедорожник';
		}elseif(preg_match('/XC60/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$body_type = 'Внедорожник';
		}elseif(preg_match('/S60/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$body_type = 'Седан';
		}elseif(preg_match('/V60/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$body_type = 'Универсал';
		}else{
			$body_type = 'Другая';
		}
		
	 if(empty($arResult['SELECTION_PRICE']['VALUE'])){
		 $price_new_old = $arResult['NEW_PRICE']['VALUE'];
	 }elseif($arResult['SELECTION_PRICE']['VALUE'] == 'Новая Цена'){
		 $price_new_old = $arResult['NEW_PRICE']['VALUE'];
	 }else{
		 $price_new_old = $arResult['OLD_PRICE']['VALUE'];
	 }
	 $price_new_old = preg_replace("/[^0-9]/", '', $price_new_old);
	  
	 
	  $xml .= '<offer id="'.$arResult['ID'].'" available="true" >';
	  
	  
	  $xml .= '<url>'.'http://www.motorlandgroup.ru/pages/offers/'.$arResult['CODE'].'/'.'</url>';
	  $xml .= '<price>'.$price_new_old.'</price>';
	  $xml .= '<currencyId>RUR</currencyId>';
	  $xml .= '<categoryId>15</categoryId>';
	  foreach($arResult['SLIDER_IMG']['VALUE'] as $img){
				$file = CFile::ResizeImageGet($img, array('width'=>1000, 'height'=>600), BX_RESIZE_IMAGE_EXACT, true);                
				$xml .= '<picture>'.$_SERVER['SERVER_NAME'].$file['src'].'</picture>';
				break;
	 }
	 $xml .= '<store>true</store>'; 
	 $xml .= '<delivery>false</delivery>'; 
	 $xml .= '<name>'.$arResult['NAME'].'</name>'; 
	 $xml .= '<vendor>Volvo</vendor>'; 
	 $xml .= '<model>'.$arResult['NAME_SHORT']['VALUE'].'</model>'; 
	 $xml .= '<description>'.$arResult['AVITO_MIN_DESC']['VALUE']['TEXT'].'</description>'; 
	 $xml .= '<sales_notes>Необходима предоплата 100%</sales_notes>'; 
	 $xml .= '<barcode>'.$arResult['VIN']['VALUE'].'</barcode>'; 
	 $xml .= '<age unit="year">18</age>'; 
	 $xml .= '<manufacturer_warranty>true</manufacturer_warranty>'; 
	 
	 $xml .= '<param name="Тип">'.$body_type.'</param>'; 
	 $xml .= '<param name="Цвет">'.$arResult['COLOR']['VALUE'].'</param>'; 
	 $xml .= '<param name="Дверей">5</param>'; 
	 $xml .= '<param name="Трансмиссия">'.$arResult['TRANSMISS_TOORBO']['VALUE'].'</param>'; 
	 $xml .= '<param name="Л.С">'.preg_replace("/[^0-9]/", '', $arResult['POWER']['VALUE']).'</param>'; 
	 $xml .= '<param name="Руль">левый</param>'; 
	 $xml .= '<param name="Привод ">'.$arResult['GRAR_TYPE']['VALUE'].'</param>'; 
	 $xml .= '<param name="Передач">'.$arResult['GEAR']['VALUE'].'</param>'; 
	 $xml .= '<param name="Топливо">'.$arResult['FUEL_TYPE']['VALUE'].'</param>'; 
	 $xml .= '<param name="Объем">'.$arResult['CAPACITY']['VALUE'].'</param>'; 
	 
	  
	  $xml .= '</offer>';
	 
	  }

}
	endif;
	
	$xml .= '</offers>';
	$xml .= '</shop>';
	$xml .= '</yml_catalog>';

	
	//echo $xml;
	
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/avito.xml', $xml);
	
	
