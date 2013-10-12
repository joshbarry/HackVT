<?php


$serverName = "HackVT.db.11612382.hostedresource.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"HackVT", "UID"=>"hackvt", "PWD"=>"Hacked!7");
$dbhandle = sqlsrv_connect( $serverName, $connectionInfo);

if( $dbhandle ) {
     "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

  

//declare the SQL statement that will query the database
$query = "SELECT DISTINCT OrgName FROM dbo.Necap_Data ";


//execute the SQL query and return records
$result = sqlsrv_query($dbhandle, $query, null);

if($result === false)
    die(print_r(sqlsrv_errors(), true));

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
      echo $row['OrgName']."<br />";
}

//close the connection
sqlsrv_close($dbhandle);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

   <title>HackVT 2013 TITLE HERE</title>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="author" content="Team Karma - HackVT 2013" />
   <meta name="description" content="INSERT DATA HERE" />

   <link rel="stylesheet" href="styleMain.css" type="text/css" media="screen" />
   


</head>

<body>
</body>
</html>