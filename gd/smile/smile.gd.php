<?php;
$img = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);
imagearc($img, 100, 100, 200, 200,  0, 360, $white);
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
imagearc($img,  60,  75,  50,  50,  0, 360, $green);
imagearc($img, 140,  75,  50,  50,  0, 360, $blue);
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>
