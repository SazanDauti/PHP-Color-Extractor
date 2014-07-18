PHP-Color-Extractor
===================

Extract colors from any image using PHP.

## Usage

PHP Color Extractor has many great features. You can specify the minimum difference between colors, which means it won't look for similar colors, and you can specify whether you want the output to be RGB or HEX.

```php
require('colorextractor.class.php');

$img = "http://img2.wikia.nocookie.net/__cb20100925024556/logopedia/images/7/75/Seattle_Mariners.png";

$ce = new ColorExtractor;

/*
Call the function getColors, this function gets the main colors from the image
getColors(Link to Image, Number of colors to return, minumum difference between each color, Type of return "rgb" or "hex");
*/

$colorArray = $ce->getColors($img, 5, 11, "rgb");

foreach ($colorArray as $color) {
  echo $color."<br />";
}
