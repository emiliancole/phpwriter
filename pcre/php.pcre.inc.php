<?php 
$lines = file('pcre/php.pcre.txt', FILE_IGNORE_NEW_LINES);
$functions = file('pcre/php.pcre.fun.txt', FILE_IGNORE_NEW_LINES);
echo "\n";
echo "<select id=\"myPcre\" onchange=\"insertAtCaret('inputTextToSave', document.getElementById('myPcre').value);\">\n";
echo "<option value=\"\">PCRE</option>\n";
foreach ($lines as $line_num => $line) {
    echo "<option value=\"$functions[$line_num]\">".$line."</option>\n";
};
echo "</select>\n\n";
?>
