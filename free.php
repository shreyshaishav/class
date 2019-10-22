<?php

	//Creating the class having the simple class and its objects
	class Personal_info {

		//Properties
		public $fname;
		public $lname;
		public $mobile;
		public $mail;
		public $aadhar;
		public $occp;
		public $address;

		//Methods

		//For First Name
		function set_fname($fname) {
			$this->fname = $fname;
		} 
		function get_fname() {
			return $this->fname;
		}

		//For Last Name
		function set_lname($lname) {
			$this->lname = $lname;
		}
		function get_lname() {
			return $this->lname;
		}

		//For Mobile Number
		function set_mobile($mobile) {
			$this->mobile = $mobile;
		}
		function get_mobile() {
			return $this->mobile;
		}

		//For Mail Id
		function set_mail($mail) {
			$this->mail = $mail;
		}
		function get_mail() {
			return $this->mail;
		}

		//For Aadhar Number
		function set_aadhar($aadhar) {
			$this->aadhar = $aadhar;
		} 
		function get_aadhar() {
			return $this->aadhar;
		}

		//Now for occupation
		function set_occp($occp) {
			$this->occp = $occp;
		}
		function get_occp() {
			return $this->occp;
		}

		//For Message
		function set_msg($msg) {
			$this->msg = $msg;
		}
		function get_msg() {
			return $this->msg;
		}
	}

	//Now Creating a new variable that will pass all the values into above declared all the variables
	/*$person = new Personal_info('Shrey', 'Shah', '9428730958', 'shreyshaishav@gmail.com', '321654987098', 'Computer Engineer', 'Hello Friends! My Name is Shrey Shah and as you all know that i am the only one who knows the php somehow.');*/
	$person = new Personal_info();
	$person -> set_fname('Ronak');
	$person -> set_lname('Sirwani');
	$person -> set_mobile('8320070235');
	$person -> set_mail('ronaksirwani@gmail.com');
	$person -> set_aadhar('321654987098');
	$person -> set_occp('Computer Engineer');
	$person -> set_msg('Hello Friends! My Name is Ronak Sirwani and as you all know that i am the only one who knows the MYSQL somehow.');

	//Now we are going to call althe above declared variables with their values passed by variable "person".
	echo "Name:-" .$person->get_fname()." ".$person->get_lname();
	echo "<br>";
	echo "Mobile Number:- ".$person->get_mobile();
	echo "<br>";
	echo "Mail Id:- ".$person->get_mail();
	echo "<br>";
	echo "Aadhar Number:- ".$person->get_aadhar();
	echo "<br>";
	echo "Occupation:- ".$person->get_occp();
	echo "<br>";
	echo "Message:- ".$person->get_msg();
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	//Now Taking Class for giving output of the Fruits.
	class Fruit {

		//Properties
		public $fruit_name;
		public $color;

		//Making __construct function
		public function __construct($fruit_name, $color) {

			$this->fruit_name = $fruit_name;
			$this->color = $color;
		}

		//Now making Introduction function for output
		public function intro() {
			echo "Name of that fruit is {$this->fruit_name} and color of {$this->fruit_name} is {$this->color}.";
		}
	}

	//Now making that class which will extends the above class and will give following output.
	class Strawberry extends Fruit {

		public $weight;

		//Now making the __construct() function
		public function __construct($fruit_name, $color, $weight) {

			$this->fruit_name = $fruit_name;
			$this->color = $color;
			$this->weight = $weight;
		}

		//Now making the Introduction function that will be called which will extend to the above Introduction function used in the Fruit Class.
		public function intro() {
			echo "<center>Name of that fruit is {$this->fruit_name} and color of that {$this->fruit_name} is {$this->color} and also having total {$this->weight}grams of {$this->fruit_name}. </center>";
		}
	}

	//Now declaring the variable that will give them the value.
	$fruit = new Strawberry('Strawberry', 'Red', '100');
	$fruit->intro();


	//Form Submission And its back-end script

	//Now we are going to get the values that are being submitted in the form by users.
	$form_fname = $_POST['fname'];
	$form_lname = $_POST['lname'];
	$form_mobile = $_POST['mobile'];
	$form_mail = $_POST['mail'];
	$form_aadhar = $_POST['aadhar']; 

	//Now we are going to get the information to the variables that we are going to declare now by Class.
	class form {

		//Properties
		public $form_fname;
		public $form_lname;
		public $form_mobile;
		public $form_mail;
		public $form_aadhar;

		//Methods

		//For First Name
		function set_form_fname($form_fname) {
			$this->form_fname = $form_fname;
		}
		function get_form_fname() {
			return $this->form_fname;
		}

		//For Last Name
		function set_form_lname($form_lname) {
			$this->form_lname = $form_lname;
		}
		function get_form_lname() {
			return $this->form_lname;
		}

		//For Mobile Number
		function set_form_mobile($form_mobile) {
			$this->form_mobile = $form_mobile;
		}
		function get_form_mobile() {
			return $this->form_mobile;
		}

		//For Mail Id
		function set_form_mail($form_mail) {
			$this->form_mail = $form_mail;
		}
		function get_form_mail() {
			return $this->form_mail;
		}

		//For Aadhar Number
		function set_form_aadhar($form_aadhar) {
			$this->form_aadhar = $form_aadhar;
		}
		function get_form_aadhar() {
			return $this->form_aadhar;
		}
	}

	//Now declaring one variable that will pass all the values in the above declared variables from those variables that are containing the values from the filled form.

	$form_person = new form();
	$form_person -> set_form_fname($form_fname);
	$form_person -> set_form_lname($form_lname);
	$form_person -> set_form_mobile($form_mobile);
	$form_person -> set_form_mail($form_mail);
	$form_person -> set_form_aadhar($form_aadhar);

	//Now we are going to make table of the given information using PHP

	// echo "<table>
	//     <tr>
	// 	<th>Form Submitted</th>
	// 	</tr>

	// 	<tr>
	// 	<td>Name</td>
	// 	<td>".$form_person->get_form_fname()." ".$frm_person->get_form_lname()." </td>
	// 	</tr>

	// 	<tr>
	// 	<td>Mobile Number</td>
	// 	<td>".$form_person->get_form_mobile()."</td>
	// 	</tr>

	// 	<tr>
	// 	<td>Mail Id</td>
	// 	<td>".$form_person->get_form_mail()."</td>
	// 	<tr>

	// 	<tr>
	// 	<td>Aadhar Number</td>
	// 	<td>".$form_person->get_form_aadhar."</td>
	// 	</tr>
	// 	</table>

	// 	<br> <br>
	// 	<h1>Thank you all For Giving Support </h1>";

	echo "Name:- $nbsp &nbsp &nbsp $nbsp".$form_person->get_form_fname()." ".$form_person->get_form_lname();
	echo "<br>";
	echo "Mobile Number :- $nbsp &nbsp &nbsp $nbsp".$form_person->get_form_mobile();
	echo "<br>";
	echo "Email Id:- $nbsp &nbsp &nbsp $nbsp".$form_person->get_form_mail();
	echo "<br>";
	echo "Aadhar Number:- $nbsp &nbsp &nbsp $nbsp".$form_person->get_form_aadhar();
	echo "<br>";

	//Now giving greeting to the user who has visited the webpage
	echo "<center><h1>Thank You for visiting my webpage and also for all support form your side</h1></center>";
	
?>