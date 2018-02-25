<?php
class user extends model {

  function getName() {

      return array (
          'userID'=>'bhammer',
          'firstname' => 'Brad',
          'lastname' => 'Hammer',
          'email' => 'bhammer@gmail.com',
          'role' => 'User'
      );
  }

  public function __construct() {
    parent::__construct();
  }
  public function __set($name,$value) {
    $this->$name = $value;
    return;
  }
  public function __get($name) {
    return $this->$name;
  }
  public function __destruct() {

  }

}

 ?>
