<?php
/* INHERITENCE Defination with explanation
The ability of class derive or inherit the properties and method form another class is called inheritence.
child can access only public and protected properties and methods.
inheritence by using extends keyword
PHP does not suppot multiple inheritence.
we can use traits for the solution for the multiple inheritence.
*/
Class School{
	protected function getSchoolName($parm){
		return $parm." High School";
	}
}
Class Prashanth extends School{
	
	function setSchool($schoolName){
		 return $this->getSchoolName($schoolName);
	}
	
}
//$obj =  new School();
//echo $obj->getSchoolName("Zilla Parishath");

$obj2 = new Prashanth();
echo "</br>";
echo $obj2->setSchool("Prashanth");
 ?>