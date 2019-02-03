<?php
$home = file_get_contents('php.math.constants.html');
// echo $homepage;
$s = str_replace('n', '&#13;', $home);
echo $s;
?>