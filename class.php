<?php

	//This progrma is onl y for the practice of the class and object 

	//Now we are going to generate the class and owill place an object into it.
	class Fruit {

		public $name;
		public $color;

		//Now we will going to create construct function.
		public function __construct($name, $color) {

			$this->name = $name;
			$this->color = $color;
		}
		//Now we will write the code of our output.
		public function intro() {
			echo "Name of the fruit is {$this->name} and color of fruit is {$this->color}.";
		}
	}

	//Now we are going to make a new class called Strawberry
	class Strawberry extends Fruit {

		public $weight;

		public function __construct($name, $color, $weight) {

			$this->name = $name;
			$this->color = $color;
			$this->weight = $weight;
		}

		public function intro() {
			echo "Name of that fruit is {$this->name} and color of {$this->name} is always {$this->color} and also weight od the {$this->name} is {$this->weight}grams.";
			echo "<br>";
			echo "<br>";
			echo "<br>";
		}
	}

	//Declaring a new variable for passing all the values
	$Strawberry = new Strawberry('Strawberry', 'Red', '100');
	$Strawberry->intro(); 


	//Now creating one more class and playing with it.

	class Personal_Info {
		
		public $fname;
		public $lname;
		public $mobile;
		public $mail;

		//Now declaring the construct function
		public function __construct($fname, $lname, $mobile, $mail) {

			$this->fname = $fname;
			$this->lname = $lname;
			$this->mobile = $mobile;
			$this->mail = $mail;
		}

		//Now Declaring the introduction part.
		public function intro() {
			echo "First Name:- {$this->fname} <br> 
			Last Name:- {$this->lname} <br> 
			Mobile Number:- {$this->mobile} <br>
			Email Id:- {$this->mail}<br> ";
		}
	}

	//But Now creating one more class and making extends from the upper class
	class Shrey extends Personal_Info {

		public $occp;
		public $aadhar;
		public $message;

		//Now calling the function construct
		public function __construct($fname, $lname, $mobile, $mail, $occp, $aadhar, $message) {

			//Properties
			$this->fname = $fname;
			$this->lname = $lname;
			$this->mobile = $mobile;
			$this->mail = $mail;
			$this->occp = $occp;
			$this->aadhar = $aadhar;
			$this->message = $message;
		} 

		//Now calling intro() function
		public function intro() {
			echo "First Name:- {$this->fname} <br> 
			Last Name:- {$this->lname} <br> 
			Mobile Number:- {$this->mobile} <br>
			Email Id:- {$this->mail}<br> 
			Occupation:- {$this->occp} <br>
			Aadhar Number:- {$this->aadhar} <br>
			Message:- {$this->message}";

			//Now giving space between the message and the thanking note.
			echo "<br>";
			echo "<br>";
			echo "<br>";

			//Now giving Thanking Note for visitng our site and making some notice that nothing is incorrect or not.
			echo "<center><h3>Thank You for Being There When I wanted you most.</h3></center>";
			echo "<br>";
			echo "<h1><center>PHP : HyperText Preprocessor</center></h1>";
		}
	}

	//Now Declaring one variable that will pass all the values to the above declared variables.
	$person = new Shrey('Shrey', 'Shah', '9725230880', 'shreyshah@gmail.com', 'Computer Engineer', '123456789012', 'Hello Maam! My name is Shrey Shah as you can see above and I have gone through many stages of my life and you were always being there as my Teacher . Thank You for all that things.');
	
	$person->intro();

	$this->shrey = $person;
	echo $person ;
?>