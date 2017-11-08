

<footer class="oxp-footer footer">
    <div class="container">


        <ul class="footer-row footer-list footer-list-main">
            <li class="footer-list-item"><a href="/">Главная</a></li>
            <li class="footer-list-item"><a href="/contacts/">Контакты</a></li>
            <li class="footer-list-item footer-list-item-row">
                <div class="footer-socials">
                    <a href="https://vk.com/volvovrn" target="_blank" rel="publisher">
                        <i class="icon icon-vkontakte"></i>
                    </a>
                    <a href="https://www.ok.ru/group/53434904477900" target="_blank" rel="publisher">
                        <i class="fa fa-odnoklassniki-square" style="font-size: 25px;"></i>
                    </a>
                    <a href="https://www.facebook.com/volvovrn/" target="_blank" rel="publisher">
                        <i class="icon icon-facebook"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCmJtpJxq5PaEpCGgSEbJnsg" target="_blank" rel="publisher">
                        <i class="icon icon-youtube"></i>
                    </a>
                    <a href="https://www.instagram.com/volvo_voronezh_motorland/" target="_blank" rel="publisher">
                        <i class="icon icon-instagram"></i>
                    </a>
                </div>
            </li>
            <li class="footer-list-item footer-list-item-row">
                <!--COM-28 - Start*-->
                <div class="footer-language-row">
                    <ul>
                        <li class="footer-list-item footer-language-seperator">
                            <a class="footer-glob" href="/"><i class="icon icon-globe"></i> Russia</a>
                        </li>

                    </ul>
                </div>
                <!--COM-28 - End*-->
            </li>
        </ul>

        <div class="footer-row">
            <small class="footer-copyright">Copyright © 2017 МОТОР ЛЕНД официальный дилер Вольво (Volvo) в Воронеже<br>
				<a href="/upload/politics.pdf" target="_blank" style="color: #fff;">Политика конфиденциальности. </a> 
                <a href="/upload/compliance.pdf" target="_blank" style="color: #fff;">Согласие на обработку персональных данных.</a></small>
        </div>



        <div class="footer-row">
            <a href="/">
                <img class="footer-logo" src="/img/volvo_wordmark_white.png" alt=""  />
            </a>

            <p class="footer-scroll"><a class="button button-small button-light js-scroll-top" href="#">Наверх</a></p>
        </div>
    </div>
</footer>
<div id="mask"></div>
</div>
<!--[if gt IE 8]><!-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.1.min.js"></script>
<!--<![endif]-->
<!--[if gte IE 9]><!-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor.min.js?v=1.8.0.16725"></script>
<!--<![endif]-->
<!--[if lte IE 8]>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.1.min.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor-legacy.min.js?v=1.8.0.16725"></script>
<![endif]-->
<!--[if !IE]><!-->

<!--<![endif]-->

<script>
    var jQ = jQuery;
</script>


<script src="<?=SITE_TEMPLATE_PATH?>/js/js?v=1.8.0.16725"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/js.cookie.min.js"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/spi.js?v=1.8.0.16725"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/app.min.js?v=1.8.0.16725"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/conciergePopup.js?v=1.8.0.16725"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/lxp.js?v=1.8.0.16725"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/storytelling.js?v=1.8.0.16725"></script>


<script>
    $(function(){
        var panel = $('#panel');
        panel.toggleClass('hiddenz');
        $(document).keypress("z",function(e) {
            if(e.ctrlKey && e.keyCode == '26') {
                console.dir(e);
                console.dir('ctrl+z pressed');
                panel.toggleClass('hiddenz');
            }
        });
    });
</script>





<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/scripts.php"
    )
);?>



</body>
</html>
