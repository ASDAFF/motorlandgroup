<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*
 * $arItem['SECOND_PICT']
 */
if (!empty($arResult['ITEMS']))
{
?>
<div class="model-offers-block">
<?
	foreach($arResult["ITEMS"] as $key=> $arItem){
?>

<div class="spec-box spec-box-marg <?if($key==0){?>act<?}?>" id="<?=$arItem["ID"]?>"> 
	<div class="spec-block-name"><?=$arItem["NAME"]?></div>
		<div class="m-spec-left">
		<a class="spec-image fancybox-thumbs" data-fancybox-group="thumb<?=$arItem["ID"]?>" href="<?=$arItem['DETAIL_PICTURE']["SRC"]?>" style="width:300px; height:220px; background-image:url(<?=$arItem["PICT"]["src"]?>);"></a> 
		<?foreach($arItem["PROPERTIES"]["TEXT_IMG"]["VALUE"] as $arImg){
			$img=CFile::GetPath($arImg);
		?>
		<a class="spec-image-none fancybox-thumbs" data-fancybox-group="thumb<?=$arItem["ID"]?>" href="<?=$img?>"></a>
		<?}?>

		</div>
		<div class="m-spec-anons">
			<div>
				    <div class="off-title-2" style="padding: 0px 0px 5px 0px;">
						<?=$arItem["PROPERTIES"]["CHAR"]["NAME"]?>
					</div>
					<ul class="model-param-list-1" id="off-s" style="padding:0;">
						<?if($arItem["PROPERTIES"]["ENGINE"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["ENGINE"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["ENGINE"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?/*if($arItem["PROPERTIES"]["CAPACITY"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["CAPACITY"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["CAPACITY"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
<?}*/?>
						<?if($arItem["PROPERTIES"]["CAPACITY"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["CAPACITY"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["CAPACITY"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["POWER"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["POWER"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["POWER"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["TRANSMISS"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["TRANSMISS"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["TRANSMISS"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["MAXIMUM_TORQUE"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["MAXIMUM_TORQUE"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["MAXIMUM_TORQUE"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["CONSUMPTION"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["CONSUMPTION"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["CONSUMPTION"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["EMISSION"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["EMISSION"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["EMISSION"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["RUN"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["RUN"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["RUN"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
						<?if($arItem["PROPERTIES"]["YEAR"]["VALUE"]!=""){?>	
							<li>
								<small><?=$arItem["PROPERTIES"]["YEAR"]["NAME"]?></small>
								<span><?=$arItem["PROPERTIES"]["YEAR"]["VALUE"]?></span>
								<div class="clear"></div>
							</li>
						<?}?>
					</ul>
				</div>
				<?if($arItem["PROPERTIES"]["NEW_PRICE"]["VALUE"] !="" ){?>
					<span id="all-p" class="offer-price" style="margin-top:15px; padding: 5px 5px 5px 5px; font: 14px Arial; text-align:left;">Стоимость <?=$arItem["NAME"]?> - <font><?=$arItem["PROPERTIES"]["NEW_PRICE"]["VALUE"]?></font></span>
				<?}?>
		</div>
		

		<div class="clear"></div>


        <p style="font-size: 15px;"><?=$arItem["PREVIEW_TEXT"]?></p>
	</div>

	<?
	}
	?>
	</div>
<?
	if ($arParams["DISPLAY_BOTTOM_PAGER"])
	{
		?><? echo $arResult["NAV_STRING"]; ?><?
	}
}else{
echo '<p><b>Список автомобилей пуст.</b></p>';

}
?>
