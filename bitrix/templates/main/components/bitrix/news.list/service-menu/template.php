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

<div class="service-menu">

	<ul>

		<?foreach($arResult["ITEMS"] as $arItem):?>

		<li class="ser-menu">

			<a href="javascript:void(0);"><?=$arItem['NAME']?></a>


			<?if($arItem['PROPERTIES']['TYPE_MENU']['VALUE'] == 'offer'):?>
			<div class="service-menu-sub offer">

				<div class="service-one-articles">

					<? foreach($arItem['DISPLAY_PROPERTIES_E'] as $code):?>
						<? foreach($arItem[$code] as $key => $offer):?>
						<ul>
							<li><img src="<?=CFile::ResizeImageGet($offer['PREVIEW_PICTURE'], array('width'=>310, 'height'=>210), BX_RESIZE_IMAGE_EXACT, true)['src']?>"></li>
							<li><p><?=$offer['NAME']?></p></li>
							<li><a href="<?=$offer['DETAIL_PAGE_URL']?>">Узнать подробнее</a></li>
						</ul>
						<?endforeach;?>
					<?endforeach;?>

				</div>

			</div>
			<?elseif($arItem['PROPERTIES']['TYPE_MENU']['VALUE'] == 'category'):?>
			<div class="service-menu-sub">
				<div class="service-one-articles category">
					<ul>
					<? foreach($arItem['DISPLAY_PROPERTIES_E'] as $code):?>
						<? foreach($arItem[$code] as $key => $offer):?>
							<li><a href="<?=$offer['DETAIL_PAGE_URL']?>"><?=$offer['NAME']?></a></li>
						<?endforeach;?>
					<?endforeach;?>
					</ul>
					<ul>
						<? foreach($arItem['DISPLAY_PROPERTIES_E'] as $code):?>
						<li><img src="<?=CFile::ResizeImageGet($arItem[$code][0]['PREVIEW_PICTURE'], array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src']?>"></li>
						<li><a href="<?=$arItem[$code][0]['LIST_PAGE_URL']?>">Узнать подробнее</a></li>
						<? break; ?>
						<?endforeach;?>
					</ul>
				</div>
			</div>
			<?else:?>
			<div class="service-menu-sub">
				<div class="service-one-articles detail">
					<ul>
						<li><img src="<?=CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>310, 'height'=>210), BX_RESIZE_IMAGE_EXACT, true)['src']?>"></li>
					</ul>
					<ul>
						<li><h1><?=$arItem['NAME']?></h1></li>
						<li><p><?=$arItem['DETAIL_TEXT']?></p></li>
						<li><a class="" href="<?=$arItem['CODE']?>">Узнать подробнее</a></li>
					</ul>
				</div>
			</div>
			<?endif;?>

		</li>
		<?endforeach;?>

	</ul>

	<div class="clear"></div>
</div>







<script>
	$(function(){
		$('.service-menu > ul > li.ser-menu').hover(
			function(e){

				if($(this).find('.service-menu-sub').hasClass('offer')) {
					$(this).find('.service-menu-sub').css({'left':'0%','width':'100%'});
					$(this).find('.service-menu-sub ul').css({'width':'16.6%'});
				}else{
					var offset = $(this).offset();
					var left = (100 * (offset.left) / $('body').width());
					if (left > 50) {
						left = 50;
					}
					$(this).find('.service-menu-sub').css('left', left + '%');
				}
				$(this).addClass('active');
			},
			function(){
				$(this).removeClass('active');
			}
		);
	});
</script>



