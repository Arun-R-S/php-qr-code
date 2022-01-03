<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
function gradient($image_width, $image_height,$c1_r, $c1_g, $c1_b, $c2_r, $c2_g, $c2_b, $vertical=false)
{
// first: lets type cast;
$image_width = (integer)$image_width;
$image_height = (integer)$image_height;
$c1_r = (integer)$c1_r;
$c1_g = (integer)$c1_g;
$c1_b = (integer)$c1_b;
$c2_r = (integer)$c2_r;
$c2_g = (integer)$c2_g;
$c2_b = (integer)$c2_b;
$vertical = (bool)$vertical;

// create a image
$image  = imagecreatetruecolor($image_width, $image_height);

// make the gradient
for($i=0; $i<$image_height; $i++)
{
$color_r = floor($i * ($c2_r-$c1_r) / $image_height)+$c1_r;
$color_g = floor($i * ($c2_g-$c1_g) / $image_height)+$c1_g;
$color_b = floor($i * ($c2_b-$c1_b) / $image_height)+$c1_b;

$color = ImageColorAllocate($image, $color_r, $color_g, $color_b);
imageline($image, 0, $i, $image_width, $i, $color);
}

# Prints out all the figures and picture and frees memory
header('Content-type: image/png');

if($vertical){$image = imagerotate($image, 90, 0);}
ImagePNG($image);
imagedestroy($image);
}
gradient(200,200,100,200,100,0,0,0);

?>