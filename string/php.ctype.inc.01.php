<html>
<body>
<?php 
$lines = file('php.ctype.txt', FILE_IGNORE_NEW_LINES);
$functions = file('php.ctype.fun.txt', FILE_IGNORE_NEW_LINES);
echo "<select id=\"myArray.1\" onchange=\"insertAtCaret('inputTextToSave', document.getElementById('myArray.1').value);\">\n";
echo "</select>\n";

//echo "<select id=\"myCtype\" onchange=\"insertAtCaret('inputTextToSave', document.getElementById('myCtype').value);\">";
//echo "<option value=''>CTYPE</option>&#013;";
echo "<select id=\"myCtype\" onchange=\"insertAtCaret('inputTextToSave', 
document.getElementById('myCtype').value);\">\n";
echo "<option value=''>CTYPE</option>\n";
foreach ($lines as $line_num => $line) {
    echo "<option value='$functions[$line_num]'>".$line."</option>\n";
};
echo "</select>\n";
?>
</body>
</html>
