<? if (!defined ( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}
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
    // @TODO
    /* ?><input type="hidden" value="<?=$APPLICATION->GetCurPage();?>" name="backurl"><? */
    if (!empty($_GET))
    {
        foreach ($_GET as $key => $value)
        {
            ?><input type="hidden" value="<?=$value;?>" name="<?=$key;?>"><?
        }
    }
    $arText = $arParams['FIELDS_NAME'];
    foreach ($arText as $key => $val) {
        /*if (in_array ( $key,
                       $arParams["REQUIRED_FIELDS"] )
        ) {
            $arText[$key] = $arText[$key].'*';
        }*/
    }
    $arTextVal = $arText;

    foreach ($arParams['FORM_PARAMS'] as $key => $value) {
        if ($value > '') {
            $arTextVal[$key] = $value;
        }
    }

    ?>
    <fieldset>
        <div class="hold">
            <?
            foreach ($arParams['FIELDS_NAME'] as $key => $value) {
                ?>
                <div class="row">
                    <label for="id<?= $key ?>"><?=$arText[$key]?> <?if($key!="COMMENT"){?>*<?}?></label>
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
                        <input type="text" id="id<?= $key ?>" value="<?= $arTextVal[$key] ?>" name="<?= $key ?>" class="text">
                    <?
                    }
                    ?>
                </div>
            <?
            }
            ?>
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
        </div>
<!--        <input type="image" class="btn-send" src="/img/btn-send.gif" alt="отправить" onclick="$(this).next().click();return false;">-->
<!--        <input type="image" class="btn-send"  onclick="$(this).next().click();return false;">-->
        <input type="button" value="Отправить" class="btn-send"  onclick="$(this).next().click();return false;">
        <input class="btn-send" type="submit" name="submit" value="Отправить сообщение" style="display: none;">
    </fieldset>
</form>