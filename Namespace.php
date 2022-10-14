<?php
require_once "Animal.php";
use source1\Animal as newAnimal;
class Animal{
	public $name = "Cat Makesound Meow Meaw";
}

$obj =  new Animal();
echo $obj->name;
echo "<br>";

$obj2 =  new newAnimal();
echo $obj2->name;
echo "<br>";

 ?>