<?php
/* Static Properties and Methods
Static Properties:
Stactic properties are call directlty with out creating an instance of class.
static prperites are create with using static keyword.
to access the property name with use Class name double colon and varable name. Ex: ClassName::$staticProp;

A class can have both static and non-static properties.
static properties access inside of the class using Self keyword double colon and property name. Ex: self::$staticProp;

Static Methods:
static methods can be create with out using instance of class. with create instance also access.
static methods are declated with static keyword
to access the Method name with use Class name double colon and varable name. Ex: ClassName::$methodname;
A class can have both static and non-static Mrthods.
static methods access inside of the class using Self keyword double colon and Method name. Ex: Self::$StaticMethod;

We can avoid construct using static method: Class:Method



*/
Class Animal {
	public static $name ="Dog";
	function __construct(){
		Self::$name = "New Dog";
	}
	
	public static function getAnimalName(){
		return Self::$name;
	}

}
echo Animal::$name;
echo "<br>";
echo Animal::getAnimalName();
//$obj = new Animal();
echo "<br>";
echo Animal::getAnimalName();
 ?>