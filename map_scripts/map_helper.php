<?php 

/* Get the county ID from the URL..should one exist */
if($_GET['county']) {
	$selectedCounty = $_GET['county'];
	$TESTME = "";
	
	
	
	$serverName = "HackVT.db.11612382.hostedresource.com"; //serverName\instanceName
	$connectionInfo = array( "Database"=>"HackVT", "UID"=>"hackvt", "PWD"=>"Hacked!7");
	$dbhandle = sqlsrv_connect( $serverName, $connectionInfo);

	if( $dbhandle ) {
		"Connection established.<br />";
	}else{
		echo "Connection could not be established.<br />";
		die( print_r( sqlsrv_errors(), true));
	}
	$avgScore = "" ; 
	$yearPeriod = $_GET['year'];
	/*SQL STATEMENTS FOR yearPeriod and avgScore */
	$sql1 = "SELECT AVG(Suppressed_Value) FROM NECAP_FULL WHERE County = '$selectedCounty' AND Test_Year = '$yearPeriod' AND Test_Name = '$testName' ";
	$result1 = sqlsrv_query($dbhandle, $sql1, null);
	if($result1 == false)
		die(print_r(sqlsrv_errors(), true));

	while( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC) ) {
		$avgScore = $row['Score'];
	}
	
	/* Setup our SQL Statement */
	$sql = "SELECT OrgName, Test_Year, Suppressed_Value ";
	$sql .= "FROM NECAP_FULL ";
	$sql .= "WHERE County = '$selectedCounty' AND Test_Year = '$yearPeriod' AND Test_Name = '$testName' ";
	
	//execute the SQL query and return records
	$result = sqlsrv_query($dbhandle, $sql, null);

	if($result == false)
		die(print_r(sqlsrv_errors(), true));

	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
		$TESTME .= $row['OrgName']." : ".$row['County']."<br />";
	}

	//close the connection
	sqlsrv_close($dbhandle);
	
} 
?>