<?php
echo "1. Write the file aaa.txt with the list of words or phrases for each line.<br>";
echo "2. Call this writeOptionToFile.php to write on file aaaout.txt the list of words in option tags.<hr>";
$filein = "aaa.txt";
$fileout = "aaaout.txt";
$array = file($filein, FILE_IGNORE_NEW_LINES);

file_put_contents($fileout, "<select>\n");

foreach ($array as &$value) {
file_put_contents($fileout, "<option value='$value'>$value</option>\n", FILE_APPEND);
}

file_put_contents($fileout, "</select>\n", FILE_APPEND);
?>