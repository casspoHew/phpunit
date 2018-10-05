<?php
 
 class UserTest extends \PHPUnit_Framework_TestCase
 {

 	public function testThatGetUserName(){
 		
 		$user = new \App\Models\User;

 		$user->setUserName('Billy');

 		$this->assertEquals($user->getUserName(),'Billy');
 	}

 	public function testThatGetPassword(){
 		
 		$user = new \App\Models\User;

 		$user->setPassword('123');

 		$this->assertEquals($user->getPassword(),'123');
 	}

 	public function testLoginisTrue(){
 		$user = new \App\Models\User;

 		$user->setUserName('Billy');
 		$user->setPassword('123');

 		$this->assertEquals($user->getLogin(),'');
 	}

 	public function testEmailAddressisValid(){
		$user = new \App\Models\User;
		$user->setEmail('cassie@yahoo.com');

		$this->assertEquals($user->getEmail(),'cassie@yahoo.com');
	}

	public function testUserPswEmailHasValue(){
		$user = new \App\Models\User;

		$user->setUserName('cassie');
		$user->setPassword('123');
		$user->setEmail('cassie@yahoo.com');

		$hasValue = $user->allHasValue();

		$this->assertArrayHasKey(hasValue['username'], 'cassie');
		$this->assertArrayHasKey(hasValue['password'], '123');
		$this->assertArrayHasKey(hasValue['email'], 'cassie@yahoo.com');
	}
 }