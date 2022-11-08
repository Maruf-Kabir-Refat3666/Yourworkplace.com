
<?php
  $name =$_POST['name'];
  $email =$_POST['email'];
  $number =$_POST['num'];
  $password =$_POST['pass'];
  $conn =mysqli_connect('localhost','root','','admin');
  $sql="INSERT INTO user (full_name , email ,phone, password) VALUE ('$name' ,'$email' ,'$number','$password')";
  if(mysqli_query($conn, $sql)){
    header("Location: user_login.php");
    echo 'insert sucess';
  }
  else {
    echo "not insert";
  }



?>
