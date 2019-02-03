<?php
require "ClassHtml.php";
$HTML=new HTML();
$elem=$HTML->createButton();
$elem->setAttribute('value','My Button');
$elem->setAttribute('style','width:125px');
$HTML->appendChild($elem);
echo $HTML->saveHTML();
?>

