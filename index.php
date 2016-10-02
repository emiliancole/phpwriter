<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Writer 0.29</title>
    <link rel="stylesheet" type="text/css" href="php.writer.css">
<script type="text/javascript" src="php.writer.js"></script>
<script type="text/javascript" src="php.functions.js"></script>
<script type="text/javascript" src="php.file.functions.js"></script>
<script type="text/javascript" src="php.GD.functions.js"></script>
<script type="text/javascript" src="php.insertAtCaret.js"></script>
<script type="text/javascript" src="html.functions.js"></script>
<script type="text/javascript" src="http://www.cdolivet.com/editarea/editarea/edit_area/edit_area_full.js"></script>
<script type="text/javascript" src="editAreaLoader.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="sar.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-darkness/jquery-ui.min.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  
<style>
.ui-menu { width: 100px; }
.ui-button{ font-size: 11px; }
.ui-button-text-only .ui-button-text {
        padding: .1em .2em .1em; }
.ui-tabs{ font-size: 11px; }
.ui-tabs-text-only .ui-tabs-text {
        padding: .1em .2em .1em; }
        
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid orange;
}
</style>

</head>
<body>
<h2>PHP Writer 0.29</h2>
<p>A useful tool to write and run your php code.
Full PHP Manual at: <a href="http://php.net/manual/en/" target="_blank" >php.net</a></p>

<form name="savefile" method="post" action="phpwriter.00.29.php">
<table>
<tr><td colspan="3">
<textarea autofocus id="inputTextToSave" name="textdata" placeholder="enter your code here..."
style="width:700px;height:300px;font-size:14pt;background-color:azure;">
<?php echo $_POST[textdata]; ?></textarea>
<tr><td colspan="3">
<div style="text-align:right">
<input type="hidden" name="filename" value="aaa.php">
<input type="submit" name="submitsave" value="SaveCode">
<a href='aaa.php' target='_blank'>Run</a>
</div>
</td></tr>

<tr><td colspan="3"><input type="button" value="DeleteAll" onclick="deleteAll()" />
<input type="button" value="HELP" onclick="alert('1. Click buttons to write your code\n2. Save it locally\n3. Run it locally or in your server\n4. Load your code for further use')" />
<input type="button" value="viewCode" onclick="alertEval()" />
<input type="button" value="/*   */" onclick="insertAtCaret('inputTextToSave','/*\ncomments here\n*/\n');return false;" />
<input type="button" value="//" onclick="insertAtCaret('inputTextToSave','// ');return false;" />
<input type="button" value="tab" onclick="insertAtCaret('inputTextToSave','\t');return false;" />
<input type="button" value="{" onclick="insertAtCaret('inputTextToSave','{');return false;" />
<input type="button" value="}" onclick="insertAtCaret('inputTextToSave','}');return false;" />
<input type="button" value="&quot;" onclick="insertAtCaret('inputTextToSave','&quot;');return false;" />
<input type="button" value=" " onclick="insertAtCaret('inputTextToSave',' ');return false;" />
<input type="button" value="." onclick="insertAtCaret('inputTextToSave','.');return false;" />
<input type="button" value=":" onclick="insertAtCaret('inputTextToSave',':');return false;" />
<input type="button" value=";" onclick="insertAtCaret('inputTextToSave',';');return false;" />
<input type="button" value="$" onclick="insertAtCaret('inputTextToSave','$');return false;" />
<input type="button" value="(" onclick="insertAtCaret('inputTextToSave','(');return false;" />
<input type="button" value="," onclick="insertAtCaret('inputTextToSave',',');return false;" />
<input type="button" value=")" onclick="insertAtCaret('inputTextToSave',')');return false;" />
<input type="button" value=" = " onclick="insertAtCaret('inputTextToSave',' = ');return false;" />
<input type="button" value="[" onclick="insertAtCaret('inputTextToSave','[');return false;" />
<input type="button" value="]" onclick="insertAtCaret('inputTextToSave',']');return false;" />
<input type="button" value="Ret" onclick="insertAtCaret('inputTextToSave','\n');" />

</td>
</tr>

<tr><td>
<input type="button" value="&&" onclick="insertAtCaret('inputTextToSave','($a && $b)');return false;" />
<input type="button" value="||" onclick="insertAtCaret('inputTextToSave','($a || $b)');return false;" />
<input type="button" value="!" onclick="insertAtCaret('inputTextToSave','(!$a)');return false;" />
<input type="button" value="xor" onclick="insertAtCaret('inputTextToSave','($a xor $b)');return false;" />
<input type="button" value="<" onclick="insertAtCaret('inputTextToSave','($a < $b)');return false;" />
<input type="button" value="<=" onclick="insertAtCaret('inputTextToSave','($a <= $b)');return false;" />
<input type="button" value="==" onclick="insertAtCaret('inputTextToSave','$a == $b)');return false;" />
<input type="button" value=">=" onclick="insertAtCaret('inputTextToSave','($a >= $b)');return false;" />
<input type="button" value=">" onclick="insertAtCaret('inputTextToSave','($a > $b)');return false;" />
</td>
		<td><input id="inputFileNameToSaveAs" /><input type="button" value="SaveTextAsFile" 
        onclick="saveTextAsFile();" />
        </td>
		<td>
<?php 
if (isset($_POST))  {
            $file = tmpfile();
            $text = $_POST["textdata"];
            file_put_contents($_POST['filename'], $text);
            fclose($file);
 	}         
        include "charmapSymbol.inc.html"; 
        include "charmapCapital.inc.html"; 
?>
        
       </td>
	</tr>
<tr><td>
<input type="button" value="&" onclick="insertAtCaret('inputTextToSave','($a & $b)');return false;" />
<input type="button" value="|" onclick="insertAtCaret('inputTextToSave','($a | $b)');return false;" />
<input type="button" value="^" onclick="insertAtCaret('inputTextToSave','($a ^ $b)');return false;" />
<input type="button" value="~" onclick="insertAtCaret('inputTextToSave','(~ $a)');return false;" />
<input type="button" value="<<" onclick="insertAtCaret('inputTextToSave','($a << $b)');return false;" />
<input type="button" value=">>" onclick="insertAtCaret('inputTextToSave','($a >> $b)');return false;" />
<input type="button" value="+" onclick="insertAtCaret('inputTextToSave',' + ');" />
<input type="button" value="-" onclick="insertAtCaret('inputTextToSave',' - ');" />
<input type="button" value="*" onclick="insertAtCaret('inputTextToSave',' * ');" />
<input type="button" value="/" onclick="insertAtCaret('inputTextToSave',' / ');" />
</td>
		<td><input type="file" id="fileToLoad"><input type="button" value="LoadFile" 
        onclick="loadFileAsText()" /></td>
		<td>
        <?php include "charmapLower.inc.html"; ?>
        </td>
	</tr>
<tr>
<td colspan="3">
<input type="button" value="php" onclick="addPhp()" />
<input type="button" value="$_GET" onclick="addGET()" />
<input type="button" value="$_POST" onclick="addPOST()" />
<input type="button" value="if" onclick="addIf()" />
<input type="button" value="ifelse" onclick="addIfElse()" />
<input type="button" value="switch" onclick="addSwitch()" />
<input type="button" value="elseif" onclick="addElseIf()" />
<input type="button" value="while" onclick="addWhile()" />
<input type="button" value="dowhile" onclick="addDoWhile()" />
<input type="button" value="for" onclick="addFor()" />
<input type="button" value="foreach" onclick="addForEach()" />
<input type="button" value="include" onclick="addInclude()" />
<input type="button" value="echo" onclick="addEcho()" />
</td></tr>

<tr>
<td colspan="3"><div style="text-align:right">
<input type="button" value="inlinephp" onclick="insertAtCaret('inputTextToSave','\<\?= $var ?>');" />
<input type="button" value="text/plain" onclick="insertAtCaret('inputTextToSave','header(\'Content-Type: text/plain\');\n');" />
<input type="button" value="resetSelect" onclick="resetPhpSelect();" />
</div>
</td>
</tr>

<tr>
<td colspan="3">
<div id="tabs">
  <ul>  
    <li><a href="#array-tab">array</a></li>
    <li><a href="#file-tab">file</a></li>
    <li><a href="#control-tab">control</a></li>
    <li><a href="#function-tab">function</a></li>
    <li><a href="#string-tab">string</a></li>
    <li><a href="#math-tab">math</a></li>
    <li><a href="#class-tab">class</a></li>
    <li><a href="#GD-tab">GDlib</a></li>
    <li><a href="#html-tab">html</a></li>
    <li><a href="#css-tab">css</a></li>
    <li><a href="#js-tab">javascript</a></li>
    <li><a href="#angular-tab">AngularJS</a></li>
    <li><a href="#bootstrap-tab">Bootstrap</a></li>
  </ul>
  <div id="array-tab">
 <?php include "php.array.inc.html"; ?>
  </div> 
  <div id="file-tab">
<?php include "php.file.inc.html"; ?>
  </div> 
  <div id="control-tab">
<?php include "php.control.inc.html"; ?>
  </div>
  <div id="function-tab">
<?php include "php.function.inc.html"; ?>
  </div>
  <div id="string-tab">
<input type="button" value="echo" onclick="insertAtCaret('inputTextToSave','echo ');return false;" />
<?php include "php.string.inc.html"; ?>
  </div>
  <div id="math-tab">
<input type="button" value="echo" onclick="insertAtCaret('inputTextToSave','echo ');return false;" />
<?php include "php.math.inc.html"; ?>
  </div>
  <div id="class-tab">
<input type="button" value="class" onclick="addClass()" />
<?php include "class.inc.html"; ?>
  </div>
  
  <div id="GD-tab">
<input type="button" value="header" onclick="addHeaderImage()" />
<input type="button" value="create" onclick="addImageCreate()" />
<input type="button" value="colorallocate" onclick="addImageColorAllocate()" />
<input type="button" value="string" onclick="addImageString()" />
<input type="button" value="png" onclick="addImagePng()" />
<input type="button" value="destroy" onclick="addImageDestroy()" />
<?php include "GDlib.inc.html"; ?>
  </div>
  
  <div id="html-tab">
<?php include "html.selector.inc.html"; ?>
  </div>
  
  <div id="css-tab">
<input type="button" value="<style>" onclick="insertAtCaret('inputTextToSave','<style>\n\n</style>');return false;" />
<input type="button" value="{" onclick="insertAtCaret('inputTextToSave','{');return false;" />
<input type="button" value="}" onclick="insertAtCaret('inputTextToSave','}');return false;" />
<?php include "css.selector.inc.html"; ?>
  </div>
  
  <div id="js-tab">
<input type="button" value="<script>" onclick="insertAtCaret('inputTextToSave','<script>\n\n</script>');return false;" />
<select id="myCdnjs" onchange="insertAtCaret('inputTextToSave', document.getElementById('myCdnjs').value);">
  <option value="">CDNJS</option>
  <option value="<script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js'></script>">AngularJS</option>
  <option value="<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>">Bootstrap</option>
</select>
<?php 
// from http://www.w3schools.com/jsref/jsref_obj_string.asp
include "str.javascript.inc.html"; 
?>
  </div>

  <div id="angular-tab">
<input type="button" value="<html>" onclick="addHtml()" />
<input type="button" value="cdnjs" onclick="insertAtCaret('inputTextToSave','<script src=\'http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js\'></script>');return false;" />
<input type="button" value="{{" onclick="insertAtCaret('inputTextToSave','{{');return false;" />
<input type="button" value="}}" onclick="insertAtCaret('inputTextToSave','}}');return false;" />
<?php include "angular.inc.html"; ?>
  </div>
  
  <div id="bootstrap-tab">
<input type="button" value="html" onclick="addHtmlBootstrap()" />
<?php 
include "bootstrap/attribute.inc.html"; 
include "bootstrap/button.inc.html"; 
include "bootstrap/form.inc.html";
?>
  </div>
  
</div>
</td></tr>
</table>
</form>

</body>
</html>
