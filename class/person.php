<?php
require "ClassPerson.php";
$person = new Person('john', 20);

//$person->name = 'john';
//$person->age= 20;

//echo $person->name.' is '.$person->age.' years old.';
echo $person->sentence();

?>
