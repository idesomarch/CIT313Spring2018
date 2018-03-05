<?php

class MembershipController extends Controller{

	public $usersObject;
  public $users;

   	public function view($uID){

		$this->usersObject = new Users();
		$users = $this->usersObject->getUsers($uID);
	  	$this->set('users',$users);

   	}

	public function defaultTask(){

		$this->usersObject = new Users();
		$users = $this->usersObject->getAllUsers($uID);
		$this->set('title', 'The Members View');
	 $this->set('users',$users);

	}


}
