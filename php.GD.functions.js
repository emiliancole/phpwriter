

function addHeaderImage() {
insertAtCaret('inputTextToSave','header("Content-Type: image/png");\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addImageCreate() {
insertAtCaret('inputTextToSave','$im = @imagecreate(110, 20)\n or die("Cannot Initialize new GD image stream");\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addImageColorAllocate() {
insertAtCaret('inputTextToSave','$black = imagecolorallocate($im, 0, 0, 0);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addImageString() {
insertAtCaret('inputTextToSave','imagestring($im, 1, 5, 5, $string, $color);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addImagePng() {
insertAtCaret('inputTextToSave','imagepng($im);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addImageDestroy() {
insertAtCaret('inputTextToSave','imagedestroy($im);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

