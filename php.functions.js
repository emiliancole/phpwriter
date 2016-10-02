function alertEval() {
var inputText = document.getElementById("inputTextToSave").value;
alert(inputText);
document.getElementById("inputTextToSave").focus();
}

function addPhp() {
insertAtCaret('inputTextToSave','<?php\n\n\n?>');
return false;
document.getElementById("inputTextToSave").focus();
}

function addGET() {
insertAtCaret('inputTextToSave','$name = $_GET[\"name\"]\;\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addPOST() {
insertAtCaret('inputTextToSave','$data = $_POST[\"data\"];\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addIf() {
insertAtCaret('inputTextToSave','if ($a > $b)\n{ echo \"a is bigger than b\";\n}\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addIfElse() {
insertAtCaret('inputTextToSave','if ($a > $b) {\n echo \"a is greater than b\";\n} else {\n echo \"a is NOT greater than b\";\n}\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addSwitch() {
insertAtCaret('inputTextToSave','switch ($i) {\ncase \"apple\":\necho \"i is apple\";\nbreak;\ncase \"bar\":\necho \"i is bar\";\nbreak;\ncase \"cake\":\necho \"i is cake\";\nbreak;\n}\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addElseIf() {
insertAtCaret('inputTextToSave','if ($a > $b) {\necho \"a is bigger than b\";\n} elseif ($a == $b) {\necho \"a is equal to b\";\n}\nelse {\necho \"a is smaller than b\";\n}\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addWhile() {
insertAtCaret('inputTextToSave','$i = 1;\nwhile ($i <= 10):\necho $i;\n$i++;\nendwhile;\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addDoWhile() {
insertAtCaret('inputTextToSave','$i = 0;\ndo {\necho $i;\n} while ($i > 0);\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFor() {
insertAtCaret('inputTextToSave','for ($i = 1; ; $i++) {\nif ($i > 10) {\nbreak;\n}\necho $i;\n}\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addForEach() {
insertAtCaret('inputTextToSave','$arr = array(1, 2, 3, 4);\nforeach ($arr as &$value) {\necho $value;\n}\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addInclude() {
insertAtCaret('inputTextToSave','include \"filename.inc.php\";\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addEcho() {
insertAtCaret('inputTextToSave','echo \"foo is $foo\";\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addArray() {
insertAtCaret('inputTextToSave','$firstquarter = array(1 => \'January\', \'February\', \'March\');\n');
return false;
document.getElementById("inputTextToSave").focus();
}

function addFunction() {
insertAtCaret('inputTextToSave','function hello($name) {\n echo \"Hello $name!\";\n }');
return false;
document.getElementById("inputTextToSave").focus();
}

function addClass() {
insertAtCaret('inputTextToSave','class Cart {\n var $items;\n function add_item($artnr, $num) {\n $this->items[$artnr] += $num;\n }\n');
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

function executePhp() {
var newtext = "to be implemented";
if (document.myform.placement[1].checked) {
document.myform.inputtext.value = "";
}
document.myform.inputtext.value += newtext;
}

function replacePhp() {
var newtext = "to be implemented";
if (document.myform.placement[1].checked) {
document.myform.outputtext.value = "";
}
document.myform.outputtext.value += newtext;
}

function deleteAll() {
var person = prompt("Please enter \"yes\" to delete", "no");
    if (person == "yes") {
    document.getElementById("inputTextToSave").value = "";
	document.getElementById("inputTextToSave").focus();     
    }
}



