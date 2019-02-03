<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<?php 
$version = "PHP Writer 00.37"; 
$writerfile = "index.php";
?>
    <title><?= $version; ?></title>
    <link rel="stylesheet" type="text/css" href="php.writer.css">
<script type="text/javascript" src="php.writer.js"></script>
<script type="text/javascript" src="php.functions.js"></script>
<script type="text/javascript" src="php.file.functions.js"></script>
<script type="text/javascript" src="php.GD.functions.js"></script>
<script type="text/javascript" src="php.insertAtCaret.js"></script>
<script type="text/javascript" src="html.functions.js"></script>
<script type="text/javascript" src="http://www.cdolivet.com/editarea/editarea/edit_area/edit_area_full.js"></script>
<script type="text/javascript" src="editAreaLoader.js"></script>
<script type="text/javascript" src="resetSelect.js"></script>
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
<h2><?= $version; ?></h2>
<p>A useful tool to write and run your php code.
Full PHP Manual at: <a href="http://php.net/manual/en/" target="_blank" >php.net</a></p>

<form name="savefile" method="post" action="<?= $writerfile; ?>">
<table>
<tr><td colspan="3">
<textarea autofocus id="inputTextToSave" name="textdata" placeholder="enter your code here..."
style="width:700px;height:300px;font-size:14pt;background-color:azure;">
<?php echo $_POST[textdata]; ?></textarea>
<tr><td colspan="3">
<div style="text-align:right">
<?php include "buttons/buttons.00.inc.html"; ?>
<input type="hidden" name="filename" value="aaa.php">
<input type="submit" name="submitsave" value="SaveCode">
<a href='aaa.php' target='_blank'>Run</a>
</div>
</td></tr>

<tr><td colspan="3">
<?php include "buttons/buttons.01.inc.html"; ?>
</td>
</tr>

<tr><td>
<?php include "buttons/buttons.02.inc.html"; ?>
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
include "charmap/charmapCapital.inc.html"; 
include "charmap/charmapLower.inc.html";
include "charmap/charmapSymbol.inc.html"; 
?>
        
       </td>
	</tr>
<tr><td>
<?php include "buttons/buttons.03.inc.html"; ?>
</td>
<td><input type="file" id="fileToLoad"><input type="button" value="LoadFile" 
        onclick="loadFileAsText()" /></td>
<td>
<?php 
include "charmap/charmapMath.inc.html";
?>
</td></tr>
<tr><td colspan="3">
 <?php include "buttons/buttons.04.inc.html"; ?>
</td></tr>
<tr>
<td colspan="3">
<?php 
// include "charmap/charmapMath.inc.html"; 
// include "charmap/charmapCapital.inc.html"; 
 include "buttons/buttons.05.inc.html"; ?>
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
    <li><a href="#date-time-tab">date/time</a></li>
    <li><a href="#string-tab">string</a></li>
    <li><a href="#math-tab">math</a></li>
    <li><a href="#pcre-tab">pcre</a></li>
    <li><a href="#class-tab">class</a></li>
    <li><a href="#GD-tab">GDlib</a></li>
    <li><a href="#html-tab">html</a></li>
    <li><a href="#css-tab">css</a></li>
    <li><a href="#js-tab">javascript</a></li>
    
    <li><a href="#bootstrap-tab">Bootstrap</a></li>
    <li><a href="#flashjs-tab">FlashJS</a></li>
  </ul>
  <div id="array-tab">
 <?php include "array/php.array.inc.html"; ?>
  </div> 
  <div id="file-tab">
<?php include "file/php.file.inc.html"; ?>
  </div> 
  <div id="control-tab">
<?php include "php.control.inc.html"; ?>
  </div>
  <div id="function-tab">
<?php include "php.function.inc.html"; ?>
  </div>
  
  <div id="date-time-tab">

<?php 
 include "datetime/php.date.time.inc.php"; 
 include "datetime/php.date.time.format.inc.html"; 
 include "datetime/php.date.time.constant.inc.html"; 
 include "datetime/php.calendar.inc.php"; 
 include "datetime/php.date.time.class.inc.html";
 include "datetime/php.period.inc.html";
 ?>
  </div>
  
  <div id="string-tab">
<?php include "string/php.ctype.inc.php"; ?>
<?php include "string/php.string.inc.html"; ?>
  </div>
  <div id="math-tab">
<input type="button" value="echo" onclick="insertAtCaret('inputTextToSave','echo ');return false;" />
<?php include "math/php.math.inc.html"; ?>
  </div>
  <div id="pcre-tab">
<?php 
 include "pcre/php.pcre.inc.php"; 
 include "pcre/php.pcre.syntax.inc.html"; 
 include "pcre/php.pcre.constant.inc.html";
 include "pcre/php.pcre.pattern.inc.html";
 ?>
  </div>
  <div id="class-tab">
<?php 
include "class/php.class.inc.html"; 
include "class/php.class.magic.inc.html";
include "class/php.class.property.inc.html";
include "class/php.myClass.1.inc.html"; 
?>
  </div>
  
  <div id="GD-tab">
<?php include "php.GD.inc.html"; ?>
  </div>
  
  <div id="html-tab">
<?php include "html.selector.inc.html"; ?>
  </div>
  
  <div id="css-tab">
<?php 
include "css/css.buttons.inc.html"; 
include "css/css.selector.inc.html"; 
include "css/css.align.inc.html";
include "css/css.appearance.inc.html";
include "css/css.animation.inc.html";
include "css/css.value.inc.html";
include "css/css.js.inc.html";
?>
  </div>
  
  <div id="js-tab">
<input type="button" value="<script>" onclick="insertAtCaret('inputTextToSave','<script>\n\n</script>');return false;" />
<select id="myCdnjs" onchange="insertAtCaret('inputTextToSave', document.getElementById('myCdnjs').value);">
  <option value="">CDNJS</option>
  <option value="<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>">Bootstrap</option>
</select>
<?php 
// from http://www.w3schools.com/jsref/jsref_obj_string.asp
include "str.javascript.inc.html"; 
?>
  </div>
  
  <div id="bootstrap-tab">
<input type="button" value="html" onclick="addHtmlBootstrap()" />
<?php 
include "bootstrap/attribute.inc.html"; 
include "bootstrap/button.inc.html"; 
include "bootstrap/form.inc.html";
?>
  </div>
  
<div id="flashjs-tab">
<?php 
include "flashjs.inc.html"; 
?>
  </div>
  
</div>
</td></tr>
</table>
</form>

</body>
</html>
