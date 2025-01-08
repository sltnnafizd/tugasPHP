<?php
require_once "Animal.php";
require_once "Frog.php";
require_once "Ape.php";

echo "<pre>"; // opsional

// instance Animal
$sheep = new Animal("shaun");
echo "Name: " . $sheep->get_name() . "<br>";
echo "Legs: " . $sheep->get_legs() . "<br>";
echo "Cold Blooded: " . $sheep->get_cold_blooded() . "<br><br>";

// instance Frog
$kodok = new Frog("buduk");
echo "Name: " . $kodok->get_name() . "<br>";
echo "Legs: " . $kodok->get_legs() . "<br>";
echo "Cold Blooded: " . $kodok->get_cold_blooded() . "<br>";
echo "Jump: ";
$kodok->jump();
echo "<br><br>";

// instance Ape
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->get_name() . "<br>";
echo "Legs: " . $sungokong->get_legs() . "<br>";
echo "Cold Blooded: " . $sungokong->get_cold_blooded() . "<br>";
echo "Yell: ";
$sungokong->yell();
echo "</pre>";

?>