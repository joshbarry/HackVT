<?php 
// --------------------------------------------------
// Map Module 
// Implements the GoogleMap API which displays our
// school regions and allows users to interact with 
// each region and explore dynamic information.
//
// Author(s): Tyler J. Sawyer, 
//
// --------------------------------------------------

// DIV to help size map. Fix later. ~Tyler 
echo '<div style="height:512px; width:512px;">';

// Map script goes here
include("map_scripts/map_script.php");
// Map Helper goes here
include("map_scripts/map_helper.php");

echo '</div>';
?>