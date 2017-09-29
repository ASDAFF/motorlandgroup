<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <small class="footer-copyright">
                Copyright © 2017&nbsp;МОТОР ЛЕНД официальный дилер Вольво (Volvo) в Воронеже			</small>

            <ul class="footer-list footer-list-sep footer-list-legal">
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

        <a class="prime-incut white colour on-main-normal-template-delme"
           style="
                  margin: 0 auto 40px;
                  transform: translateX(9px);
              "
            ></a>
    </div>
</footer>
<div id="mask"></div>
</div>




<script src="<?=SITE_TEMPLATE_PATH?>/js/app.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.slides.min.js"></script>


<script>
    $(function() {
        $('#slaider').slidesjs({
            height: 400,
            navigation: false
        });
        $('#slaider_spec').slidesjs({
            height: 670,
            navigation: false
        });
        $('#slaider_news').slidesjs({
            height: 285,
            navigation: false
        });
    });

    $(function() {
        doSomethingUseful();
        $(window).resize(doSomethingUseful);
    });
    function doSomethingUseful() {
        var w_w=$(window).width();
        if(w_w>600){
            $(".black_bg").css({'width' : w_w});
        }else{
            $(".black_bg").css({'width' : 600});
        }
    };

</script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.smooth-scroll.js"></script>

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

