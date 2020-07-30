<?php
require_once 'animal.php';
class Frog extends Animal {
  public function __construct($name) 
  {
    $this->name= $name;
    $this->legs = 4;
  }
  public function jump(){
      echo "hop hop<br>";
  }
}

?>