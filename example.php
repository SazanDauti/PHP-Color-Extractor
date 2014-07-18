<?php

//Require the ColorExtractor Class
require("colorextractor.class.php");

$img = "http://img2.wikia.nocookie.net/__cb20100925024556/logopedia/images/7/75/Seattle_Mariners.png";

$ce = new ColorExtractor;

/*
Call the function getColors, this function gets the main colors from the image
getColors(Link to Image, Number of colors to return, minumum difference between each color, Type of return "rgb" or "hex");
*/
$colorArray = $ce->getColors($img, 5, 11, "rgb");

?>

<img src="<?php echo $img; ?>" height="200px">

<br /><br />

<table width="200px" border="1">

<?php
foreach ($colorArray as $color) {
    echo '<tr>';
    if (substr($color, 0, 1) == "#") {
        echo '<td width="50%" align="center">' . $color . '</td><td width="50%" align="center"><div style="background-color:' . $color . '; width:50px; height:50px;"></div></td>';
    } else {
        echo '<td width="50%" align="center">' . $color . '</td><td width="50%" align="center"><div style="background-color:rgb(' . $color . '); width:50px; height:50px;"></div></td>';
    }
    echo '</tr>';
}
?>

</table>

