<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div id="volvo" class="content" >




	<a href="/" class="logoOnTop hideItOnPrint"></a>
	<a href="tel:+74732330323" class="phoneOnTop hideItOnPrint">
		<i class="fa fa-phone"></i>
        <span class="hidden-xs hidden-sm wtext">
            <span class="wsmall">+7 (473)</span> 23-303-23
        </span>
	</a>


	<div class="hideItOnPrint">

		<style>
			#main-slider-big-slides button{
				display: none!important;
			}
		</style>

		<div id="main-slider-big-slides">
			<?foreach ($arResult["PROPERTIES"]["SLIDER_IMG"]["VALUE"] as $k=> $sliderImage):?>
			<div class="main-slider-big-slide">
				<img class="big-image" data-lazy="<?=CFile::ResizeImageGet($sliderImage, array('width'=>2000, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, true)['src']?>" alt="<?=$arResult['NAME']?>">
			</div>
			<?endforeach;?>
		</div>

		<div class="main-slider-small-slides-wrapper">
			<div id="main-slider-small-slides">
				<?foreach ($arResult["PROPERTIES"]["SLIDER_IMG"]["VALUE"] as $k=> $sliderImage):?>
				<div class="main-slider-small-slide">
					<img class="small-image" data-lazy="<?=CFile::ResizeImageGet($sliderImage, array('width'=>250, 'height'=>150), BX_RESIZE_IMAGE_EXACT, true)['src']?>" alt="<?=$arResult['NAME']?>">
				</div>
				<?endforeach;?>
			</div>
		</div>


		<div class="disclaimers">
			<div class="container">
				<div class="row">
					<div class="d-model col-xs-6 col-lg-3">
						<p class="name"><?=$arResult['PROPERTIES']['NAME_SHORT']['VALUE'];?></p>
					</div>
					<div class="d-order col-xs-6 col-lg-3 col-lg-push-6">
						<p class="make-order-please visible-lg-block">Сделайте заказ <br>и мы вам перезвоним</p>
						<a href="#formAnchor" class="mtr-btn mtr-btn-red mtr-btn-wide mtr-btn-big-letters w-link-nm-JS">Заказать</a>
					</div>
					<div class="d-price col-xs-12 col-sm-6 col-lg-3 col-lg-pull-3">
						<hr class="visible-xs">
						<div class="row">
							<div class="col-xs-4 col-sm-12">
								<p class="price-word">Цена <span class="hidden-xs">Данного Автомобиля</span></p>
							</div>
							<div class="col-xs-8 col-sm-12">
								<p class="text-right p-old"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"];?></p>
								<p class="text-right p-new"><?=$arResult["PROPERTIES"]["NEW_PRICE"]["VALUE"];?></p>
							</div>
						</div>
						<hr class="visible-xs">
					</div>
					<div class="d-profit col-xs-12 col-sm-6 col-lg-3 col-lg-pull-3">
						<p>
							<span>Ваша Выгода</span>
							<br class="hidden-xs">
							<span class="d-accent"><?=$arResult["PROPERTIES"]["PROFIT"]["VALUE"];?></span>
						</p>
						<hr class="visible-xs">
					</div>
				</div>
			</div>
		</div>



		<div class="specificationsAndStandardEquipment"
			 style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?=CFile::ResizeImageGet($arResult['PROPERTIES']['FON_STANDART']['VALUE'], array('width'=>2000, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, true)['src']?>');"
			>
			<div class="specifications">
				<p class="hBrazen">Основные Характеристики</p>

				<hr>

				<div class="row">
					<?foreach ($arResult["PROPERTIES"]["CHAR"]["VALUE"] as $desc => $prop):?>
					<div class="col-xs-6 col-sm-4 col-lg-2 oneSpec" data-mh="specOnOffers78787">
						<p class="name"><?=$prop;?></p>
						<div class="square">
							<div class="arrow-up"></div>
							<p class="value"><?=$arResult["PROPERTIES"]["CHAR"]["DESCRIPTION"][$desc]?></p>
						</div>
					</div>
					<? endforeach; ?>
				</div>

			</div>
			<div class="standardEquipment">
				<p class="hBrazen">Стандартная Комплектация</p>
				<hr>
				<p class="hBrazen"><?=$arResult["PROPERTIES"]["PRICE_COMPLECTATION"]["VALUE"];?></p>

				<div class="row">
					<?foreach ($arResult["PROPERTIES"]["STANDART"]["VALUE"] as $desc => $prop):?>
					<div class="col-xs-12 col-lg-6 check-z">
						<p class="item-z" data-mh="kdtvmigjd">
							<?=$prop;?>
							<span class="square"></span>
						</p>
					</div>
					<? endforeach; ?>
				</div>
			</div>

			<div class="order-button-wrapper">
				<a href="#formAnchor" class="mtr-btn mtr-btn-red mtr-btn-wide w-link-nm-JS mtr-btn-big-letters" >Заказать</a>
			</div>

		</div>

		<div class="allAdditional" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?=CFile::ResizeImageGet($arResult['PROPERTIES']['OPT_FON']['VALUE'], array('width'=>2000, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, true)['src']?>');">

			<div class="additionalOptions">
				<p class="hBrazen">Дополнительные Опции</p>
				<hr>
				<p class="hModest">Опции</p>
				<hr>

				<div class="row">
					<?foreach ($arResult["PROPERTIES"]["OPTIONS"]["VALUE"] as $desc => $prop):?>
					<div class="col-xs-12 col-lg-6 check-z">
						<p class="item-z" data-mh="ikjytgjhj">
							<span class="right-sidez"><span></span></span>
							<?=$prop;?>
							<span class="square"></span>
						</p>
					</div>
					<? endforeach; ?>
				</div>

				<p class="hModest">Стоимость Опций</p>
				<hr>
				<p class="hBrazen"><?=$arResult["PROPERTIES"]["PRICE_OPTIONS"]["VALUE"];?></p>
			</div>

			<div class="additionalEquipment">

				<p class="hBrazen">Пакеты и опции</p>
				<hr>

				<div class="row">

					<div class="col-xs-12 col-lg-6 check-z">
						<p class="item-z labels" data-mhZ="yfmvibyf">
                            <span class="right-sidez">
                                <span class="listed">Стоимость Оборудования</span>
                                <span class="listed">Стоимость Установки</span>
                            </span>
						</p>
					</div>
					<div class="col-xs-12 col-lg-6 check-z hidden-xs hidden-sm hidden-md">
						<p class="item-z labels" data-mhZ="yfmvibyf">
                            <span class="right-sidez">
                                <span class="listed">Стоимость Оборудования</span>
                                <span class="listed">Стоимость Установки</span>
                            </span>
						</p>
					</div>
				</div>

				<div class="row">
					<?foreach ($arResult["PROPERTIES"]["DOP"]["VALUE"] as $x => $arDop):?>
					<?$prices_dop = explode("/", $arResult["PROPERTIES"]["DOP"]["DESCRIPTION"][$x]);?>
					<div class="col-xs-12 col-lg-6 check-z">
						<p class="item-z" data-mh="ikjytgjhj">
                            <span class="right-sidez">
                                <span class="listed"><?=$prices_dop[0]?></span>
                                <span class="listed"><?=$prices_dop[1]?></span>
                            </span><?=$arDop;?><span class="square"></span>
						</p>
					</div>
					<?endforeach;?>
				</div>
			</div>
		</div>

		<a id="formAnchor"></a>
		<div class="formAndOther" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?=CFile::ResizeImageGet($arResult['PROPERTIES']['FON_FORM']['VALUE'], array('width'=>2000, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, true)['src']?>');">

			<div class="fon_it_car"></div>

			<div class="pricez">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<p class="hheeaadd">ЦЕНА ДАННОГО<br>АВТОМОБИЛЯ</p>
						<p class="hheeaadd"><strong><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"];?></strong></p>
						<? if($arResult["PROPERTIES"]["PDF"]["VALUE"]): ?>
						<a class="mtr-btn mtr-btn-red mtr-btn-big-letters" target="_blank" href="<?=CFile::GetPath($arResult["PROPERTIES"]["PDF"]["VALUE"]);?>" title="Посмотреть в PDF" style="margin-top: 10px;">
							Посмотреть в PDF
						</a>
						<? endif; ?>
						<br class="visible-xs-block visible-sm-block">
						<br class="visible-xs-block visible-sm-block">
					</div>

					<div class="col-xs-12 col-md-8">
						<div class="positioner">
							<p class="hheeaadd">ЦЕНА СО СКИДКОЙ</p>
							<p class="hheeaadd greeeat"><?=$arResult["PROPERTIES"]["NEW_PRICE"]["VALUE"];?><sup>*</sup></p>
							<p class="micrrro">* СКИДКА ПРЕДОСТАВЛЯЕТСЯ НА ДОПОЛНИТЕЛЬНОЕ ОБОРУДОВАНИЕ</p>
						</div>
					</div>
				</div>
			</div>

			<p class="bestOffer">
				<span class="arrowZ hidden-xs hidden-sm"></span>
				Мы сделаем вам&nbsp;самое выгодное предложение&nbsp;на покупку VOLVO в России
			</p>

			<form action="">
				<div class="callAndTD row">
					<div class="form-group col-sm-4">
						<input id="user_name" type="text" class="form-control" placeholder="Имя">
					</div>
					<div class="form-group col-sm-4">
						<input id="user_email" type="email" class="form-control" placeholder="E-Mail">
					</div>
					<div class="form-group col-sm-4">
						<input id="user_phone" type="email" class="form-control" placeholder="Телефон">
					</div>

				</div>

				<div class="line"></div>

				<div class="buttonz row">
					<div class="form-group col-xs-12 col-sm-5">
						<input id="btn_form" type="button" value="заказать звонок" class="mtr-btn mtr-btn-red mtr-btn-wide mtr-btn-big-letters">
					</div>
					<div class="form-group col-xs-12 col-sm-7">
						<input id="test_btn_form" type="button" value="записаться на тест-драйв" class="mtr-btn mtr-btn-blue2 mtr-btn-wide mtr-btn-big-letters">

					</div>
				</div>
			</form>

		</div>

		<script>
			$(document).ready(function(){

				var bgGood = 'rgba(0,0,0, 0.3)';
				var bgBad = 'rgba(0,0,0, 0.6)';
				$(".fon_it_car").css("background",bgGood);

				$('input.mtr-btn').click(function(){
					var self = $(this);

					var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
					var url = '/ajax/add_phone.php';

					var data = {};
					data.user_name 	 = $('#user_name').val();
					data.user_email 	 = $('#user_email').val();
					data.user_phone = $('#user_phone').val();
					if(self.attr('id') == 'test_btn_form'){
					data.modelName = $('.d-model .name').text();
					url = '/ajax/add_test.php';
					}

					if(pattern.test($("#user_email").val())){
						$("#user_email").css("border","1px solid #a0c63a");
						var erv = 2;
					}
					if($("#user_name").val()){
						$("#user_name").css("border","1px solid #a0c63a");
						var erv = 2;
					}
					if($("#user_phone").val()){
						$("#user_phone").css("border","1px solid #a0c63a");
						var erv = 2;
					}


					if(!pattern.test($("#user_email").val())){
						$("#user_email").css("border","2px solid #ff2400");
						$(".fon_it_car").css("background",bgBad);
						var erv = 1;
					}
					if($("#user_name").val() == ""){
						$("#user_name").css("border","2px solid #ff2400");
						$(".fon_it_car").css("background",bgBad);
						var erv = 1;
					}
					if($("#user_phone").val() == ""){
						$("#user_phone").css("border","2px solid #ff2400");
						$(".fon_it_car").css("background",bgBad);
						var erv = 1;
					}

					if(pattern.test($("#user_email").val()) && $("#user_name").val() && $("#user_phone").val()){
						$(".fon_it_car").css("background",bgGood);
					}

					if(erv == 1){ return false; }
					if(erv != 1){

						$.ajax({
							url: url,
							type: "post",
							data: data,
							success: function(data){
								zzModal.show(data);
							}
						});
					}
				});
			});
		</script>

	</div>


	<div class="mPrint">
		<div class="mPrintHead">
			<div class="mPrintHead_Photo">
				<img src="<?=CFile::GetPath($arResult['PROPERTIES']['PRINT_PHOTO']['VALUE']);?>" alt="<?=$arResult['NAME']?>"/>
			</div>
			<div class="mPrintHead_Header">
				<h1>Комплектация и&nbsp;оборудование</h1>
				<h2 title="<?=$arResult['NAME']?>"><?=$arResult['NAME']?></h2>
			</div>
			<div class="mPrintHead_Logo">
				<a>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/volvo-logo-scaled.png" alt="Volvo"/>
				</a>
			</div>
		</div>
		<div class="clear"></div>
		<table>
			<tr>
				<th style="background-color:#F3F3F3;">&nbsp;</th>
				<th style="background-color:#F3F3F3;"><?=$arResult['PROPERTIES']['CHAR']['NAME']?></th>
			</tr>
			<!--loop 1 Основные Характеристики-->
			<?foreach ($arResult["PROPERTIES"]["CHAR"]["VALUE"] as $desc => $prop):?>
			<tr>
				<td><?=$prop;?></td>
				<td><?=$arResult["PROPERTIES"]["CHAR"]["DESCRIPTION"][$desc]?></td>
			</tr>
			<? endforeach; ?>

		</table>
		<!--loop 2 Стандартная Комплектация-->
		<table>
			<tr>
				<th>&nbsp;</th>
				<th><?=$arResult['PROPERTIES']['STANDART']['NAME']?></th>
			</tr>
			<?foreach ($arResult["PROPERTIES"]["STANDART"]["VALUE"] as $desc => $prop):?>
			<tr>
				<td><?=$prop;?></td>
				<td><?=$arResult["PROPERTIES"]["STANDART"]["DESCRIPTION"][$desc]?></td>
			</tr>
			<? endforeach; ?>

			<tr class="mPrint_Price">
				<td>&nbsp;</td>
				<td>Стоимость:&nbsp;<?=$arResult['PROPERTIES']['PRICE_COMPLECTATION']['VALUE']?></td>
			</tr>
		</table>

		<!--Loop 3 Опции-->
		<table>
			<tr>
				<th></th>
				<th><?=$arResult['PROPERTIES']['OPTIONS']['NAME']?></th>
			</tr>
			<?foreach ($arResult["PROPERTIES"]["OPTIONS"]["VALUE"] as $desc => $prop):?>
			<tr>
				<td><?=$prop;?></td>
				<td><?=$arResult["PROPERTIES"]["OPTIONS"]["DESCRIPTION"][$desc]?></td>
			</tr>
			<? endforeach; ?>

			<tr class="mPrint_Price">
				<td>&nbsp;</td>
				<td>
					Стоимость
					дополнительного
					оборудования:&nbsp;<?=$arResult['PROPERTIES']['PRICE_OPTIONS']['VALUE']?>
				</td>
			</tr>
		</table>
		<!--Дополнительное Оборудование-->
		<table>
			<tr>
				<th></th>
				<th><?=$arResult['PROPERTIES']['DOP']['NAME']?></th>
			</tr>
			<?foreach ($arResult["PROPERTIES"]["DOP"]["VALUE"] as $desc => $prop):?>
			<tr>
				<td><?=$prop;?></td>
				<td><?=$arResult["PROPERTIES"]["DOP"]["DESCRIPTION"][$desc]?></td>
			</tr>
			<? endforeach; ?>

			<tr class="mPrint_Price">
				<td>&nbsp;</td>
				<td>
					Стоимость
					аксессуаров с
					установкой и ндс:&nbsp;<?=$arResult['PROPERTIES']['PRICE_DOP']['VALUE']?>
				</td>
			</tr>
		</table>

			<table>
				<tr>
					<td>Официальный дилер ООО «Вольво карс»</td>
					<td><?=$arResult['PROPERTIES']['PRICE_ALL']['NAME']?></td>
				</tr>
				<tr class="mPrintFooter_End">
					<td class="mPrintFooter_End_Name">Мотор ленд</td>
					<td><?=$arResult['PROPERTIES']['OLD_PRICE']['VALUE']?></td>
				</tr>
			</table>

	</div>



	<!-- .mPrint -->
	<div id="section5" class="section hideItOnPrint" style="text-align: center;">

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"offers-list",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "CODE",
					1 => "NAME",
					2 => "DETAIL_PICTURE",
					3 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "8",
				"IBLOCK_TYPE" => "products",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "20",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "NEW_PRICE",
					1 => "OLD_PRICE",
					2 => "",
					3 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "offers-list"
			),
			false
		);?>


	</div>

</div>


