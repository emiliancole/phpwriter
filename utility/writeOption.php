<?php
echo "1. Write the file <b>aaa.txt</b> with the list of words or phrases for each line.<br>"; 
echo "2. Call this writeOption.php to write on screen the list of words in option tags.<hr>"; 

$filename = "aaa.txt";
$array = file($filename);
echo "<select>";

foreach ($array as &$value) {
echo "<option value='$value' >$value</option><br />";
}

echo "</select>";
?>