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

        <input class="blue-button" type="submit" value="Отправить">
    </form>
</div>