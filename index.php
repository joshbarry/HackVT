<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

   <title>HackVT 2013 TITLE HERE</title>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="author" content="Team Karma - HackVT 2013" />
   <meta name="description" content="INSERT DATA HERE" />

   <link rel="stylesheet" href="styleMain.css" type="text/css" media="screen" />
   
   <?php include("map.php"); ?>

</head>

<body>
<div id="titlebar">
<?php include("header.php"); ?>
</div>
<div id="mainbody_content">
<div id="map_content" style="height:512px; width:512px;"></div>
<!-- No include here ... this is done in the header. -->
<div id="navigation">
<?php include("nav.php"); ?>
</div>
<div id="infobox">
<?php include("info.php"); ?>
</div>
</div>
<div id="copyright">
<?php include("copyright.php"); ?>
</div>
</body>
</html>