<?
$APPLICATION->SetAdditionalCSS("/css/responsive-tabs.css");
$APPLICATION->AddHeadScript('/js/jquery.responsiveTabs.min.js');
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.additional-methods.js"></script>',true);
$APPLICATION->AddHeadString('<script type="text/javascript" src="/js/jquery.validate.my-default-messages.js"></script>',true);
?>

<div style="background-color: #222;">
    <div class="w-container">
        <div id="form-tabs-on-contacts" class="w-form-tabs">
            <ul>
                <li>
                    <a href="#forms-tab-1">
                        <div class="iconka iconka-question">
                            <div></div>
                        </div>

                        <div class="gray-button">
                            Задать Вопрос
                        </div>
                    </a></li>
                <li>
                    <a href="#forms-tab-2">
                        <div class="iconka iconka-repair">
                            <div></div>
                        </div>
                        <div class="gray-button">
                            Записаться на ТО
                        </div>
                    </a>
                </li>
            </ul>

            <div id="forms-tab-1">
                <h2 class="super-h2 white">Задайте Вопрос</h2>

                <form id="ask-the-question" action="" class="w-verifable-form">
                    <div class="input-error-wrapper">
                        <input type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="phone" placeholder="Телефон">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="mail" placeholder="Почта">
                    </div>
                    <div class="input-error-wrapper">
                        <textarea name="question" id=""  rows="5" placeholder="Вопрос"></textarea>
                    </div>
                    <input class="blue2-button" type="submit" value="Отправить">

                </form>
            </div>
            <div id="forms-tab-2">
                <h2 class="super-h2 white">Запишитесь на ТО</h2>

                <form action="" class="w-verifable-form" id="enroll-the-service">
                    <div class="input-error-wrapper">
                        <input type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="phone" placeholder="Телефон">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="mail" placeholder="Почта">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="where" placeholder="когда удобно">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="model" placeholder="Модель Авто">
                    </div>
                    <div class="input-error-wrapper">
                        <input type="text" name="year" placeholder="Год Выпуска">
                    </div>
                    <input class="blue2-button" type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</div>