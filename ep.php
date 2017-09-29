<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<Ads>';



	if(CModule::IncludeModule("iblock")):

	$arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=>8, "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{

	  $arFields = $ob->GetFields();  
	  $arProps = $ob->GetProperties();
	  $arResult = array_merge($arFields, $arProps);
	  
	  
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
	  
	  $xml .= '<Ad>';
	  
	  
		$xml .= '<CreateDate>'.date('d-m-Y H:i:s').'</CreateDate >';
		$xml .= '<Type>Легковые</Type>';
		$xml .= '<BodyType>'.$body_type.'</BodyType>';
		$xml .= '<Make>Volvo</Make>';
		$xml .= '<Model>'.$arResult['NAME_SHORT']['VALUE'].'</Model>';
		$xml .= '<ModificationName>'.$arResult['TRANSMISS_TOORBO']['VALUE'].' '.$arResult['FUEL_TYPE']['VALUE'].' '.preg_replace("/[^0-9]/", '', $arResult['POWER']['VALUE']).' л.с</ModificationName>';
		$xml .= '<ComplName>'.$arResult['ENGINE']['VALUE'].' '.$arResult['EQUIPMENT']['VALUE'].'</ComplName>';
		$xml .= '<CompCode>'.$arResult['ID'].'</CompCode>';
		$xml .= '<DoorsCount>5</DoorsCount>';
		$xml .= '<Color>'.$arResult['COLOR']['VALUE'].'</Color>';
		$xml .= '<Year>'.date('Y').'</Year>';
		$xml .= '<Used>Новое</Used>';
		$xml .= '<Kilometrage>0</Kilometrage>';
		$xml .= '<Price>'.$price_new_old.'</Price>';
		$xml .= '<PriceEP>'.$price_new_old.'</PriceEP>';
		$xml .= '<SpecialPrice>'.$price_new_old.'</SpecialPrice>';
		$xml .= '<Currency>RUR</Currency>';
		$xml .= '<VIN>'.$arResult['VIN']['VALUE'].'</VIN>';
		$xml .= '<EngineSize>'.str_replace(array('.',','),'',$arResult['CAPACITY']['VALUE']).'00</EngineSize>';
		$xml .= '<FuelType>'.$arResult['FUEL_TYPE']['VALUE'].'</FuelType>';
		$xml .= '<Enginepower>'.preg_replace("/[^0-9]/", '', $arResult['POWER']['VALUE']).'</Enginepower>';
		$xml .= '<Transmission>'.$arResult['TRANSMISS_TOORBO']['VALUE'].'</Transmission>';
		$xml .= '<Drive>'.$arResult['GRAR_TYPE']['VALUE'].'</Drive>';
		$xml .= '<Availability>В наличие</Availability>';
		$xml .= '<SupplierName>Motorlandgroup</SupplierName>';
		$xml .= '<City>Воронеж</City>';
		$xml .= '<Car-location>Изыскателей, 23</Car-location>';
		$xml .= '<ContactName>Менеджер</ContactName>';
		$xml .= '<ContactPhone>+7 (473) 23-303-23</ContactPhone>';

			  foreach($arResult['OPTIONS']['VALUE'] as $option){
				  $xml .= '<Equipment>'.$option.'</Equipment>';
				}
				
				
		$xml .= '<Description>'.$arResult['DESCRIDTION_AVITO_XML']['VALUE']['TEXT'].'</Description>';
		
		
		$xml .= '<Images>';
			 foreach($arResult['SLIDER_IMG']['VALUE'] as $img){ 
		$file = CFile::GetByID($img); //	
		$gallery = $_SERVER['SERVER_NAME'].'/upload/'.$file->arResult[0]['SUBDIR'].'/'.$file->arResult[0]['FILE_NAME']; //Элемент gallery содержит 			
		$xml .= '<Image url="'.$gallery.'"/>';
	 }
		$xml .= '</Images>';
	  
	  
	  $xml .= '</Ad>';
}
	endif;
	

	$xml .= '</Ads>';
	
	//echo $xml;
	
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/ep.xml', $xml);
	
	
