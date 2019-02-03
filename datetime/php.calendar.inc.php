<?php 
$lines = file('datetime/php.calendar.txt', FILE_IGNORE_NEW_LINES);
$functions = file('datetime/php.calendar.fun.txt', FILE_IGNORE_NEW_LINES);
echo "\n";
echo "<select id=\"myCalendar\" onchange=\"insertAtCaret('inputTextToSave', document.getElementById('myCalendar').value);\">\n";
echo "<option value=\"\">CALENDAR</option>\n";
foreach ($lines as $line_num => $line) {
    echo "<option value=\"$functions[$line_num]\n\">".$line."</option>\n";
};
echo "</select>\n\n";
?>
