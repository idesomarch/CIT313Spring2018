<?php

class RegisterController extends Controller{

	public $usersObject;

	public function defaultTask(){

		$this->usersObject = new Users();
		$this->set('task', 'add');
	}

	public function add(){

			$this->usersObject = new Users();

			$data = array('first_name'=>$_POST['userfirst_name'], 'last_name'=>$_POST['userlast_name'],'email'=>$_POST['userEmail'], 'password'=>$_POST['userPassword']);


			$result = $this->usersObject->addUser($data);

			$this->set('userMessage', $result);


	}


}
