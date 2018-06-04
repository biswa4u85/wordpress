<?php
/**
 * The Right Sidebar displayed on page templates.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <div class="span4 fr">
            <div class="sidebar-nav">       
 <?php if (ot_get_option('sidebar') == 'GOOGLE MAP') { ?>

 <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map_canvas'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = '<?php echo ot_get_option('map_address'); ?>';
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCzI37H8wL_GroGjRUL3g63EZpCySxAkY&callback=initMap"> </script>

    <div id="map_canvas"></div>
<?php }
elseif (ot_get_option('sidebar') == 'SIDEBAR1') { 
dynamic_sidebar( 'Sidebar1' );
}?>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
            <g:page href="https://plus.google.com/<?php echo ot_get_option('google_profile_id'); ?>"></g:page>
            <g:person href="https://plus.google.com/<?php echo ot_get_option('google_profile_id'); ?>" data-rel="author"></g:person>

</div>
<!--/.well .sidebar-nav -->
</div><!-- /.span4 -->
    

