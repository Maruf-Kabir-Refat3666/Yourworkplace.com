<?php
session_start();
if (isset($_SESSION["email"]))
{
  echo '<h3>login success,wllcome -'.$_SESSION["email"].'</h3>';
  echo '<br /><br/><a href="user_logout.php">logout</a>';
}
else{
  header("location:user_login.php");
}



 ?>
 <a href="hole_database.php" >
 <div >
 <button type="button" name="data">All news</button>
 </div>
 </a>
