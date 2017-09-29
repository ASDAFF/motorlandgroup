<? if (!defined ( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.maskedinput.js"></script>',true);
?>

<?if (!empty($arResult["ERROR_MESSAGE"])) {
    $arErrors = array ();
    foreach ($arResult["ERROR_MESSAGE"] as $v) {
        $arErrors[] = $v;
    }

    ?>
    <script type="text/javascript">
        $(function () {
            zzModal.show('<div style="margin:20px"><?=implode('<br />',$arErrors)?></div>', 'error', 3000);
        });
    </script>
<?
}
if (strlen ( $arResult["OK_MESSAGE"] ) > 0) {
    ?>
    <script type="text/javascript">
        $(function () {
            zzModal.show('<div style="margin:20px"><?=$arResult["OK_MESSAGE"]?></div>', 'message', 3000);
            $('#<?=$arParams['ID_POPUP']?> .btn-close').click();
        });
    </script>
<?
}
?>




<form action="<?=POST_FORM_ACTION_URI;?>" class="new-form" method="post" id="form_<?= $arParams['ID_POPUP'] ?>" enctype="multipart/form-data">
    <?=bitrix_sessid_post ()?>
    <input type="hidden" value="<?= $arResult['PARAMS_HASH'] ?>" name="PARAMS_HASH"><?
    if (!empty($_GET))
    {
        foreach ($_GET as $key => $value)
        {
            ?>
                <input type="hidden" value="<?=$value;?>" name="<?=$key;?>">
            <?
        }
    }
    $arText = $arParams['FIELDS_NAME'];
    $arTextVal = $arText;

    foreach ($arParams['FORM_PARAMS'] as $key => $value) {
        if ($value > '') {
            $arTextVal[$key] = $value;
        }
    }
    ?>


            <?
            $css_100 = count($arParams['FIELDS_NAME']);
            $i = 1;
            foreach ($arParams['FIELDS_NAME'] as $key => $value) {
                ?>

        <div class="input-service" <?if($css_100 == $i):?>style="width: 100%"<?endif;?>>
<!--                    <label for="id--><?//= $key ?><!--">--><?//=$arText[$key]?><!-- --><?//if($key!="COMMENT"){?><!--*--><?//}?><!--</label>-->
                    <?
                    if ($arParams['FIELDS_TYPE'][$key] == 'SHTML') {
                        ?>
                        <textarea rows="10" id="id<?= $key ?>" cols="30" class="area" name="<?= $key ?>"><?=$arTextVal[$key]?></textarea>
                    <?
                    } elseif ($arParams['FIELDS_TYPE'][$key] == 'F') {
                        ?>
                        <input type="file" value="" name="<?= $key ?>" class="text">
                    <?
                    } else {
                        ?>
                        <input type="text" id="id<?= $key ?>" placeholder="<?= $arTextVal[$key] ?>" value="" name="<?= $key ?>" class="text">
                    <?
                    }
                    ?>
        </div>

            <?
                $i++;
            }
            ?>
    <div class="clear"></div>


            <?
            if ($arParams["USE_CAPTCHA"] == "Y") {
                ?>
                <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                <div class="row code">
                    <span>Введите текст с картинки</span>

                    <div class="image">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" alt="CAPTCHA">
                    </div>
                    <div class="it-code">
                        <input class="text" type="text" name="captcha_word" maxlength="5" onKeyUp="checkInt(this)" value="" />
                    </div>
                </div>
            <?
            }
            ?>

    <p>Я прочитал <a class="skyblue show-rules" href="javascript:;">правила</a> и даю свое согласие на обработку персональных данных</p>

        <input type="button" value="Отправить" class="blue-button"  onclick="$(this).next().click();return false;">
        <input class="btn-send" type="submit" name="submit" value="Отправить сообщение" style="display: none;">

</form>

<div class="rule_blocks" style="display: none">

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/rule.php"
        )
    );?>

</div>

<script>
    $(function(){
        $("input[name='PHONE']").mask("+7 (999) 999-99-99");
        $('.show-rules').click(function(){
            zzModal.show($('.rule_blocks').html());
        });
    });
</script>
