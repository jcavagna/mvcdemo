<?php
require_once "models/views.php";
require "models/validation.php";
require "models/users.php";
require "models/db.php";

session_start();

$user = new Users();


// This is to check if there is an action to be had in the URI
if(isset($_GET['v'])){
	$action = $_GET['v'];
}else{
	$action = '';
}


// Loading of the default head on every page
View::getView('views/incs/header.php');
View::getView('views/incs/nav.php');


// These are the modular views and actions that can be taken by the page
// Homepage
if($action == 'homepage' || $action == ''){
	View::getView("views/homepage.php");
}

// Page 1
elseif($action == 'pageone'){
	View::getView("views/pageone.php");
}

// Register
elseif($action == 'formtime'){
	View::getView("views/form.php", "");
}elseif($action == 'submitform'){
	$data['name'] = $_POST['name'];
	$data['password'] = $_POST['password'];
	$check = Validation::registrationValid($data);
	if($check == "Good"){
		$user->createUser($db, $data['name'], $data['password']);
		$return = $data;
		View::getView("views/hellouser.php", $return);
	}elseif($check == "Empty"){
		$return = "All fields required";
		View::getView("views/form.php", $return);
	}else{
		
	}
}

//Login
elseif($action == 'loginform'){
	View::getView("views/login.php", "");
}elseif($action == 'login'){
		$data['name'] = $_POST['name'];
		$data['password'] = $_POST['password'];
		$check = Validation::loginValid($data);
	if($check == "Good"){
		$isGoodUser = $user->checkPassword($db, $data['name'], $data['password']);
		if($isGoodUser){
			$return = $data;
			View::getView("views/hellouser.php", $return);
		}else{
			$return = "Username / Password Incorrect";
			View::getView("views/login.php", $return);
		}
	}elseif($check == "Empty"){
		$return = "All fields required";
		View::getView("views/login.php", $return);
	}
}else{
	View::getView('views/utoh.php');
}


// This closes the page out with the footer
View::getView('views/incs/footer.php');

?>