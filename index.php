<?php include("map_scripts/map_helper.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

   <title>HackVT 2013 TITLE HERE</title>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="author" content="Team Karma - HackVT 2013" />
   <meta name="description" content="INSERT DATA HERE" />

   <link rel="stylesheet" href="styleMain.css" type="text/css" media="screen" />
   <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC' rel='stylesheet' type='text/css'>
   
   <?php include("map.php"); ?>

</head>

<body>
<div id="left_bb-border"></div><div id="right_bb-border"></div><div id="top_bb-border"></div><div id="bottom_bb-border"></div>
<div id="wrapper">
<div id="titlebar">
<?php include("header.php"); ?>
</div>
<div id="mainbody_content">
<div id="map_content"></div>
<!-- No include here ... this is done in the header. -->
<div id="navigation_wrap">
<?php include("nav.php"); ?>
</div>
<div id="infobox">
<?php include("info.php"); ?>
</div>
<div id="copyright">
<?php include("copyright.php"); ?>
</div>
</div>
</div>
</body>
</html>