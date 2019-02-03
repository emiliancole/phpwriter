<?php
require "ClassButton.php";

$Mybutton= new Button();
$Mybutton->value="My Button";
$Mybutton->width="150";
echo $Mybutton->RenderHTML();
?>
