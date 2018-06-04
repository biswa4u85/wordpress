$(document).ready(function () {

    // Activate isotope in container

    $(".project-items").isotope({
        itemSelector: '.project-item',
        layoutMode: 'fitRows',
    });

    // Add isotope click function

    $('.project-filter li').click(function () {
        $(".project-filter li").removeClass("active");
        $(this).addClass("active");

        var selector = $(this).attr('data-filter');
        $(".project-items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });

    $("area[rel^='prettyPhoto']").prettyPhoto();

    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 3000, autoplay_slideshow: true});
    $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});

    $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function () {
            initialize();
        }
    });

    $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function () {
            _bsap.exec();
        }
    });

    $("#owl-cx").owlCarousel({
        items: 4
    });

    $("#owl-testimonial").owlCarousel({
        items: 3,
        autoPlay: true,
        navigation: true,
        navigationText: ["Next", "Prev"],
        pagination : false,
    });

});


// MAP
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(51.503454,-0.119562),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  
  
  
  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  
  var markers = [
        ['London Eye, London', 51.503454,-0.119562],
        ['Palace of Westminster, London', 51.499633,-0.124755]
  ];
  
  
  // markers & place each one on the map  
  for( i = 0; i < markers.length; i++ ) {
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(position);
    marker = new google.maps.Marker({
      position: position,
      map: map,
      title: markers[i][0]
    });
    
    
    
    // Automatically center the map fitting all markers on the screen
    map.fitBounds(bounds);
  }
  
}

google.maps.event.addDomListener(window, 'load', initialize);