<?php  
	class Dog {
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;

	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
	}

$dog1 = new Dog();
$dog1­>firstName = “Barry”;
$dog1­>lastName = “Allen”;
print “The dog’s name is {$dog1­>getName()}.”;

//The dog’s name should be BARRY ALLEN

$name = new Name();
$name­>firstName = “Andrew”;
$name­>lastName = “Olivas”;
print “My name is {$name­>getName()}.”;

____________________________________________________________________________________________________________________________________________________________