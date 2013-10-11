<?php
// ---------------------------------------------------------
// GoogleMap API Implementation
// Inserts our interactive GoogleMap into our webpage. We will use 
// helper scripts to set up regions and interactive elements. This 
// simply implements the map itself.
//
// Author: Tyler J. Sawyer
// ---------------------------------------------------------
//
// SCRIPT SETTINGS
// 
// 
?>
<!-- HTML Elements for GoogleMap Implementation -->
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeqiMXfEQ_cpawUHH1Dvhmq0JXMa39vq4&amp;sensor=false">
</script>
<script type="text/javascript">
// Geocoder Information
var geocoder
function initialize() {
	// Center map on Burlington, Vermont
	var mapCenter = new google.maps.LatLng(44.473840, -73.215637);
	var myOptions = {
		center: mapCenter,
		zoom: 7,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	// Build Map
	var map = new google.maps.Map(document.getElementById("map_content"), myOptions);
	<?php //any php helper elements go here ?>
}
</script>