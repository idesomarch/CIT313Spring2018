<?php
include '_includes/config.php'
    //require_once 'application/load.class.php';
    //require_once 'application/model.class.php';
    //require_once 'application/controller.class.php';
  //  function myLoad($class) {
    //  include_once('application/controllers/'.strtolower($class).'.class.php');
    //  include_once('application/models/'.strtolower($class).'.class.php');
    //  include_once('application/'.strtolower($class).'.class.php');

function __autoload($class_name) {
        if (file_exists('application/controllers' . $class_name . '.class.php')) {
            require_once ($directory . $class_name . '.class.php');
            return;
        }
    }
}
spl_autoload_register('myLoad');

    new Controller();

?>
