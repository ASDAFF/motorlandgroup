<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*
 * $arItem['SECOND_PICT']
 */


if (!empty($arResult['ITEMS'])) {}?>

<!--new-->
<a id="trade-car-start"></a>

<div class="model-offers-block model-offers-block-slicked">

    <?$counter = 0;?>
    <?foreach($arResult["ITEMS"] as $key=> $arItem):?>
        <?$counter += 1;?>
        <div class="spec-box spec-box-marg act"
             id="<?=$arItem["ID"]?>"
            >
            <div class="spec-block-name" style="margin-bottom: 15px;">
                <?=$arItem["NAME"]?>
            </div>
            <div class="m-spec-left">

                <!--old-->
                <!--<a class="spec-image fancybox-thumbs"
                   data-fancybox-group="thumb<?/*=$arItem["ID"]*/?>"
                   href="<?/*=$arItem['DETAIL_PICTURE']["SRC"]*/?>"
                   style="width:300px; height:220px; background-image:url(<?/*=$arItem["PICT"]["src"]*/?>);">

                </a>
                <?/*foreach($arItem["PROPERTIES"]["TEXT_IMG"]["VALUE"] as $arImg):*/?>
                    <?/*$img=CFile::GetPath($arImg);*/?>
                    <a class="spec-image-none fancybox-thumbs" data-fancybox-group="thumb<?/*=$arItem["ID"]*/?>" href="<?/*=$img*/?>"></a>
                --><?/*endforeach;*/?>
                <!--old end-->

                <!--new-->

                <?
                    $imagesBig = [];
                    $imagesSmall = [];

                    $imagesBig[]= CFile::ResizeImageGet(
                        $arItem['DETAIL_PICTURE']['ID'],
//                        array("width" => 1024, "height" => 1024),
                        array("width" => 800, "height" => 800),
                        BX_RESIZE_IMAGE_PROPORTIONAL
                    )['src'];;

                    $imagesSmall[] = CFile::ResizeImageGet(
                        $arItem['DETAIL_PICTURE']['ID'],
                        array("width" => 100, "height" => 100),
                        BX_RESIZE_IMAGE_PROPORTIONAL
                    )['src'];

                    foreach($arItem["PROPERTIES"]["TEXT_IMG"]["VALUE"] as $arImg) {
                        $imagesBig[] = CFile::ResizeImageGet(
                            $arImg,
//                            array("width" => 1200, "height" => 1200),
                            array("width" => 800, "height" => 800),
                            BX_RESIZE_IMAGE_PROPORTIONAL
                        )['src'];


                        $imagesSmall[] = CFile::ResizeImageGet(
                            $arImg,
                            array("width" => 100, "height" => 100),
                            BX_RESIZE_IMAGE_PROPORTIONAL
                        )['src'];
                    }
                ?>


                <div class="trade-car-big-slider" id="trade-car-big-slider-<?=$counter?>">
                    <?foreach($imagesBig as $arImg):?>
                        <?$i+=1;?>
                        <div class="trade-car-big-slide">
                            <img class="car-big-image" src="<?=$arImg?>" data-height-ratio="0.7" />
                        </div>
                    <?endforeach;?>
                </div>
                <div class="trade-car-small-slider" id="trade-car-small-slider-<?=$counter?>">
                    <?foreach($imagesSmall as $arImg):?>
                        <?
                        $i+=1;
                        ?>
                        <div class="trade-car-small-slide">

                            <img class="car-small-image" src="<?=$arImg?>" data-height-ratio="0.7" />
                        </div>
                    <?endforeach;?>
                </div>
                <!--new end-->



            </div>
            <div class="m-spec-anons">
                <div>
                    <div class="off-title-2" style="padding: 0px 0px 0px 0px; ">
                        <?=$arItem["PROPERTIES"]["CHAR"]["NAME"]?>
                    </div>
                    <ul class="model-param-list-1" id="off-s">
                        <?if($arItem["PROPERTIES"]["ENGINE"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["ENGINE"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["ENGINE"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>

                        <?if($arItem["PROPERTIES"]["CAPACITY"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["CAPACITY"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["CAPACITY"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>

                        <?if($arItem["PROPERTIES"]["POWER"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["POWER"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["POWER"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>

                        <?if($arItem["PROPERTIES"]["TRANSMISS"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["TRANSMISS"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["TRANSMISS"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>

                        <?if($arItem["PROPERTIES"]["MAXIMUM_TORQUE"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["MAXIMUM_TORQUE"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["MAXIMUM_TORQUE"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>

                        <?if($arItem["PROPERTIES"]["CONSUMPTION"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["CONSUMPTION"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["CONSUMPTION"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>

                        <?if($arItem["PROPERTIES"]["EMISSION"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["EMISSION"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["EMISSION"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>
                        <?if($arItem["PROPERTIES"]["RUN"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["RUN"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["RUN"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>
                        <?if($arItem["PROPERTIES"]["YEAR"]["VALUE"]!=""):?>
                            <li>
                                <small><?=$arItem["PROPERTIES"]["YEAR"]["NAME"]?></small>
                                <span><?=$arItem["PROPERTIES"]["YEAR"]["VALUE"]?></span>
                                <div class="clear"></div>
                            </li>
                        <?endif;?>
                    </ul>
                </div>
                <?if($arItem["PROPERTIES"]["NEW_PRICE"]["VALUE"] !="" ):?>
                    <span id="all-p" class="offer-price" style="margin-top:15px; padding: 5px 5px 5px 5px; font: 14px Arial; text-align:left;">Стоимость <?=$arItem["NAME"]?> - <font><?=$arItem["PROPERTIES"]["NEW_PRICE"]["VALUE"]?></font></span>
                <?endif;?>


                <p
                    class="p-preview-text"

                    ><?=$arItem["PREVIEW_TEXT"]?></p>
            </div>


            <div class="clear"></div>


<!--                    <p style="font-size: 15px;">--><?//=$arItem["PREVIEW_TEXT"]?><!--</p>-->
        </div>
    <?endforeach;?>
</div>

<script>
    $(document).ready(function(){

        var slider = $('.model-offers-block-slicked');

        slider.slick({
            accessibility: false,
            arrows: false,
            draggable: false,
            fade: true,
            asNavFor: '.super-trade-slider-giant',
            adaptiveHeight: true,
        });
    });
</script>
