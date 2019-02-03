<?php
//https://lorenzod8n.wordpress.com/2007/05/19/plotting-trigonometrical-functions-in-php/

header("Content-type: image/png");

function draw_axes($image, $width, $height, $color) {
    $xaxis = $height / 2;
    $yaxis = $width / 2;

    imageline($image, $yaxis, 0, $yaxis, $height-1, $color);
    imageline($image, 0, $xaxis, $width-1, $xaxis, $color);
}

function plot_sin($image, $height, $color) {
    for ($x = 0; $x < 360; ++$x) {
        $amplitude = $height/2 - 10;
        $y = $height/2 + $amplitude * sin(deg2rad($x-180));
        imagesetpixel($image, $x, $y, $color);
    }
}

function plot_cos($image, $height, $color) {
    for ($x = 0; $x < 360; ++$x) {
        $amplitude = $height/2 - 10;
        $y = $height/2 + $amplitude * cos(deg2rad($x-180));
        imagesetpixel($image, $x, $y, $color);
    }
}

$width = 360;
$height = 200;
$image = imagecreate($width, $height) or die("Failed to create stream");
$bgcolor = imagecolorallocate($image, 255, 255, 255);
$axiscolor = imagecolorallocate($image, 0, 0, 0);
$curvecolor1 = imagecolorallocate($image, 0, 0, 255);
$curvecolor2 = imagecolorallocate($image, 0, 255, 0);

draw_axes($image, $width, $height, $axiscolor);
plot_sin($image, $height, $curvecolor1);
plot_cos($image, $height, $curvecolor2);
imagepng($image);
imagedestroy($image);

?>