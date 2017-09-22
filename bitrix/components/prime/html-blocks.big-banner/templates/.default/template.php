<div class="z-big-banner" style="display: block; background-image: url(<?=$arParams['BG_IMAGE_URL']?>)">
    <div class="z-big-banner__darker"></div>
    <div class="z-big-banner__all-texts">

        <?if ($arParams['TEXT_PRE_HEADER'] != ''):?>
            <p class="pre"><?=$arParams['TEXT_PRE_HEADER']?></p>
        <?endif;?>

        <h1><?=html_entity_decode($arParams['TEXT_HEADER'])?></h1>

        <?if ($arParams['TEXT_POST_HEADER'] != ''):?>
            <p class="post"><?=html_entity_decode($arParams['TEXT_POST_HEADER'])?></p>
        <?endif;?>

    </div>
</div>