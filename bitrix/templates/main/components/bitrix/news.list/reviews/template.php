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


<link rel="stylesheet" href="/js/lightslider-master/css/lightslider.css" />
<link rel="stylesheet" href="/js/lightslider-master/css/lightgallery.min.css" />
<link rel="stylesheet" href="/js/raty-master/lib/jquery.raty.css" />
<script src="/js/lightslider-master/js/lightslider.js"></script>
<script src="/js/lightslider-master/js/lightgallery-all.min.js"></script>
<script src="/js/raty-master/lib/jquery.raty.js"></script>

<div class="img-one">
	<img class="delme" src="<?=CFile::GetPath($arResult['PICTURE']);?>">
	<div class="banner-text">
		<?=$arResult['DESCRIPTION']?>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.img-one').css('height', $('.img-one img').height());
	});
</script>
<div class="clear"></div>



<div class="container">

	<h1><?=$arResult['NAME']?></h1>


	<div class="model-reviews-text">

		<? foreach($arResult['ITEMS'] as $item): ?>
		<div class="model-reviews-text-item">
			<div class="model-reviews-text-item-text">
				<div class="model-reviews-text-item-text-wrapper">
					<div class="stars">
						<div id="fixed<?=$item['ID']?>"></div>
						<script>
							$('#fixed<?=$item['ID']?>').raty({
								readOnly:  true,
								start:  <?=$item['PROPERTIES']['STARS']['VALUE']?>,
								number: 5,
								path:'/js/raty-master/lib/images/'
							});
						</script>
					</div>
					<div class="date"><?=$item['ACTIVE_FROM'];?></div>
					<h2><?=$item['NAME']?></h2>
					<p><?=$item['PREVIEW_TEXT']?></p>
				</div>
			</div>
			<div class="model-reviews-text-item-image delme">
				<div class="gallery-block">
					<ul id="imageGallery" class="gallery list-unstyled">
						<? if($item['PROPERTIES']['VIDEO']['VALUE']): ?>
							<? foreach($item['PROPERTIES']['VIDEO']['VALUE'] as $code_vodeo):?>
								<li data-thumb="//img.youtube.com/vi/<?=$code_vodeo?>/maxresdefault.jpg" data-src="//www.youtube.com/embed/<?=$code_vodeo?>?autoplay=0">
									<img src="//img.youtube.com/vi/<?=$code_vodeo?>/maxresdefault.jpg" style="max-width: 544px"/>
								</li>
							<? endforeach; ?>
						<? endif; ?>

						<? if($item['PROPERTIES']['GALLERY']['VALUE']): ?>
							<? foreach($item['PROPERTIES']['GALLERY']['VALUE'] as $img):?>
								<li data-thumb="<?=CFile::GetPath($img);?>" data-src="<?=CFile::GetPath($img);?>">
									<img src="<?=CFile::GetPath($img);?>" style="max-width: 544px"/>
								</li>
							<? endforeach;?>
						<? endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<? endforeach; ?>




	</div>

	<div class="clear"></div>

</div>






<script type="text/javascript">


	$(document).ready(function() {



		$('.gallery').lightSlider({
			gallery:true,
			item:1,
			loop:true,
			thumbItem:4,
			slideMargin:0,
			enableDrag: false,
			currentPagerPosition:'left',
			onSliderLoad: function(el) {
				el.lightGallery({
					selector: '#imageGallery .lslide'
				});
			}
		});

	});
</script>


