<?
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.additional-methods.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.my-default-messages.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.maskedinput.js"></script>',true);
?>
<style>
    h1 {
        margin-top: 90px;
        text-align: center;
        margin-bottom: 30px;
    }
    nav {
        background-color: #181A1F !important;
    }
</style>
<h1>Запрос Предложения</h1>

<div class="form-wrapper">

    <form class="normal-form" action="/feedback/test-drive-post.php" method="post" id="test-drive-form">

        <div class="form-row">
            <label for="" class="left">
                Выберите заинтересовавшую вас модель Volvo *
            </label>
            <div class="not-a-label cars8">
                <? foreach($arResult as $key => $model): ?>
                <label for="sel-volvo-model-<?=$key+1;?>" class="radio-checkbox-inline form-model-item">
                    <input type="checkbox" name="modelid[]" value="<?=$model['NAME']?>" id="sel-volvo-model-<?=$key+1;?>" class="model-group">
                    <?=$model['NAME']?>
                </label>
                <? endforeach; ?>
                <br>
                <div id="place-one-model-error-here"></div>
            </div>
        </div>

        <div class="form-row">
            <label class="left" for="surname">ФИО *</label>
            <div class="not-a-label">
                <input type="text" name="surname" id="sel-surname">
            </div>
        </div>

        <div class="form-row">
            <label class="left" for="surname">Телефон *</label>
            <div class="not-a-label">
                <input type="text" name="phone" id="sel-phone">
            </div>
        </div>

        <div class="form-row">
            <label class="left rule" for="rule">
                <input type="checkbox" name="rule" id="sel-rule" checked>
            </label>
            <div class="not-a-label">
                Нажимая на эту кнопку, я даю свое согласие на <a href="/upload/compliance.pdf" target="_blank">обработку персональных данных</a> и соглашаюсь с условиями <a href="/upload/politics.pdf" target="_blank">политики конфиденциальности</a>.*
            </div>
        </div>

        <input type="submit" value="Отправить">

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



