<?php

Class Users{

// Sample CRUD actions that can be added to the controller

// Get all users
	public function getUsers($db){
		
		$sql = "select * from Users";

		$st = $db->prepare($sql);

		$st->execute();

		$obj = $st->fetchAll();

		return $obj;
	}

// Get one User with ID
	public function getUser($db, $uid = 0){

		$sql = "select * from Users where user_id = :uid";

		$st = $db->prepare($sql);

		$st->execute(array(":uid"=>$uid));

		$obj = $st->fetchAll();

		return $obj;
	}

// Update one user by ID
	public function updateUser($db, $uid=0, $uname='', $upass=''){

		$sql = "update Users set user_name = :uname, user_pass = md5(:upass) where user_id = :uid";

		$st = $db->prepare($sql);

		$st->execute(array(":uid"=>$uid, ":uname"=>$uname, ":upass"=>$upass));

	}

// Delete one user by ID
	public function deleteUser($db, $uid = 0){

		$sql = "delete from Users where user_id = :uid";

		$st = $db->prepare($sql);

		$st->execute(array(":uid"=>$uid));
	}

// Create User
	public function createUser($db, $uname='', $upass='', $avatar){

		$sql = "insert into Users (user_name, user_pass) values (:uname, md5(:upass))";

		$st = $db->prepare($sql);

		$st->execute(array(":uname"=>$uname, ":upass"=>$upass, ":avatar"=> $avatar));
	}

// Find if user is valid by checking if an entry exists with that username/password combo
	public function checkPassword($db, $username='', $password=''){

		$sql = "select * from Users where user_name = :username && user_pass = md5(:password)";

		$st = $db->prepare($sql);

		$st->execute(array(":username"=>$username, ":password"=>$password));

		$isTrue = $st->rowCount();

		if($isTrue == 0){
			return false;
		}else{
			return true;
		}
	}
}

?>