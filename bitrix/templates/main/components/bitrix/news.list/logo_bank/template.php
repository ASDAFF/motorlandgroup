	<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	$this->setFrameMode(true);
	?>
<div id="car-loans-tabs" class="r-tabs">
	
<ul class="r-tabs-nav" style="text-align: center;">

        <?foreach ($arResult["ITEMS"] as $arItem):?>
         <li class="r-tabs-state-default r-tabs-tab">
            <a href="<?=$arItem["CODE"]?>" class="r-tabs-anchor">
                <div class="bank">
                    <img class="" src="<?=$arItem["PICT"]["src"]?>" style="display: inline;">
                    <p></p>
                </div>
            </a>
        </li>
                 <?endforeach;?>
 </ul>
 
 
</div>
	 
    <div id="car-loans-tabs">
		<?=$arResult["DESCRIPTION"];?>
    </div>
					
					
					
