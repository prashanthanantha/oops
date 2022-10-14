<?php
/* Encapsulation Defination
A process of wraping code and data together into a songle unit called encapsulation.
access modifiers in encapsulation public private and protected.
public -> can access anywhere inside class and outside of class.
protected -> does not access out side of class
protected -> does not access out side of class and childe class. it will access only with the class.
*/ 
Class Vechile{
	private $name = "Hero Honda";
	
	protected function getBrand(){
		return $this->name;
	}
	
	protected function setBrand($x){
		$this->name = $x;
	}
	
}
Class Bike extends Vechile{
	function setBikeName($newName){
		$this->setBrand($newName);
	}
	function getBikeName(){
		return $this->getBrand();
	}
}
$obj =  new Bike();
echo $obj->getBikeName();
$obj->setBikeName("Activa");
echo "<br>";
echo $obj->getBikeName();
?>