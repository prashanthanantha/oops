<?php
/* Interface Defination
Interface is  is feature of oops wich is allowed to creatge functions without implementation.
the implementation need to be includes in the class.
difference is implementation not present in the interface , but class implementation will happen.
Interface all methoda are abstract methds
it allowed only public modifier.
we cant create the object for interafce
interaface does not contain the code
interface can not have non-abstract method.
*/

Interface Animal {
	public function makeSound();
}

class Dog Implements Animal {
	function makeSound(){
		return "Bow Bow";
	}
}

class Cat Implements Animal {
	function makeSound(){
		return "Meow Meow";
	}
}

class Cow Implements Animal {
	function makeSound(){
		return "Amba Amba";
	}
}

$obj = new Dog();
echo $obj->makeSound();
echo "</br>";
$obj = new Cat();
echo $obj->makeSound();
echo "</br>";
$obj = new Cow();
echo $obj->makeSound();
echo "</br>";
 ?>