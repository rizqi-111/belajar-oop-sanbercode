<?php
require_once 'ape.php';
require_once 'frog.php';
$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded."<br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>