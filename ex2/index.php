<?php
include_once("_includes/config.php");
include_once("classes/user.class.php");
include_once("classes/admin.class.php");
include_once("classes/registered.class.php");

$registered = new Registered();
$admin = new Admin();

$registered->user_level = 'Regular User';
$registered->user_id = 'bhammer';
$registered->user_type = '1';
$registered->first_name = 'Brad';
$registered->last_name = 'Hammer';
$registered->email_address = 'bhammer@gmail.com';

$admin->user_level = 'Administrator';
$admin->user_id = 'bdhammer';
$admin->user_type = '2';
$admin->first_name = 'Brad';
$admin->last_name = 'Hammer';
$admin->email_address = 'bdhammer@gmail.com';


echo "User level: ".$registered->user_level."<br/>"."Registered User ID: ".$registered->user_id."<br/>"."Registered User Type: ".$registered->user_type."<br/>"."Registered First Name: ".$registered->first_name."<br/>"."Registered Last Name: ".$registered->last_name."<br/>"."Registered Email: ".$registered->email_address;
echo "<hr>";
echo "User level: ".$admin->user_level."<br/>"."Admin User ID: ".$admin->user_id."<br/>"."Admin User Type: ".$admin->user_type."<br/>"."Admin First Name: ".$admin->first_name."<br/>"."Admin Last Name: ".$admin->last_name."<br/>"."Admin Email: ".$admin->email_address."<br/>";


 ?>
