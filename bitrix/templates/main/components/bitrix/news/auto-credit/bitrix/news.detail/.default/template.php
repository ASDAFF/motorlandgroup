<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="w-container">
    <div class="conc-article">
        <?if($arResult["DETAIL_TEXT"]){?>
            <?=$arResult["DETAIL_TEXT"];?>
        <?}else{?>
            <?=$arResult["PREVIEW_TEXT"];?>
        <?}?>
    </div>
</div>
<br>
