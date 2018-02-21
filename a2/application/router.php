<?php
    //require_once 'application/load.class.php';
    //require_once 'application/model.class.php';
    //require_once 'application/controller.class.php';
    function myLoad($class) {
      include_once('application/controllers/'.strtolower($class).'.class.php');
      include_once('application/models/'.strtolower($class).'.class.php');
      include_once('application/'.strtolower($class).'.class.php');

     }
spl_autoload_register('myLoad');

    new Controller();

?>
