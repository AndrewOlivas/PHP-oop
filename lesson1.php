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
$dog1­>firstName = “BooBoo”;
$dog1­>lastName = “Iwao”;
print “The dog’s name is {$dog1­>getName()}.”;

//The dog’s name is BooBoo Iwao.
