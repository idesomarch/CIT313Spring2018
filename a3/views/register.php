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
				<legend>Register Today!</legend>
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name:</label>
          <input type="text" name="first_name" id="first_name" required="" value="">
					<label>Last Name</label>
          <input type="text" name="last_name" id="last_name" required="" value="">
					<label>E-mail Address:</label>
          <input type="email" name="email" id="email" required="" value="">
					<label>Password:</label>
					<input type="password" name="password" id="password" required="password" value="">
          <input type="hidden" name="uID" value="<?php// echo $uID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
        </form>


      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
