<!-- Wassyef Map -->
<div id="map" style="height:400px;">
	<div class="map--dummy">
		<?php
				$map_lat = get_field('map_lat');
				$map_long = get_field('map_long');
		?>
	</div>
</div>


<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script type="text/javascript">

var geoCoords = '[' + <?php echo $map_lat;?> + ', ' + <?php echo $map_long;?> + ']';
var map = L.map('map', {
    center: JSON.parse(geoCoords),
    zoom: 14
});
var marker = L.marker(JSON.parse(geoCoords)).addTo(map);
marker.bindPopup("<b>WASSYEF LANDING</b>").openPopup();
map.scrollWheelZoom.disable();

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYW1pdC1tYWhhcnhhbiIsImEiOiJjanJ1cGZxZ3UwNnhsNGFsNTAzcWtsanpsIn0.tnq36qhYA87WJb2nR7_KIw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1Ijoid2Fzc3llZiIsImEiOiJjanVpN2RxdG0wYnAzM3puYmxlbXVpNGNmIn0.HrF0cl3p_T9WFwk7eGbzeQ'
}).addTo(map);

</script>
