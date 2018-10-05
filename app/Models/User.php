<?php

namespace App\Models;

class User{

	public $user_name;

	public $password;

    public $email;

	public function setUserName($userName){
		$this->user_name = trim($userName);
	}

	public function getUserName(){
		return $this->user_name;
	}

	public function setPassword($password){
		$this->password = trim($password);
	}

	public function getPassword(){
		return $this->password;
	}

	public function getLogin(){
		return "$this->user_name . $this->password";
	}

	public function setEmail($email){
		$this->email = trim($email);
	}

	public function getEmail(){
		return $this->email;
	}

    public function allHasValue(){
    	return [
    		'username'=>$this->getUserName(),
    		'password'=>$this->getPassword(),
    		'email'=>$this->getEmail(),
    	];
    }


}
