<?php
class HTML extends DOMDocument{
 function __construct(){
  parent::__construct('1.0','iso-8859-1' );
  $this->formatOutput = true;
 }
 
 public  function createButton(){
 $temp= $this->createElement('input');
 $temp->setAttribute('type','button');
 return $temp;
}

public  function saveHTML(){
 return  html_entity_decode(parent::saveHTML());
}

}
 ?>
 