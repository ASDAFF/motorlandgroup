<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("service");
$img = CFile::ResizeImageGet(1, array('width'=>310, 'height'=>210), BX_RESIZE_IMAGE_EXACT, true)['src'];
$img2 = CFile::ResizeImageGet(1, array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src'];

?>

    <div class="service">

    <div class="service-menu">

        <ul>

            <li class="ser-menu">
                <a href="">Модельный ряд </a>
                <div class="service-menu-sub offer">

                    <div class="service-one-articles">

                        <ul>
                            <li><img src="<?=$img?>"></li>
                            <li><p>Volvo провели что то где то и когда то</p></li>
                            <li><a href="#">Подробнее...</a></li>
                        </ul>

                    </div>

                </div>
            </li>

            <li class="ser-menu"><a href="">О компании</a></li>

            <li class="ser-menu"><a href="">Сервис</a></li>

            <li class="ser-menu">
                <a href="">Конфигуратор</a>
                <div class="service-menu-sub">

                    <div class="service-one-articles category">
                        <ul>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                            <li><a href="#">Чистка картера вентиляционных газов</a></li>
                        </ul>
                        <ul>
                            <li><img src="<?=CFile::ResizeImageGet(1, array('width'=>520, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true)['src']?>"></li>
                            <li><a href="#">Подробнее...</a></li>

                        </ul>
                    </div>

                </div>
            </li>

            <li class="ser-menu">
                <a href="">Конфигуратор</a>
                <div class="service-menu-sub">
                    <div class="service-one-articles detail">
                        <ul>
                            <li><img src="<?=$img?>"></li>
                        </ul>
                        <ul>
                            <li><h1>Volvo провели что то где то и когда то</h1></li>
                            <li><p>Текст текст Текст текст Текст текст Текст <br>текст Текст текст Текст текст<br> Текст текст Текст текст </p></li>
                            <li><a class="" href="#">Узнать подробнее</a></li>
                        </ul>
                    </div>
                </div>
            </li>

        </ul>

        <div class="clear"></div>
    </div>


    <div class="service-banner">
        <img src="/img/service.jpg">
        <div class="banner-icons">
            <div class="banner-icon">
                <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                <div class="icon-text">
                    <p>text text</p>
                    <p>text text text</p>
                </div>
            </div>

            <div class="banner-icon">
                <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                <div class="icon-text">
                    <p>text text</p>
                    <p>text text text</p>
                </div>
            </div>

            <div class="banner-icon">
                <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                <div class="icon-text">
                    <p>text text</p>
                    <p>text text text</p>
                </div>
            </div>

            <div class="banner-icon">
                <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                <div class="icon-text">
                    <p>text text</p>
                    <p>text text text</p>
                </div>
            </div>


        </div>
        <div class="banner-text">
            <h1>Текст Текст Текст</h1>
            <p>Текст Текст ТекстТекстТекст Текст Текст Текст</p>
            <p>Текст Текст ТекстТекстТекст Текст</p>
            <p>Текст Текст ТекстТекст</p>
            <a href="" class="button">Скачать прайс</a>
        </div>

    </div>


        <div class="container">

            <h1 style="">Сервисный центр</h1>

            <p style="text-align: center;margin-bottom: 25px">Решения Sensus включают в себя самые современные возможности доступа к информации и развлечениям. Встроенная точка доступа обеспечивает вам и вашему XC90 постоянную связь с Интернетом.123</p>


            <div class="row">

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>


            </div>


        </div>


        <div class="service-banner">

            <img src="/img/service.jpg">
            <div class="banner-text-two">
                <h1>Текст Текст Текст</h1>
                <p>Текст Текст ТекстТекстТекст Текст Текст Текст</p>
                <p class="phone">9 (800) 555-55-44</p>
                <p>Текст Текст ТекстТекст</p>
                <a href="" class="button">Позвоните мне</a>
            </div>

        </div>


        <div class="container">


            <div class="margin-50"></div>
            <div class="row">

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box">
                        <img src="<?=$img2;?>">
                        <p class="banner-text-h1">Text Text</p>
                        <p>Text Text Text Text Text Text<br> Text Text Text</p>
                        <a class="button" href="">Узнать подробнее</a>
                    </div>
                </div>


            </div>


        </div>






    <script>
        $(function(){
            $('.service-menu > ul > li.ser-menu').hover(
                function(e){

                    if($(this).find('.service-menu-sub').hasClass('offer')) {
                        $(this).find('.service-menu-sub').css({'left':'0%','width':'100%'});
                        $(this).find('.service-menu-sub ul').css({'width':'16.6%'});
                    }else{
                        var offset = $(this).offset();
                        var left = (100 * (offset.left) / $('body').width());
                        if (left > 50) {
                            left = 50;
                        }
                        $(this).find('.service-menu-sub').css('left', left + '%');
                    }
                    $(this).addClass('active');
                },
                function(){
                    $(this).removeClass('active');
                }
            );
        });
    </script>

    </div>

    <style>
        .container > h1{
            text-align: center;
            margin: 40px;
            font-size: 40px;
            color: #000;
        }

        .margin-50{
            height: 50px;
        }
        .service-box{
            text-align: center;
            margin-bottom: 50px;
        }

        .service-box img{
            margin-bottom: 25px;
        }

        .service-box .banner-text-h1{
            font-size: 20px;
        }

        .service-box a.button{
            width: 100%;
            margin: 0;
        }

        .service-banner{
            height: 660px;
            position: relative;
            overflow: hidden;
        }

        .banner-text{
            position: absolute;
            bottom: 50px;
            right: 50px;
            color: #dadada;
            text-align: right;
        }
        .banner-text-two{
            position: absolute;
            top: 35%;
            right: 20%;
            color: #dadada;
            text-align: right;
        }
        .banner-text-two p{
            margin: 0;
        }
        .banner-text-two .phone{
            font-size: 30px;
            font-weight: 100;
        }
        .banner-text > h1,
        .banner-text-two > h1
        {
            font-family: "Volvo Sans Medium","Volvo Sans Regular","Arial Narrow","Helvetica Neue","Helvetica,Roboto,Arial,Arial,Helvetica,sans-serif"!important;
            font-size: 40px;
            margin-bottom: 15px;
        }
        .banner-text > p{
            margin: 0;
            font-size: 14px;
        }
        .banner-text > a.button,.banner-text-two > a.button{
            color: #fff;
            border-color: #fff;
            margin-top: 20px;
        }



        .banner-icons{
            color: #fff;
            position: absolute;
            top: 40%;
            left: 10%;
            transform: rotate(-25deg);
        }
        .banner-icons .banner-icon{
            display: inline-block;
            width: 80px;
            margin-right: 50px;
            transform: rotate(25deg);
        }
        .banner-icons .banner-icon i{
            margin-bottom: 15px;
        }
        .banner-icons .banner-icon .icon-text p:first-child{
            border-bottom: 1px solid #fff;
            margin: 0;
        }



        .service-menu{
            position: fixed;
            width: 100%;
            top: 70px;
            background-color: rgba(22,22,24,.9);
            z-index: 800;
        }
        .service-menu ul{
            margin: 0;
            padding: 0;
        }
        .service-menu ul li{
            list-style: none;
        }
        .service-menu > ul > li{
            padding: 0px 20px;
            display: inline-block;
            min-width: 100px;
            min-height: 50px;
        }
        .service-menu ul li.active{
            background: #fff;
        }
        .service-menu ul li.active a{
            color: #333;
        }
        .service-menu ul li a{
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            display: block;
            text-align: center;
            margin: 17px auto;
        }

        .service-menu ul li .service-menu-sub{
            display: none;
        }

        .service-menu ul li.active .service-menu-sub{
            position: absolute;
            display: block;
            background: #fff;
            padding: 15px;
            width: 50%;
        }



        .service-one-articles ul{
            width: 50%;
            float: left;
            padding-right: 20px;
        }
        .service-one-articles ul:first-child li a{
            font-size: 18px;
            text-align: left;
        }
        .service-one-articles ul:first-child li a:hover{
            color: #3E6070;
            text-decoration: underline;
        }
        .service-one-articles ul:last-child{
            padding-right: unset;
        }


        .service-menu-sub .service-one-articles.detail ul:last-child li{
            margin-bottom: 10px;
        }
        .service-menu-sub .service-one-articles.detail ul:last-child li:last-child{
            margin-bottom: 0px;
        }


        .service-one-articles.detail ul:first-child{
            width: 37%;
        }
        .service-one-articles.detail ul:last-child{
            width: 63%;
        }

        .service-menu-sub .service-one-articles ul li h1{
            font-size: 23px;
        }

        .service-menu-sub .service-one-articles.detail ul li a,
        .service-menu-sub.offer .service-one-articles ul li a,
        .service-menu-sub .service-one-articles ul:last-child li a
        {
            text-align: center;
            border: 1px solid #062858;
            color: #062858;
            font-size: 18px;
            padding: 15px;
            width: 250px;
        }
        .service-menu-sub .service-one-articles.detail ul li a:hover,
        .service-menu-sub.offer .service-one-articles ul li a:hover,
        .service-menu-sub .service-one-articles ul:last-child li a:hover
        {
            background: #062858;
            color: #fff;
        }

        .service-menu-sub .service-one-articles.category ul:last-child li a{
            margin: auto;
            margin-top: 15px;
        }

        .service-menu-sub .service-one-articles.detail ul li a,
        .service-menu-sub.offer .service-one-articles ul li a
        {
            margin: auto 0;
        }

        .service-menu-sub.offer .service-one-articles ul{
            padding: 0 20px;
            text-align: center;
        }
        .service-menu-sub.offer .service-one-articles ul li{
            margin-bottom: 15px;
        }
        .service-menu-sub.offer .service-one-articles ul li:last-child{
            margin-bottom: 0px;
        }


    </style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>