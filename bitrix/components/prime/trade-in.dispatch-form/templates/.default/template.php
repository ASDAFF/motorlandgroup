<?
$APPLICATION->AddHeadString('<link rel="stylesheet" href="/css/jquery.formstyler.css">',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.formstyler.min.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.additional-methods.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.my-default-messages.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.maskedinput.js"></script>',true);
?>

<div class="w-container">

    <h1 style="margin-bottom: 20px; text-align: center">Сдать Авто в Трейд-Ин</h1>


    <form action="" id="form-for-trade-in-dispatch">
        <div class="input-text-wrapper">
            <input type="text" name="name" id="" placeholder="Имя">
        </div>
        <div class="input-text-wrapper input-text-wrapper-second">
            <input type="text" name="phone" id="" placeholder="Телефон">
        </div>

        <br>

        <div class="input-text-wrapper">
            <input type="text" name="model" id="" placeholder="Марка и Модель">
        </div>

        <div class="input-text-wrapper input-text-wrapper-second">
            <input type="text" name="year" id="" placeholder="Год Выпуска">
        </div>

        <input type="file" name="files[]" id="files-for-trade-in-dispatch" multiple="multiple">

        <div class="rule_block">
            <input type="checkbox" name="rule" id="sel-rule" checked>
            <div class="left rule"><p>Я прочитал <a class="skyblue show-rules" href="javascript:;">правила</a> и даю свое согласие на обработку персональных данных</p></div>
        </div>


        <input class="blue-button" type="submit" value="Отправить">
    </form>
</div>

<div class="rule_block" style="display: none">

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