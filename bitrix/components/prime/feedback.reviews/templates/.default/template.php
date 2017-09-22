<?
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.additional-methods.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.my-default-messages.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.maskedinput.js"></script>',true);
?>

<div class="review-form" style="display: block;background-image: url('/img/service.jpg');">
    <div class="container-form">
        <div class="text-form-rev">
            <h2>Помогите нам улучшить наш сервис</h2>
            <p>Наша компания Наша компания Наша компания</p>
            <p>Наша компания Наша компания Наша компания компания</p>

        </div>

        <div class="form-rev">

            <form method="" action="" id="test-reviews-form">
                <input type="text" name="surname" placeholder="Ваше имя" value="">
                <input type="text" name="phone" id="sel-phone" placeholder="Ваш номер телефона" value="">
                <textarea rows="10" name="text" placeholder="Текст сообщения"></textarea>
                <p>Отправляя заявку, Вы соглашаетесь с <a href="javascript:void(0)" class="show-rules">условиями обработки личных данных.</a></p>
                <input type="submit" value="Отправить">
            </form>

        </div>
    </div>

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



