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

$arItem = array_chunk($arResult["ITEMS"], 4);
$int = count($arItem);
?>

<? for($i = 0; $i < $int; $i++): ?>

	<div class="v2nav-inner cars-drop v2nav-left-mid">
		<div class="v2nav-left-midcont">
		<?foreach($arItem[$i] as $Item):?>
			<div class="v2nav-colmid">
				<div class="v2nav-inner car-spec">
					<div class="v2nav-car-title">

						<a href="<?=$Item["DETAIL_PAGE_URL"]?>" data-parent="Автомобили">
							<?=$Item['NAME']?>
						</a>

					</div>

					<div class="v2nav-car-image">
						<a href="<?=$Item["DETAIL_PAGE_URL"]?>" data-parent="Автомобили">
							<img alt="Car Image" src="<?=CFile::GetPath($Item['PROPERTIES']['FOTO_1']['VALUE']);?>"/>
						</a>

					</div>

					<div class="v2nav-fullwidth">
						<div class="v2nav-inner">
							<div class="car-price">
								<span><?=$Item['PROPERTIES']['price_r']['VALUE']?></span>
							</div>

							<div class="build-explore" style="display:none">
								<div class="build-explore-title"><a data-parent="Автомобили" href="/configurator/?model=<?=$Item['CODE']?>">Конфигуратор</a></div>
								<div class="build-explore-title"><a data-parent="Автомобили" href="<?=$Item["DETAIL_PAGE_URL"]?>">Подробнее</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?endforeach;?>
		</div>
	</div>

<? endfor; ?>





