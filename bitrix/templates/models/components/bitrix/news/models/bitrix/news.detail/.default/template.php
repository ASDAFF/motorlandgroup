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



<!--secondary nav start-->
<div class="subnav subnav_model">
	<a href="#" title="Наверх" class="scroll-top js-scroll-top">Наверх</a>
	<div class="subnav-header subnav-header-has-subtitle">
		<h2 class="subnav-title"><?=$arResult["NAME"]?></h2>
		<div class="subnav-subtitle">
            <span style="font-size:15px;">Рекомендованная цена <strong><?=$arResult['PROPERTIES']['price_r']['VALUE']?></strong>
		</div>
	</div>

	<div class="subnav-content">
		<div class="subnav-items">
			<a class="subnav-item " href="#price" >
				Комплектация цены
				<small class="subnav-desc"></small>
			</a>
			<a class="subnav-item " href="#gallery_" >
				Галерея
				<small class="subnav-desc"></small>
			</a>


			<ul class="har_menu no_m">
				<a class="subnav-item " href="/har/?model=<?=$arResult['CODE']?>" >
					Характеристики
					<small class="subnav-desc"></small>
				</a>
				<ul class="nav-drop-body-row">
					<? foreach($arResult['PROPERTIES']['LINK_HAR']['VALUE'] as $key => $desc):?>
					<li class="nav-drop-body-item"><a class="nav-drop-body-item-link" href="<?=$desc;?>"><?=$arResult['PROPERTIES']['LINK_HAR']['DESCRIPTION'][$key]?></a></li>
					<? endforeach; ?>
				</ul>

			</ul>
			<a class="subnav-item " href="#spec" >
				Спецпредложения
				<small class="subnav-desc"></small>
			</a>
			<a class="subnav-item " href="#model-forms" >
				Тест-драйв
				<small class="subnav-desc"></small>
			</a>

			<a target="_blank" class="subnav-item " href="http://www.volvocars.com/ru/configurator-volvo/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%8B-%D0%B2%D0%BD%D0%B5%D0%B4%D0%BE%D1%80%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8/<?=$arResult['CODE']?>" >
				Создать
				<small class="subnav-desc"></small>
			</a>

		</div>

		<div class="subnav-inner">

			<div class="subnav-select">
				<a class="button button-small button-light button-semi-opaque button-select-simple" href="#">
					<span class="subnav-select-title"><?=$arResult['NAME']?></span>
					<span id="subnav-select-value"><?=$arResult['NAME']?> Обзор</span>
				</a>
				<select name="" id="subnav-select-input">

					<option selected value="#gallery_"><?=$arResult['NAME']?> Обзор</option>
					<option value="#price" data-target="">Комплектация цены</option>
					<option value="#gallery_" data-target="">Галерея</option>
					<option value="#spec" data-target="">Спецпредложения</option>
					<option value="#model-forms"  data-target="">Тест-драйв</option>

					<? foreach($arResult['PROPERTIES']['LINK_HAR']['VALUE'] as $key => $desc):?>
					<option value="<?=$desc;?>" data-target=""><?=$arResult['PROPERTIES']['LINK_HAR']['DESCRIPTION'][$key]?></option>
					<? endforeach; ?>

				</select>
			</div>
			<div class="subnav-buttons">
				<a class="button button-small button-light button-semi-opaque" href="http://www.volvocars.com/ru/configurator-volvo/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%8B-%D0%B2%D0%BD%D0%B5%D0%B4%D0%BE%D1%80%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8/<?=$arResult['CODE']?>">Создать</a>
			</div>
		</div>
	</div>

</div>

<!--secondary nav end-->

<div class="lineup_block" style="background-color: #222;color: white;">


	<div class="img-one">
		<img class="delme" src="<?=CFile::GetPath($arResult['PROPERTIES']['BANNER']['VALUE']);?>"/>
		<div class="banner-text">
			<?
			$arBannerDesc = explode('~',$arResult['PROPERTIES']['BANNER']['DESCRIPTION']);
			foreach($arBannerDesc as $str):?>
				<p><?=$str;?></p>
			<? endforeach; ?>
		</div>
	</div>

	<script>
		$(function(){
			$('.img-one').css('height',$('.img-one img').height());
		});
	</script>

	<div id="spec"></div>

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


	<div id="price"></div>


	<?

	?>
	<div class="price">
		<div class="extf-body">
			<h2 class="complects-and-prices">Комплектации и цены</h2>
		</div>

		<p>Предлагаем вам ознакомиться с рекомендованными розничными ценами на модель Volvo XC90.</p>

		<div style="height:3px;">&nbsp;</div>

		<? foreach($arResult['COMPLECT_AND_PRICE'] as $price_com):?>
		<div class="z">
			<div class="tech">
				<strong><?=$price_com['NAME']?></strong>
			</div>
		</div>
		<div class="t" style="text-align: justify;">
			<table class="model-complectations" data-breakpoints='{ "xs": 320, "sm": 600, "md": 748, "lg": 1200, "xl": 1400 }'>
				<thead>
				<tr>
					<th>Комплектация</th>
					<th data-breakpoints="xs">Мощность</th>
					<th data-breakpoints = "xs">Трансмиссия</th>
					<th style="width: 130px">Цена</th>
				</tr>
				</thead>
				<tbody>
				<? foreach($price_com['ITEM'] as $com):?>
				<tr>
					<td><?=$com['name']?></td>
					<td><?=$com['power']?></td>
					<td><?=$com['trans']?></td>
					<td><?=$com['price']?></td>
				</tr>
				<? endforeach; ?>
				</tbody>
			</table>
		</div>
		<br />
		<div style="height:5px;">&nbsp;</div>
		<div style="height:3px;">&nbsp;</div>
		<? endforeach; ?>


		<br />


		<div style="height:5px;">&nbsp;</div>
		<p>Основные комплектации Volvo  XC90.</p>
		<div style="height:3px;">&nbsp;</div>

		<? foreach($arResult['COMPLECT'] as $com):?>
		<div class="z">
			<div class="tech">
				<strong><?=$com['NAME']?></strong>
			</div>
		</div>
		<div class="t" style="text-align: justify;">
			<table border="0" height="25" width="750px">
				<tbody>
				<tr id="bx_565502798_1889">
					<td style="text-align: left;">
						<p><strong><?=$com['NAME']?></strong></p>
					</td>
				</tr>

				<tr>
					<td style="text-align: left;">
						<? foreach($com['ITEM'] as $name => $value):?>
						<p><strong><?=$name?></strong></p>
						<ul>
							<?
							foreach($value as $com_val):?>
							<li><?=$com_val;?></li>
							<?endforeach;?>
						</ul>
						<? endforeach;?>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<br />
		<div style="height:5px;">&nbsp;</div>
		<div style="height:3px;">&nbsp;</div>
		<? endforeach; ?>

	</div>

	<div id="test"></div>
	<div class="white_bg">
		<div class="models-video">
			<? foreach($arResult['PROPERTIES']['test_video']['VALUE'] as $test_video): ?>
			<iframe style="display: block" width="100%" height="600" src="https://www.youtube.com/embed/<?=$test_video;?>" frameborder="0" allowfullscreen></iframe>
			<? endforeach; ?>
		</div>
		<div id="gallery_"></div>
	</div>




	<div class="gellery">
		<div id="gellery">
			<? foreach($arResult['PROPERTIES']['PHOTOGALL']['VALUE'] as $img): ?>
			<div class="item">
				<img class="" src="<?=CFile::ResizeImageGet($img, array('width'=>1920, 'height'=>560), BX_RESIZE_IMAGE_EXACT, true)['src'];?>" alt="<?=$arResult['NAME'];?>" />
			</div>
			<? endforeach; ?>

			<a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
			<a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
		</div>
		<ul class="slidesjs-pagination-img">
			<? foreach($arResult['PROPERTIES']['PHOTOGALL']['VALUE'] as $img): ?>
			<li class="slidesjs-pagination-item">
				<a href="#">
					<img class="" src="<?=CFile::ResizeImageGet($img, array('width'=>180, 'height'=>80), BX_RESIZE_IMAGE_EXACT, true)['src'];?>" alt="<?=$arResult['NAME'];?>" />
				</a>
			</li>
			<? endforeach; ?>
		</ul>
	</div>



	<div class="standard-hero hero">

		<div class="hero-background" data-scale-method="crop" data-alignment="0.5,1" data-video="">
			<img alt="" src="<?=CFile::GetPath($arResult['PROPERTIES']['configurator']['VALUE']);?>" sizes="100vw"/>
		</div>

		<div class="hero-content adaptived">
			<div class="hero-content-align">
				<div class="hero-content-box">
					<h1><?=$arResult['PROPERTIES']['configurator']['DESCRIPTION']?></h1>
					<ul class="hero-ctas">
						<li>
							<a class="button button-small button-light button-semi-opaque" href="/configurator/?model=<?=$arResult['CODE']?>" target="_blank">Создать</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div id="all-new-xc90-landing-story-carousel" class="story-carousel theme-dark component">
		<div class="shared-content-container">
			<div class="shared-content">
				<?=$arResult['PROPERTIES']['dop_block']['~VALUE']['TEXT'];?>
			</div>
		</div>
		<div class="story-buttons-container">
			<ul class="story-buttons story-nav">
				<? foreach($arResult['PROPERTIES']['TABS_SLIDER']['VALUE'] as $key => $slider):?>
				<li>
					<a class="button button-opaque button-light button-small <?if($key < 1):?>button-active<?endif;?>" href="#<?=$arResult['PROPERTIES']['TABS_SLIDER']['CODE'].$key?>">
						<?=$slider['title']?>
					</a>
				</li>
				<?endforeach;?>
			</ul>
		</div>
		<ul class="carousel hero">
			<? foreach($arResult['PROPERTIES']['TABS_SLIDER']['VALUE'] as $key => $slider):?>
			<li id="<?=$arResult['PROPERTIES']['TABS_SLIDER']['CODE'].$key?>" class="carousel-item <?if($key < 1):?>carousel-item-active<?endif;?>">
				<div class="hero">
					<div class="hero-background" data-scale-method="crop" data-alignment="0.5,0.5">
						<img src="<?=$slider['path'];?>" alt="<?=$arResult['NAME']?>" sizes="100vw">
					</div>
				</div>
				<div class="story-content-container">
					<div class="story-content">
						<p><?=$slider['desc'];?></p>
					</div>
				</div>
			</li>
			<?endforeach;?>
		</ul>
		<ul class="story-dots story-nav">
			<? foreach($arResult['PROPERTIES']['TABS_SLIDER']['VALUE'] as $key => $slider):?>
			<li><a class="button button-dot <?if($key < 1):?>button-active<?endif;?>" href="#<?=$arResult['PROPERTIES']['TABS_SLIDER']['CODE'].$key?>"></a></li>
			<?endforeach;?>
		</ul>
	</div>


	<div class="standard-hero hero">

		<div class="hero-background" data-scale-method="crop" data-alignment="0.5,1" data-video="">

			<img alt="" src="<?=CFile::GetPath($arResult['PROPERTIES']['WRITE_TEST_DRIVE']['VALUE']);?>" sizes="100vw"/>
		</div>

		<div class="hero-content adaptived">
			<div class="hero-content-align">
				<div class="hero-content-box">
					<h1><?=$arResult['PROPERTIES']['WRITE_TEST_DRIVE']['DESCRIPTION'];?></h1>
					<ul class="hero-ctas">
						<li>
							<a class="button button-small button-light button-semi-opaque" href="#model-forms">Записаться на тест-драйв</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<div class="model-seo-text">

		<? foreach($arResult['PAZZLE'] as $pazz):?>
		<div class="model-seo-text-item">
			<div class="model-seo-text-item-text">
				<div class="model-seo-text-item-text-wrapper">
					<h2><?=$pazz['NAME']?></h2>
					<p><?=$pazz['PREVIEW_TEXT']?></p>
				</div>
			</div>
			<div class="model-seo-text-item-image delme" style="display: block; background-image: url('<?=CFile::GetPath($pazz['PREVIEW_PICTURE']);?>');"></div>
		</div>
		<? endforeach; ?>


	</div>

	<div class="clear"></div>

	<div class="items-list-wrapper theme-dark component" id="model-forms">
		<div class="extf-body step_h">
			<h2 class="adapted">Ваш следующий шаг</h2>
		</div>
		<div class="items-list" id="">
			<div class="subnav-buttons tab_step adaptived">
				<div class="step_icon">
					<div class="step_car delme" style="display: block; background-image: url('http://motorlandgroup.ru/img/car.png');">

					</div>
				</div>
				<a class="button button-small button-light button-semi-opaque w-link three-forms-exclude" href="#three-forms-on-model">Тест-драйв</a>
			</div>
			<div class="subnav-buttons tab_step adaptived">
				<div class="step_icon">
					<div class="step_phone delme" style="display: block; background-image: url('http://motorlandgroup.ru/img/phone.png');" >

					</div>
				</div>
				<a class="button button-small button-light button-semi-opaque w-link three-forms-exclude" href="#three-forms-on-model">Заказать звонок</a>
			</div>
			<div class="subnav-buttons tab_step adaptived">
				<div class="step_icon">
					<div class="step_usd delme" style="display: block; background-image: url('http://motorlandgroup.ru/img/usd.png');">

					</div>
				</div>
				<a class="button button-small button-light button-semi-opaque w-link three-forms-exclude" href="#three-forms-on-model">Получить скидку на <?=$arResult['NAME']?></a>
			</div>
			<div class="clearfix"></div>

			<a id="three-forms-on-model"></a>

			<div class="tab_form" id="test_msg">


				<div class="popup_form">
					<form id="form" data-txt="" name="test-drive" style="text-align:left">
						<div class="inputcontainer">
							<input type="text" placeholder="Как Вас зовут?" id="fio" name="fio_t">
						</div>
						<div class="inputcontainer">
							<input type="text" placeholder="Укажите свой номер" class="p_phone" id="telephone_4" name="telephone_t">
						</div>
						<select  name="model" style="display:none">
							<option value="XC90">XC90</option>
						</select>
						<span onclick="add_test_in(); return false;" class="stage_text">Запись на тест-драйв</span>

					</form>
				</div>




				<div class="slides_container selected">
					<img style="padding-bottom:0px" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" />
				</div>

			</div>
			<div class="tab_form"  id="phone_msg">

				<div class="popup_form">
					<form id="form" data-txt="" name="test-drive" style="text-align:left">
						<div class="inputcontainer">
							<input type="text" placeholder="Как Вас зовут?" id="fio_p" name="fio_p">
						</div>
						<div class="inputcontainer">
							<input type="text" placeholder="Укажите свой номер" class="p_phone" id="telephone_2" name="telephone_p">
						</div>

						<span onclick="add_phone(); return false;" class="stage_text">Заказать обратный звонок</span>

					</form>
				</div>




				<div class="slides_container selected">
					<img style="padding-bottom:0px" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" />
				</div>
			</div>
			<div class="tab_form" id="discount_msg">

				<div class="popup_form">
					<form id="form" data-txt="" name="test-drive" style="text-align:left">
						<div class="inputcontainer">
							<input type="text" placeholder="Как Вас зовут?" id="fio_d" name="fio_d">
						</div>
						<div class="inputcontainer">
							<input type="text" placeholder="Укажите свой номер" class="p_phone" id="telephone_3" name="telephone_d">
						</div>
						<span onclick="get_discount(); return false;" class="stage_text">Получить скидку на <?=$arResult['NAME']?></span>

					</form>
				</div>

				<div class="slides_container selected">
					<img style="padding-bottom:0px" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" />
				</div>
			</div>
		</div>
	</div>


	<div class="white_bg">
		<div class="main_map">

			<div class="map_block">
				<script charset="utf-8">

					$(function(){
						ymaps.ready(function () {

							var pageWidth = $(window).innerWidth();

							var myMap = new ymaps.Map('map', {
								center: [51.663853, 39.299749],
								zoom: 16
							});

							myPlacemark1 = new ymaps.Placemark([51.66306, 39.299901], {
							});
							myMap.geoObjects.add(myPlacemark1);
							myMap.behaviors.disable('scrollZoom');

							if (pageWidth < 500) {

								myMap.behaviors.disable('drag');
								var isDragDisabled = true;

								var move = new ymaps.control.Button({
									data:{
										content: 'Move Map',
									}
								});

								move.events.add("click",function(e){

									if (isDragDisabled){
										myMap.behaviors.enable('drag');
										isDragDisabled = false;
									} else {
										myMap.behaviors.disable('drag');
										isDragDisabled = true;
									}
									console.dir(isDragDisabled);
								});

								myMap.controls.add(move)
							}
						});
					});
				</script>
				<div class="map" id="map"></div>
			</div>
		</div>
	</div>
</div>


<div class="salon-photo">
	<div class="contacts">
		<p>Воронеж, ул. Изыскателей, 23</p>
		<p>
			Телефон: <a href="tel:+74732330323">+7 (473) 23-303-23</a><br>
			Факс: +7 (473) 23-303-23
		</p>

		<p>Дни и часы работы:</p>
		<p>
			Пн-Вс с 9:00 до 20:00<br>
		</p>    </div>

	<div class="photo">
		<img src="/bitrix/templates/offers/img/foto_salona.jpg" class="" />
	</div>
</div>





