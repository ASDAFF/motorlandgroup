<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul>
<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
	<li <?if($arElement["CODE"]==$_REQUEST["ELEMENT_CODE"]){?>class="act"<?}?>><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></li>
<?endforeach;?>
</ul>
