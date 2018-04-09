<?php
require_once('application/config.php');
include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title;?></h1>

  </div>
	
		<h4><a href="<?php echo $link;?>"><?php echo $item;?></a> (<?php echo $pubDate;?>)</h4>
		<p><?php echo $description ?></p>

</div>

<?php include('views/elements/footer.php');?>
