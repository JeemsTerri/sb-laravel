<?php

include_once 'autoload.php';

echo "<pre>";
$sheep = new Animal("shaun");

echo $sheep->getName(), PHP_EOL; // "shaun"
echo $sheep->getLegs(), PHP_EOL; // 2
echo $sheep->getColdBlooded(), PHP_EOL; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

echo "</pre>";