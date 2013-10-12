<?php 
/* Get the county ID from the URL..should one exist */
if($_GET['county']) {
	$selectedCounty = $_GET['county'];
	
	//$sql = "SELECT * ";
	//$sql .= "FROM tblLOL ";
	//$sql .= "WHERE colname = '$selectedCounty'";
} else {
	/* Redirect */
	header ('Location: index.php');
}
?>