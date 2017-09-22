<script src="//api-maps.yandex.ru/2.1-dev/?lang=ru-RU&load=package.full" type="text/javascript"></script>
<script charset="utf-8">

    $(function(){
        ymaps.ready(function () {

            var pageWidth = $(window).innerWidth();

            var myMap = new ymaps.Map('map', {
                center: [51.663853, 39.299749],
                zoom: 16
            });

            myPlacemark1 = new ymaps.Placemark([51.66306, 39.299901], {
            });
            myMap.geoObjects.add(myPlacemark1);
            myMap.behaviors.disable('scrollZoom');

            if (pageWidth < 500) {

                myMap.behaviors.disable('drag');
                var isDragDisabled = true;

                var move = new ymaps.control.Button({
                    data:{
                        content: 'Move Map',
                    }
                });

                move.events.add("click",function(e){

                    if (isDragDisabled){
                        myMap.behaviors.enable('drag');
                        isDragDisabled = false;
                    } else {
                        myMap.behaviors.disable('drag');
                        isDragDisabled = true;
                    }
                    console.dir(isDragDisabled);
                });

                myMap.controls.add(move)
            }
        });
    });
</script>
<div class="map" id="map"></div>