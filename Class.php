<?php
/* CLASS Defination
Class is a programmer definded datatype. which includes local methoda and local properties.
Class is a Collection of objects. object has property and behavior.
Class is blueprint.
Class we create with using Class Keyword.
class Contain  properties and Methods
Access Class using create Object of Class.
object is nothing but a instace of classe .
we can access properties and methods using create object.
only public access modifiers can access outside of the class.
private and protected not access outside of the class

Extra Notes:
Member variable -> Member variable defined inside of class and only member function can acess
Member Functions -> Member functions are operators and function declared as members of class
and use for accessing the object data.
Interface-> Interface is a concept child class can inherit the function of the parent class.
Parent Class -> if any another class inherit some class its parent.  also called base class.
Overloading -> overlaoding can be achive if some class methods have a similar name but different number of argumnets

Magic Methods:
Magic methods are special methods which are overide PHP default actions.
Magic method are automatically called when certain conditions are met.
all magic methods start with __ reserved by PHP.
__construct(),
__destruct()
__set();
__get();
__call();
__callStatic();
__isset();
__unset();
__sleep();
__weakup();
__serailize();
__unserailize();
__toString();
__invoke();
__set_state();
__clone();
__debugInfo();

*/
Class School {
	public $name = "Zilla Parishath High School Gundaram";
	
	function getSchoolName(){
		return $this->name;
	}
	function setSchoolName($newName){
		$this->name = $newName;
	}
}
$obj = new School();
echo $obj->getSchoolName();
$obj->setSchoolName("Pragathi High School");
echo "</br>";
echo $obj->getSchoolName();
 ?>