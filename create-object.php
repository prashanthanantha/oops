<?php
class User{
    // we can write here properties
    public $name;
    public $age;
    public $followers;
}

// cretatae onject now, insted of crate class we can only create objects.
$newObject = new User();
$newObject->name = "prashanth";
$newObject->age = 25;
$newObject->followers = 1000;
print_r($newObject);
$newObject = new User();
$newObject->name = "uday";
$newObject->age = 25;
$newObject->followers = 1000;
print_r($newObject);
?>