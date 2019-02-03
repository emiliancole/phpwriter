<?php 
$lines = file('php.ctype.txt', FILE_IGNORE_NEW_LINES);
echo "<select id='myCtype' onchange='insertAtCaret('inputTextToSave', 
document.getElementById('myCtype').value);return false;'>
<option value=''>CTYPE</option>";
foreach ($lines as $line_num => $line) {
    echo "<option value='$line';>".$line."</option><br />";
};
echo "</select>";
?>
