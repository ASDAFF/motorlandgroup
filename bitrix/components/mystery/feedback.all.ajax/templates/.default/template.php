<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
    $arErrors = array();
    foreach($arResult["ERROR_MESSAGE"] as $v)
        $arErrors[] = $v;

    ?>
<script type="text/javascript">
    $(function(){
        getMessage('<?=implode('<br />',$arErrors)?>','error',3000);
    });
</script>
<?
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    ?>
<script type="text/javascript">
    $(function(){
        getMessage('<?=$arResult["OK_MESSAGE"]?>','message',3000);
        $('#<?=$arParams['ID_POPUP']?> .btn-close').click();
    });
</script>
<?
}
?>
<form action="<?=$APPLICATION->GetCurPage()?>" class="cont-form" method="post" id="form_<?=$arParams['ID_POPUP']?>" enctype="multipart/form-data">
    <?=bitrix_sessid_post()?>
	<input type="hidden" value="<?=$arResult['PARAMS_HASH']?>" name="PARAMS_HASH">
    <?
    $arText = $arParams['FIELDS_NAME'];
    foreach ($arText as $key=>$val)
    {
        if(in_array($key, $arParams["REQUIRED_FIELDS"]))
        {
            $arText[$key] = $arText[$key].'*';
        }
    }
    $arTextVal = $arText;

    foreach ($arParams['FORM_PARAMS'] as $key=>$value)
    {
        if ($value>'')
            $arTextVal[$key] = $value;
    }

    ?>
    <fieldset>
        <div class="hold">
<?
        foreach ($arParams['FIELDS_NAME'] as $key=>$value)
        {
?>
            <div class="row">
                <div class="it">
<?
            if ($arParams['FIELDS_TYPE'][$key] == 'SHTML')
            {
?>
                    <textarea rows="10" cols="30" class="area" name="<?=$key?>" alt="<?=$arText[$key]?>"><?=$arTextVal[$key]?></textarea>
<?
            }
            elseif($arParams['FIELDS_TYPE'][$key] == 'F')
            {
?>
                    <input type="file" alt="<?=$arText[$key]?>" value="" name="<?=$key?>" class="text">
<?
            }
            else
            {
?>
                    <input type="text" alt="<?=$arText[$key]?>" value="<?=$arTextVal[$key]?>" name="<?=$key?>" class="text">
<?
            }
?>

                </div>
            </div>
<?
        }
?>
<?
            if($arParams["USE_CAPTCHA"] == "Y")
            {
                ?>
                <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                <div class="row code">
                    <span>Введите текст с картинки</span>
                    <div class="image">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" alt="CAPTCHA">
                    </div>
                    <div class="it-code">
                        <input class="text" type="text" name="captcha_word" maxlength="5" onKeyUp="checkInt(this)" value="" />
                    </div>
                </div>
                <?
            }
?>
        </div>

        <div class="hold">
            <div class="row">
                <input class="btn-send" type="submit" name='submit' value="Отправить сообщение">
            </div>
        </div>
        <span class="fail">* &ndash; поля обязательные к заполнению</span>
    </fieldset>
</form>
<script type="text/javascript">
    $(function()
    {
        check_form_fields('#form_<?=$arParams['ID_POPUP']?>');
    })
</script>