<hr>


<?php 
 $curpage = basename($_SERVER['PHP_SELF']);

?>

<nav>
  
   <ul>
     
  <li><a href="index.php" <?php if ($curpage == 'index.php') { echo 'class="active"'; } ?>>Home</a></li>
  <li><a href="about.php" <?php if ($curpage == 'about.php') { echo 'class="active"'; } ?>>About</a></li>
  <li><a href="work.php" <?php if ($curpage == 'work.php') { echo 'class="active"'; } ?>>Work</a></li>
  <li><a href="contact.php" <?php if ($curpage == 'contact.php') { echo 'class="active"'; } ?>>Contact</a></li>
  </ul>

</nav>


