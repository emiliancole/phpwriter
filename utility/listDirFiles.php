<?php
$dir = "../../php/*";
foreach (glob($dir) as $filename) {
    echo "$filename ---size: " . filesize($filename) . "<br>";
}
?>
