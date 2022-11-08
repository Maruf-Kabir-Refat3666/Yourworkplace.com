<!DOCTYPE html>
<html>
 <head>
   <title> admin_pannel </title>
</head>
<body>
  <?php require_once 'admin_reg.php';?>
  <?php
  $mysqli= new mysqli('localhost','root','','admin') or die(mysqli_error($mysqli));
  if (isset($_POST['save'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['pass'];
    $mysqli->query("INSERT INTO reg (name , email , password) VALUE ('$name' ,'$email' ,'$password')")
    or die($mysqli ->error);
  }

?>
   <form action="admin_reg.php" method="POST">
     <div >
     <label> Name </label>
     <input type="text" name="name" value="company_name">
   </div>
     <div>
      <label> Email </label>
     <input type="text" name="email" value="email">
   </div>
     <div >
      <label> Password </label>
     <input type="password" name="pass" value="pass">
   </div>
   <div >
     <button type="submit" name="save">SAVE</button>
   </div>
  </form>
  <div >
    <a href="admin_login.php">
    <button type="reset" name="reset">login</button>
  </a>
  </div>
</body>
</html>
