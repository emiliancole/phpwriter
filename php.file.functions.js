function addFile() {
insertAtCaret('inputTextToSave','$lines = file("http://www.example.com/");\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFopen() {
insertAtCaret('inputTextToSave','$handle = fopen("resource.txt", "r");\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFclose() {
insertAtCaret('inputTextToSave','fclose($handle);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFwrite() {
insertAtCaret('inputTextToSave','fwrite($handle, $string [, $length ]);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFread() {
insertAtCaret('inputTextToSave','$contents = fread($handle, filesize($filename));\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addReadFile() {
insertAtCaret('inputTextToSave','readfile($file, [false, $resource]);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFputcsv() {
insertAtCaret('inputTextToSave','fputcsv($handle, $array);\n');
return false;
document.getElementById("inputTextToSave").focus();
}





