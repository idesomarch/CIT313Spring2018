<?php
function myLoad($class){
    include_once('classes/' .$class. '.class.php');
}

spl_autoload_register('myLoad');

$registered = new registered('bhammer','Regular User');
$admin = new admin('bdhammer','Administrator');


$registered->first_name = 'Brad';
$registered->last_name = 'Hammer';
$registered->email_address = 'bhammer@gmail.com';

$admin->first_name = 'Brad';
$admin->last_name = 'Hammer';
$admin->email_address = 'bdhammer@gmail.com';

 ?>

 <!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
<?php
$testIt = admin::userCheck(5,4);
echo "Before you fill out this form, lets do some math: $testIt";
 ?>
</p>
<form id="form1" name="form1" method="post" action="results.php">
<table width="500" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td width="169">First Name:</td>
    <td width="321"><label for="fname"></label>
      <input type="text" name="fname" id="fname" /></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname" id="lname" /></td>
  </tr>
  <tr>
    <td>Email Address:</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="submit" id="submit" value="Register" /></td>
  </tr>
</table>
</form>

</body>
</html>
