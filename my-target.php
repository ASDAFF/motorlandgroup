<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<torg_price date="'. date('d-m-Y') .'">';
$xml .= '<shop>';
$xml .= '<shopname>Официальный дилер Volvo</shopname>';
$xml .= '<company>ООО "Сократ"</company>';
$xml .= '<url>www.motorlandgroup.ru</url>';
$xml .= '<currencies>';
$xml .= '<currency id="RUR" rate="1"/>';
$xml .= '<currency id="USD" rate="63.70"/>';
$xml .= '</currencies>';
$xml .= '<categories>';
$xml .= '<category id="15" parentId="0">Спецпредложения</category>';
$xml .= '</categories>';
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
		
	
		 $price_new = $arResult['NEW_PRICE']['VALUE'];
		 $price_old = $arResult['OLD_PRICE']['VALUE'];
	
	 $price_new = preg_replace("/[^0-9]/", '', $price_new);
	 $price_old = preg_replace("/[^0-9]/", '', $price_old);
	 	 
	  
	  $xml .= '<offer id="'.$arResult['ID'].'" available="true" cbid="'.$price_new.'">';
	  $xml .= '<url>'.'http://www.motorlandgroup.ru/pages/offers/'.$arResult['CODE'].'/'.'</url>';
	  $xml .= '<price>'.$price_new.'</price>';
	  $xml .= '<oldprice>'.$price_old.'</oldprice>';
	  $xml .= '<currencyId>RUR</currencyId>';
	  $xml .= '<categoryId>15</categoryId>';
				$file = CFile::ResizeImageGet($arResult['SLIDER_IMG']['VALUE'][0], array('width'=>1000, 'height'=>600), BX_RESIZE_IMAGE_EXACT, true);                
				$xml .= '<picture>http://'.$_SERVER['SERVER_NAME'].$file['src'].'</picture>';	  
	  $xml .= '<typePrefix>'.$body_type.'</typePrefix>';
	  $xml .= '<vendor>Volvo</vendor>';
	  $xml .= '<model>'.$arResult['NAME_SHORT']['VALUE'].'</model>';
	  $xml .= '<description>'.$arResult['DESCRIDTION_AVITO_XML']['VALUE']['TEXT'].'</description>';
	  $xml .= '<delivery>true</delivery>';
	  $xml .= '<pickup>true</pickup>';
	  $xml .= '<local_delivery_cost>0</local_delivery_cost>';
	  
	  
	  
	  
	  
	  
	  $xml .= '</offer>';
	  
	  

}
	endif;
	
	$xml .= '</offers>';
	$xml .= '</shop>';
	$xml .= '</torg_price>';
	
	//echo $xml;
	
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/my-target.xml', $xml);
	
	
