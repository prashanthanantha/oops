<?php
/* Abstract Class Defination
Abstract Class is Class which is created with Abstract keyword.
abstract class hiding the implementation details and showing the functionality.
abstract class must have contain atleast abstract method. which is created but not implemented.
abstract class we can create for instance.
Abstract class created access modifiers. child can access only same or below access modifier. 
*/
Abstract Class Vechile{
	public $name;
	public $brnad;
	function __construct($brnad){
		$this->name = $brnad;
	}
	abstract function getBrand();
}

Class Bike extends Vechile{
	
public function getBrand(){
	return "your vechile is ".$this->name;
}

	
}

$obj = new Bike("Hero");
echo $obj->getBrand();
 ?>