
<form  id="comment_form" action="<?php echo BASE_URL;?>blog/<?php echo $task?>" method="post">

<input type="text" id="uID" name="uID" placeholder="Username"><br>
<textarea rows="4" cols="50" id="commentText" name="commentText" form="usrform"> Enter text here...</textarea>

<br>
<input id="date" name="date" type="date" placeholder="Enter Date"><br>
<br>
  <button class="primary">submit</button>
  <?php if($u->isAdmin()) {?>
  <button class="secondary">delete</button>
<?php }?>
</form>
