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
// example 2

	class Dog {
		public $firstName2 = “default name”;
		public $lastName2 = “default last name”;
		public $gender2 = “male”;
		public $price2 = 0;

	function getName() {
		return “{$this­>firstName2}” .
		“{$this­>lastName2}”;
		}
	}
	$name = new Name();
	$name­>firstName2 = “Andrew”;
	$name­>lastName2 = “Olivas”;
	print “My name is {$name­>getName()}.”;
// example 3
	class Chicken {
		public $firstName3 = “default name”;
		public $lastName3 = “default last name”;
		public $gender3 = “male”;
		public $price3 = 0;

	function getName() {
		return “{$this­>firstName3}” .
		“{$this­>lastName3}”;
		}
	}
	$chicken = new Name();
	$chicken­>firstName3 = “nuggets”;
	$chicken­>lastName3 = “boyd”;
	print “My Chickens name is {$name­>getName()}.”;

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

// example 2

	class Armadillo {
		public $firstName2;
		public $lastName2;
		public $breed2;

	function __construct($title, $firstName2, $lastName2, $breed2) {
		$this­>firstName2 = $firstName2;
		$this­>lastName2 = $lastName2;
		$this­>breed2 = $breed2;
	}

	function getName() {
		return “{$this­>firstName2}” .
		“{$this­>lastName2}”;
		}
	}

	$armadillo = new Armadillo(“Mike”, “Rolo”, “GiantArmadillo”);
	print “Armadillo”: {$armadillo­>getName()}\n;

// example 3

	class Cat {
		public $firstName3;
		public $lastName3;
		public $breed3;

	function __construct($title, $firstName3, $lastName3, $breed3) {
		$this­>firstName3 = $firstName3;
		$this­>lastName3 = $lastName3;
		$this­>breed3 = $breed3;
	}

	function getName() {
		return “{$this­>firstName3}” .
		“{$this­>lastName3}”;
		}
	}

	$cat1 = new Dog(“Jeff”, “Chang”, “Tabby”);
	print “Cat 1: {$cat1­>getName()}\n;
	?>

_____________________________________________________________________________________________________________________________________________

// lesson 3

	<?php
	if (is_string())echo “It is a string”;
	else
	echo ‘It is not a string’;
	var_dump(is_string(‘XYZ’);
	var_dump(is_string(‘8008’);
	var_dump(is_string(123);
	var_dump(is_string(false);

// example 2

	if (is_string())echo “It is a string”;
	else
	echo ‘It is not a string’;
	var_dump(is_string(‘XYZ’);
	var_dump(is_string(‘8008’);
	var_dump(is_string(123);
	var_dump(is_string(false);

?>