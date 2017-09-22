	<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	$this->setFrameMode(true);
	?>

    <div class="otodvigatel"></div>
    <div class="w-container many-articles">
        
        <?foreach ($arResult["ITEMS"] as $arItem):?>
        <article class="article-item">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <img src="<?=$arItem["PICT"]["src"]?>" alt="" data-height-ratio="0.7" class="">
            </a>
            <div class="content">
                <h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=TruncateText($arItem["NAME"], 75)?></a></h2>
                <p><?=TruncateText($arItem["PREVIEW_TEXT"], 200)?></p>
                <a class="blue-button" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
            </div>
        </article>
        <?endforeach;?>
    </div>

    <!--before pagination-->
    <?if ($arParams["DISPLAY_BOTTOM_PAGER"]) {
        print $arResult["NAV_STRING"];
    }?>
    <!--after pagination-->
