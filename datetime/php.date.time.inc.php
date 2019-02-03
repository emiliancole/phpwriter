<?php 
$lines = file('datetime/php.date.time.txt', FILE_IGNORE_NEW_LINES);
$functions = file('datetime/php.date.time.fun.txt', FILE_IGNORE_NEW_LINES);
echo "\n";
echo "<select id=\"myDateTime\" onchange=\"insertAtCaret('inputTextToSave', document.getElementById('myDateTime').value);\">\n";
echo "<option value=\"\">DATE/TIME</option>\n";
foreach ($lines as $line_num => $line) {
    echo "<option value=\"$functions[$line_num]\n\">".$line."</option>\n";
};
echo "</select>\n\n";
?>
