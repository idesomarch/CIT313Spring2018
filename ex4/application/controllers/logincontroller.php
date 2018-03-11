<?php

class LoginController extends Controller{

   //public function add($num1 = 0,$num2 = 0,$num3 = 0){
		//$sum = $num1+$num2+$num3;
	   //$this->set('numbers',$sum);
   //}
   protected $userObject;

   public function do_login() {
	   // handles login

		 $user->userObject = new Users();

		 if($this->userObject->checkUser($_POST['email'],$_POST['password'])){
			 echo "good user";
		 }
		 else {
			 echo "bad user";
		 }
   }

}
