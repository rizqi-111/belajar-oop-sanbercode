<?php
require_once 'animal.php';
class Ape extends Animal {
  public function __construct($name) 
  {
    $this->name= $name;
  }
  public function yell(){
      echo "Auooo<br>";
  }
}

?>