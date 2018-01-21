<?php
include '_includes/header_include.php'
 ?>
 <body>
   <?php $items = array("Brad", "My favorite color is: Green", "My favorite movie is: Gladiator",
    "My favorite book is: The Silmarillion", "My favorite website is: wh40k.lexicanum.org");



echo "<h1>" . $items[0] . "</h1>";
foreach (array_slice($items, 1) as $value){
  echo "<ul>";
  echo "<li>" . $value . "</li>";
  echo "</ul>";
}



?>
</body>
 <?php
include '_includes/footer_include.php'
  ?>
