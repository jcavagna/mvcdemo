<?php
Class Validation{

// Adding server side validation to check the form for empty data	
	public static function registrationValid($data){
		if($data['name'] == "" || $data['password'] == ""){
			return "Empty";
		}else{
			return "Good";
		}
	}

// Checking the submission of the login for empty data
	public static function loginValid($data){
		if($data['name'] == "" || $data['password'] == ""){
			return "Empty";
		}else{
			return "Good";
		}
	}
}
?>