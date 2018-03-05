<?php

class RegisterController extends Controller{

	public $userObject;

	public function defaultTask(){

		$this->usersObject = new Users();
		$this->set('task', 'add');
	}

	public function add(){

			$this->usersObject = new Users();

			$data = array('email'=>$_POST['email'], 'password'=>$_POST['password'], 'first_name'=>$_POST['first_name'], 'last_name'=>$_POST['last_name']);


			$result = $this->usersObject->addUser($data);

			$this->set('userMessage', $result);


	}


}
