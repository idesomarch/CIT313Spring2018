<?php

class MembershipController extends Controller{

	public $userObject;


   	public function view($uID){

		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);

   	}

	public function defaultTask(){

		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
	 $this->set('users',$users);

	}


}
