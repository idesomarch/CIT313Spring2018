
<?php
include('views/elements/header.php');?>

<?php
if( is_array($user) ) {
	extract($user);}?>

<div class="container">
	<div class="page-header">

<h1>Member <?php echo $user[uID];?></h1>
        <p>Email: <?php echo $user['email'];?></p>
  </div>
	<?php
	if($u->isAdmin()) {?>
<button>Delete</button>
<button>Approve</button>
<?php } ?>


</div>

<?php include('views/elements/footer.php');?>
