<!--FOOTER-->
<div class="cn_block" style="width: 100%; max-width: none; padding: 0;">



    <footer class="footer">
        <div class="container" style="margin-top: 0px;">
            <div class="footer-row">
                <small class="footer-copyright">
                    Copyright © 2017&nbsp;МОТОР ЛЕНД официальный дилер Вольво (Volvo) в Воронеже			<br>
					<a href="/upload/politics.pdf" target="_blank" style="color: #fff;">Политика конфиденциальности. </a> 
                <a href="/upload/compliance.pdf" target="_blank" style="color: #fff;">Согласие на обработку персональных данных.</a></small>
                <ul class="footer-list footer-list-sep footer-list-legal" style="padding: 0">
                    <li class="footer-list-item"><a href="/">Главная</a></li>
                    <li class="footer-list-item"><a href="/contacts/">Контакты</a></li>
                </ul>
            </div>

            <div class="footer-row">

                <a style="margin:5px" target="_blank" href="https://www.facebook.com/volvovrn/"><i class="fa fa-facebook-official fa-3x"></i></a>
                <a style="margin:5px" target="_blank" href="https://www.youtube.com/channel/UCmJtpJxq5PaEpCGgSEbJnsg"><i class="fa fa-youtube fa-3x"></i></a>
                <a style="margin:5px" target="_blank" href="https://www.ok.ru/group/53434904477900"><i class="fa fa-odnoklassniki-square fa-3x"></i></a>
                <a style="margin:5px" target="_blank" href="https://vk.com/volvovrn"><i class="fa fa-vk fa-3x"></i></a>
                <a style="margin:5px" target="_blank" href="https://www.instagram.com/volvo_voronezh_motorland/"><i class="fa fa-instagram fa-3x"></i></a>

            </div>


            <div class="footer-row">
                <a href="/">
                    <img class="footer-logo" src="/img/volvo_wordmark_white.png" alt=""  />
                </a>
            </div>

            <a class="prime-incut white colour on-main-normal-template-delme" style="
                  margin: 0 auto 40px;
                  transform: translateX(9px);
              "></a>
        </div>
    </footer>

    <div id="mask"></div>
</div>


<script>
    var func = function(){
        $('.img-one').css('height',$('.img-one img').height());
    }
    window.onresize = func;
    window.onload   = func;
</script>


<!--///SCRIPTS///-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/head.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/app.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.resizeend.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/compressed.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/w-modal.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/function.js"></script>

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
