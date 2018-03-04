<?php include('elements/admin_header.php');?>
<?php $userMessage = 'User Added.'?>
<div class="container">
	<div class="page-header">
   <h1> Register </h1>
  </div>
  <?php if($userMessage){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $userMessage?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span4">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name:</label>
          <input type="text" name="userfirst_name" id="first_name" required="first_name" value="<?php echo $first_name?>">
					<label>Last Name</label>
          <input type="text" name="userlast_name" id="last_name" required="last_name" value="<?php echo $last_name?>">
					<label>E-mail Address:</label>
          <input type="email" name="userEmail" id="email" required="email" value="<?php echo $email?>">
					<label>Password:</label>
					<input type="password" name="userPassword" id="password" required="password" value="<?php echo $password?>">
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
        </form>


      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
