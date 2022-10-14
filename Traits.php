<?php
/* Traits Defination and Exaple
PHP support only single inheritence that means clild class can inherit single parent calss.
So Traits solve this problem.

Traita are created with using trait keyword
multiple traits can use inside of the class class 
traits can have methods and abstract methods and public private protected access modifiers.
trait are inclues in class using with use keyword

*/

Trait Animal{
	function getAnimalName(){
		return "My Pet Name is Dog";
	}
}
Trait Vechile{
	function getVechileName(){
		return "My Bike Name is Hero";
	}
}

Class MyClass {
	use Animal,Vechile;
	
}

$obj =  new MyClass();
echo $obj->getAnimalName();
echo "</br>";
echo $obj->getVechileName();

?>