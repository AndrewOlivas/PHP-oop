<?php  
// lesson 1
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

?>
____________________________________________________________________________________________________________________________________________________________

<?php
// lesson 2
	class Dog {
		public $firstName;
		public $lastName;
		public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
	}

	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
	}

	$dog1 = new Dog(“Bobo”, “Swagins”, “SiberianHusky”);
	print “Dog 1: {$dog1­>getName()}\n;
// new example
	class Armadillo {
		public $firstName;
		public $lastName;
		public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
	}

	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
	}

	$armadillo = new Armadillo(“Mike”, “Rolo”, “Armadillo”);
	print “Armadillo”: {$armadillo­>getName()}\n;

// new example
	class Cat {
		public $firstName;
		public $lastName;
		public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
	}

	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
	}

	$cat1 = new Dog(“Jeff”, “Chang”, “Tabby”);
	print “Cat 1: {$cat1­>getName()}\n;