<script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>

<div id="vkontakte" style="margin: 0 auto; margin-top: 30px"></div>
<script type="text/javascript">

    var drawVK = function () {
        var innerWidth = $(window).innerWidth();
        var innerHeight = $(window).innerHeight();
        var vkWidth;
        var vkHeight;

        vkWidth = (innerWidth > 799) ? 800 : innerWidth;
        vkHeight = (innerWidth > 400) ? 150 : 300;

        VK.Widgets.Group("vkontakte", {mode: 0, width: vkWidth, height: vkHeight, color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 37985200);
    }
    setTimeout(drawVK(), 2000);

    $(window).resize(function () {
        $('#vkontakte').empty();
        drawVK();
    })
</script>

<br>