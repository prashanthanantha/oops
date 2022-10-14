<?php
Interface Animal{
	function MakeSound();
}

Class Dog implements Animal{
function MakeSound(){
	return "Bow Bow";
}
}
Class Cat implements Animal{
function MakeSound(){
	return "Meow Meow";
}
}
Class Cow implements Animal{
function MakeSound(){
	return "Amba Amba";
}
}
$dog =  new Dog();
$cat =  new Cat();
$cow =  new Cow();
$Animals = array($dog,$cat,$cow);
foreach ($Animals as $animal){
	echo $animal->MakeSound();
	echo "<br>";
}


 ?>