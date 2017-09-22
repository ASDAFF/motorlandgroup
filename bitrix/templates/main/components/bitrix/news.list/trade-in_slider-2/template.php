<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $this->setFrameMode(true);
?>

<?
$cnt=count($arResult["ITEMS"]);
?>
<!--new-->
<?if ($cnt != 0):?>
    <div class="spec">
        <div class="super-trade-slider-giant">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <div class="super-trade-slide-giant">
                    <div class="item w-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="#trade-car-start" class="w-link">

                            <?
                            $sliderImage = $arItem["DETAIL_PICTURE"];
                            $renderprewfile = CFile::ResizeImageGet($sliderImage, array('width'=>250, 'height'=>150), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                            ?>

                            <img data-lazy="<?=$renderprewfile['src']?>" alt="<?=$arItem["NAME"]?>" data-height-ratio="0.7" />

                            <div class="texts">
                                <p class="name">
                                    <?
                                        $year = $arItem["PROPERTIES"]["YEAR"]["VALUE"];
                                    ?>
                                    <?=$arItem["NAME"]?>
                                    <?if($year):?>
                                        <span class="no-xs no-sm no-md"><?=$year?> г.в.</span>
                                    <?endif?>
                                </p>
                                <div class="prices no-xs no-sm">
                                    <div class="price-word">Цена</div>
                                    <div class="price-values">
                                        <?if($arItem['PROPERTIES']['OLD_PRICE']['VALUE']):?>
                                            <p class="price-old"><?=$arItem['PROPERTIES']['OLD_PRICE']['VALUE'];?></p>
                                        <?endif?>
                                        <p class="price-new"><?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE'];?></p>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?endforeach;?>
        </div>
        <div style="clear: both"></div>
        <script>
            $(document).ready(function(){


                //slick Добавляется 2 раза пушо тут 2 почти одинаковых компонента, и хрен пойми какой где подключается.
                //поэтому в глобальной переменной лежит значение, добавлен ли слик, или нет
                if (!window.isAddedSlickToGiantSlider) {
                    window.isAddedSlickToGiantSlider = true;

                    $('.super-trade-slider-giant').slick({
                        accessibility: false,
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        speed: 500,
                        lazyLoad: 'ondemand',
                        autoplaySpeed: 6000,
                        pauseOnHover: false,
                        asNavFor: '.model-offers-block-slicked',
                        focusOnSelect: true,
                        centerMode: true,
                        centerPadding: '0px',
                        draggable: false,
                        responsive: [
                            {
                                breakpoint: 960,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                },
                            },
                            {
                                breakpoint: 640,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                }
                            },
                        ]
                    });
                }
            });
        </script>
    </div>
<?endif;?>
<!--new end-->