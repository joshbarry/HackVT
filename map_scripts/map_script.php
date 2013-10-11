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
// NOTE: THIS FILE IS LOCATED IN THE HEADER OF INDEX.PHP!
// 
?>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjUchTbUt39PSQLJo8sLBJRA5ebre9CYU&sensor=false">
</script>
<script type="text/javascript">
	//Used for storing Geocoder information
	var geocoder
    function initialize() {
		//Center map at Burlington, Vermont
		var mapCenter = new google.maps.LatLng(44.473840, -73.215637);
        var myOptions = {
			center: mapCenter,
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		//Build Map
        var map = new google.maps.Map(document.getElementById("map_content"),
            myOptions);
	}
	// Load the map (initializer)
	google.maps.event.addDomListener(window, 'load', initialize);
</script>