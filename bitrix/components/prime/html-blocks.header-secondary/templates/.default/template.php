<?if ($arParams['HALF_STATIC_NAV_LOGO'] == 'Y'):?>
    <script>
        $(function() {
            $('body').addClass('half-static-nav-logo');
        })
    </script>
<?endif;?>
<?if ($arParams['HALF_STATIC_NAV_RIGHT_SIDE'] == 'Y'):?>
    <script>
        $(function() {
            $('body').addClass('half-static-nav-right-side');
        })
    </script>

<?endif;?>

<div class="subnav subnav-prime delme">
    <div class="subnav-header subnav-header-has-subtitle1">
        <h2 class="subnav-title">

            <?if($arParams['MAIN_LINK']['HREF'] != ''):?>
                <a href="<?=$arParams['MAIN_LINK']['HREF']?>">
            <?else:?>
                <p>
            <?endif;?>

                <?if ($arParams['MAIN_LINK']['HAS_BACK_ARROW'] == 'Y'):?>
                    <i class="fa fa-lg fa-chevron-left"></i>
                <?endif;?>
                    <span>
                        <?=$arParams['MAIN_LINK']['TEXT']?>

                    </span>
            <?if($arParams['MAIN_LINK']['HREF'] != ''):?>
                </a>
            <?else:?>
                </p>
            <?endif;?>


        </h2>
    </div>

    <div class="subnav-content">
        <div class="subnav-items">

            <?foreach ($arParams['LINKS'] as $link):?>
            <?
                $additionalClass = '';
                if ($link['IS_ACTIVE'] == 'Y') {
                    $additionalClass .= 'subnav-item-active';
                }
            ?>

            <a class="subnav-item <?=$additionalClass?>" href="<?=$link['HREF']?>">
                <?=$link['TEXT']?>
            </a>
            <?endforeach;?>
        </div>
    </div>
</div>