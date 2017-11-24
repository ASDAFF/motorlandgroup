<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<avtoxml>';
$xml .= '<lastBuildDate>'.date('d-m-Y').'</lastBuildDate>';
$xml .= '<Offers>';


	if(CModule::IncludeModule("iblock")):

	$arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID" => 8, "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{

	  $arFields = $ob->GetFields();  
	  $arProps = $ob->GetProperties();
	  $arResult = array_merge($arFields, $arProps);
	  
	  
		
		if(preg_match('/S60/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3503';
			$idFrameType = '5';
		}
		elseif(preg_match('/S90/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3520';
			$idFrameType = '4';
		}
		elseif(preg_match('/V40/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3507';
			$idFrameType = '5';
		}
		elseif(preg_match('/V60/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3990';
			$idFrameType = '10';
		}
		elseif(preg_match('/V60 CC/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3990';
			$idFrameType = '10';
		}
		elseif(preg_match('/XC60/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3752';
			$idFrameType = '5';
		}
		elseif(preg_match('/XC70/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3522';
			$idFrameType = '3';
		}
		elseif(preg_match('/XC90/',$arResult['NAME_SHORT']['VALUE'],$preg)){
			$id_model = '3523';
			$idFrameType = '5';
		}
		else{
			$id_model = '0';
			$idFrameType = '0';
		}
		
		
	if(empty($arResult['SELECTION_PRICE']['VALUE'])){
	$price_new_old = $arResult['NEW_PRICE']['VALUE'];
	 }elseif($arResult['SELECTION_PRICE']['VALUE'] == 'Новая Цена'){
		 $price_new_old = $arResult['NEW_PRICE']['VALUE'];
	 }else{
		 $price_new_old = $arResult['OLD_PRICE']['VALUE'];
	 }
	 
	 if(empty($arResult['COLOR']['VALUE_ENUM_ID'])){
		 $color = 'Цвет не указан';
		 $id_color = 0;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 9){
		 $color = 'Розовый';
		 $id_color = 15;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 10){
		 $color = 'Оранжевый';
		 $id_color = 5;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 11){
		 $color = 'Коричневый';
		 $id_color = 7;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 12){
		 $color = 'Красный';
		 $id_color = 6;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 13){
		 $color = 'Золотой';
		 $id_color = 8;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 14){
		 $color = 'Зеленый';
		 $id_color = 9;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 15){
		 $color = 'Желтый';
		 $id_color = 10;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 16){
		 $color = 'Голубой';
		 $id_color = 14;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 17){
		 $color = 'Белый';
		 $id_color = 12;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 18){
		 $color = 'Бежевый';
		 $id_color = 13;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 19){
		 $color = 'Серебряный';
		 $id_color = 16;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 20){
		 $color = 'Синий';
		 $id_color = 3;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 21){
		 $color = 'Серый';
		 $id_color = 4;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 22){
		 $color = 'Фиолетовый';
		 $id_color = 2;
	 }
	 elseif($arResult['COLOR']['VALUE_ENUM_ID'] == 23){
		 $color = 'Черный';
		 $id_color = 1;
	 }
	 
	 
	 if(empty($arResult['TRANSMISS_TOORBO']['VALUE_ENUM_ID'])){
		 $idTransmission = 0;
		 $sTransmission = 'не указано';
	 }
	 elseif($arResult['TRANSMISS_TOORBO']['VALUE_ENUM_ID'] == 30){
		 $idTransmission = 2;
		 $sTransmission = 'автомат';
	 }
	 elseif($arResult['TRANSMISS_TOORBO']['VALUE_ENUM_ID'] == 31){
		 $idTransmission = 1;
		 $sTransmission = 'механическая';
	 }
	  
	 if(empty($arResult['FUEL_TYPE']['VALUE_ENUM_ID'])){
		 $idEngineType = 0;
		 $sEngineType = 'не указано';
	 }
	 elseif($arResult['FUEL_TYPE']['VALUE_ENUM_ID'] == 24){
		 $idEngineType = 1;
		 $sEngineType = 'Бензин';
	 }
	 elseif($arResult['FUEL_TYPE']['VALUE_ENUM_ID'] == 25){
		 $idEngineType = 2;
		 $sEngineType = 'Дизель';
	 }
	 
	 
	if(empty($arResult['GRAR_TYPE']['VALUE_ENUM_ID'])){
		 $idDriveType = 0;
		 $sDriveType = 'не указано';
	 }
	 elseif($arResult['GRAR_TYPE']['VALUE_ENUM_ID'] == 40){
		 $idDriveType = 1;
		 $sDriveType = 'передний';
	 }
	 elseif($arResult['GRAR_TYPE']['VALUE_ENUM_ID'] == 41){
		 $idDriveType = 2;
		 $sDriveType = 'задний';
	 }
	 elseif($arResult['GRAR_TYPE']['VALUE_ENUM_ID'] == 42){
		 $idDriveType = 3;
		 $sDriveType = 'полный (4WD)';
	 }
	 
	 
	  $xml .= '<Offer>';
	  
	  ///////////////////////////////////////////////NEW_OFFER///////////////////////////////////////////////////
	  ///////////////////////////////////////////////NEW_OFFER///////////////////////////////////////////////////
	  ///////////////////////////////////////////////NEW_OFFER///////////////////////////////////////////////////

	 
	 	  
	  $xml .= '<idOffer>'.$arResult['VIN']['VALUE'].'</idOffer>';
	  $xml .= '<idMark>90</idMark>';
	  $xml .= '<idModel>'.$id_model.'</idModel>';
//	  $xml .= '<idCountry>0</idCountry>';
//	  $xml .= '<idCity>31</idCity>';
	  $xml .= '<idCategory>0</idCategory>';
	  $xml .= '<sCity>Воронеж</sCity>';
	  $xml .= '<YearOfMade>2016</YearOfMade>';
	  $xml .= '<Price>'.$price_new_old.'</Price>';
	  $xml .= '<idCurrency>1</idCurrency>';
	  $xml .= '<sCurrency>RUB</sCurrency>';
	  $xml .= '<idNewType>1</idNewType>';
	  $xml .= '<sNewType>Да</sNewType>';
	  $xml .= '<sComplectation>'.$arResult['NAME_DROM']['VALUE'].' '.$arResult['SEATS']['VALUE'].'</sComplectation>';
	  $xml .= '<Volume>'.$arResult['CAPACITY']['VALUE'].'</Volume>';
	  $xml .= '<idFrameType>'.$idFrameType.'</idFrameType>';
	  
	   
	   $xml .= '<Photos>';
		 foreach($arResult['SLIDER_IMG']['VALUE'] as $img){ 
		 $file = CFile::GetByID($img); 
			$gallery = 'http://'.$_SERVER['SERVER_NAME'].'/upload/'.$file->arResult[0]['SUBDIR'].'/'.$file->arResult[0]['FILE_NAME'];
			$xml .= '<Photo>'.$gallery.'</Photo>';
		 }  
	   $xml .= '</Photos>';
	  
	  $xml .= '<Colors>';
	  $xml .= '<Color>';
//	  $xml .= '<idColor>'.$id_color.'</idColor>';
	  $xml .= '<sColor>'.$arResult['COLOR_DROM']['VALUE'].'</sColor>';
	  $xml .= '</Color>';
	  $xml .= '</Colors>';
	  
	  
//	  $xml .= '<sInterior>';	  
//	  foreach($arResult['OPTIONS']['VALUE'] as $option){
//		  $xml .= $option.'<br/>';
//	  }
//	  $xml .= '</sInterior>';
	  
//	   $xml .= '<transmission>'.$arResult['TRANSMISS_TOORBO']['VALUE'].'</transmission>';
	  
	  $xml .= '<Transmission>';
	  $xml .= '<idTransmission>'.$idTransmission.'</idTransmission>';
	  $xml .= '<sTransmission>'.$sTransmission.'</sTransmission>';
	  $xml .= '</Transmission>';
	  
	  
	  
	  $xml .= '<EngineType>';
      $xml .= '<idEngineType>'.$idEngineType.'</idEngineType>';
      $xml .= '<sEngineType>'.$sEngineType.'</sEngineType>';
      $xml .= '</EngineType>';
	  
	  $xml .= '<DriveTypes>';
	  $xml .= '<DriveType>';
      $xml .= '<idDriveType>'.$idDriveType.'</idDriveType>';
      $xml .= '<sDriveType>'.$sDriveType.'</sDriveType>';
      $xml .= '</DriveType>';
	  $xml .= '</DriveTypes>';
	  
	  $xml .= '<idWheelType>2</idWheelType>';
	  $xml .= '<sWheelType>левый</sWheelType>';
	  $xml .= '<Haul>0</Haul>';
	  
	  $xml .= '<idHaulRussiaType>0</idHaulRussiaType>';
	  $xml .= '<sHaulRussiaType>Нет</sHaulRussiaType>';
	  $xml .= '<Additional>';
	  foreach($arResult['OPTIONS']['VALUE'] as $option){
		  $xml .= $option;
	  }
	  $xml .= '</Additional>';
	  $xml .= '<Whereabouts>0</Whereabouts>';
	  $xml .= '<sWhereabouts>в наличии</sWhereabouts>';
	  $xml .= '<Power>'.$arResult['POWER']['VALUE'].'</Power>';
	 
	  
	  ///////////////////////////////////////////////NEW_OFFER///////////////////////////////////////////////////
	  ///////////////////////////////////////////////NEW_OFFER///////////////////////////////////////////////////
	  ///////////////////////////////////////////////NEW_OFFER///////////////////////////////////////////////////

	  
	  $xml .= '</Offer>';
	  
	  

}
	endif;
	
	$xml .= '</Offers>';
	
	$xml .= '<Dealers>';
	
	$xml .= '<Dealer>';
	
//	$xml .= '<idCity>31</idCity>';
//	$xml .= '<idCountry>0</idCountry>';

	$xml .= '</Dealer>';
	
	$xml .= '</Dealers>';
	
	$xml .= '</avtoxml>';
	
//	echo $xml;
	
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/offer-drom.xml', $xml);
	
	
