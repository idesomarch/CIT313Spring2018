<?php
function myLoad($class){
    include_once('classes/' .$class. '.class.php');
}

spl_autoload_register('myLoad');

class RegisteredUser{
  public $reg_use = 'true';

  public function __construct($level) {
    $this->user_level = $level;
  }
  public function __set($name,$value) {

  }
  public function __get($name) {

  }
  public function __destruct() {

  }
}

$regUse = new RegisteredUser('New User','Regular');
$user = $regUse->reg_use;

if(is_object($regUse)) {
  echo "The registered user's first name is: ".$_POST["fname"]."<br/>The registered user's last name is: ".$_POST["lname"]."<br/>The registered user's email address is: ".$_POST["email"]."<br/><hr/>Processing Complete";
}
else {
  echo "No user Found";
}


?>
