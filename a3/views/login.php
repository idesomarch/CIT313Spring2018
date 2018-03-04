<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> Login </h1>
   <?php echo $numbers ?>
  </div>
	<div class="row">
      <div>
				<form action="/action_page.php">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
<?php include('elements/footer.php');?>
