<?php
class Portfolio extends CI_Controller {

// public function __construct() {
// parent ::__construct();
// //
// echo "this is the initialization!!<br>";
// }



public function index() {

$data["message"] = "";


$this->load->view("index_home", $data);


}




// for sending email to me!

public function send_email() {

	$this->load->library("form_validation"); //C:\xampp\htdocs\CI\system\libraries

	$this->form_validation->set_rules("fullname", "Full Name", "required|alpha");
	$this->form_validation->set_rules("email", "Email Address", "required|valid_email");
	$this->form_validation->set_rules("message", "Message", "required");  

	
  
  	/////////////////////////////////////////////
	if ($this->form_validation->run() == FALSE) {

		$data["message"] = ""; // kung failed kay hndi valid ma butang empty message

		$this->load->view("index_home", $data);

	} else { ///////////////////////////////////////else

		$data["message"] = "Email Succesfully Sent!";

		$this->load->library("email");

		$this->email->from(set_value("email"), set_value("fullname") ); //
		$this->email->to("ronllarenas@yahoo.com");
		$this->email->subject("Message from Portfolio");
		$this->email->message(set_value("message"));

		$this->email->send();



	/////
		$this->load->view("index_home", $data); // mamessage 	$data["message"] = "Email Succesfully Sent!";
	}
	////////////////////////////////////////////


}

// public function index() {


// $this->home();


// }



// public function home() {


// $this-> load->view("header");
// $this-> load->view("content");
// $this-> load->view("footer");


// }


// public function one($p1, $p2) {

// echo "this is una<br>";
// echo "these are: $p1, $p2 ";

// }

// public function two() {

// echo "this is duwa<br>";


// }



 }