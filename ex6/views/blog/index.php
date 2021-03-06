
<?php include('views/elements/header.php');?>

<?php if( is_array($posts) ) {?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>

        <?php foreach($posts as $p){?>
            <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
            <p><?php echo $p['content'];?></p>
            <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
        <?php }?>
    </div>

<?php }?>


<?php include('views/elements/footer.php');?>
