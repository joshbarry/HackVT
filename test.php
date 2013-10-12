<?php

$myServer = "HackVT.db.11612382.hostedresource.com"
$myUser = "havkvt"
$myPass = "hacked!7"
$myDB = "HackVT"




//connection to the database
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer"); 

  
//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
  or die("Couldn't open database $myDB"); 

//declare the SQL statement that will query the database
$query = "SELECT DISTINCT OrgName FROM dbo.Necap_Data ";


//execute the SQL query and return records
$result = mssql_query($query);

$numRows = mssql_num_rows($result); 
echo $result; 


//close the connection
mssql_close($dbhandle);

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
<?php echo "hello world" ?>

</body>
</html>