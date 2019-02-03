<?php
class Bird {
public $canFly;
public $legCount;

public function __construct($canFly, $legCount) {
//echo "Constructed";
$this->canFly = $canFlay;
$this->legCount = $legCount;
}

public function canFly() {
return $this->canFly;
   }
public function getLegCount() {
return $this->legCount;
   } 
}

class Pigeon extends Bird {

}

?>
