<?php
session_start();
if (isset($_SESSION["email"]))
{
  echo '<h3>login success,wllcome -'.$_SESSION["email"].'</h3>';

}
else{
  header("location:admin_login.php");
}



 ?>
<?php

$result="";
  $connect = mysqli_connect("localhost","root","","admin");
  if(isset($_POST['email'])){
    $key=$_POST['email'];

    $sql="SELECT * FROM post WHERE company_name ='$key' ";

  }


  $result =mysqli_query($connect,$sql);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title> Login page</title>
<link rel="stylesheet" type="text/css" href="adminprofile.css">
<body>
    <p class="post">
    <a href="com_post_data.php" >
  <button type="button"class="btn1" name="Data">post new jobs</button>
</a>
</p>
<div class="formbox">
      <form action ="" method="POST">
	   <p> User name</p>
		 <input type ="text"  name ="email" placeholder="email@.com"/>
		<input type="submit"  name="login" value="Login">
	</form>
</div>



  <table border="1">
    <thead>
      <tr>
          <th> No</th>
        <th>company Name</th>
        <th>Address</th>
        <th>Area</th>
        <th>Job Position</th>
        <th>Requirement</th>
        <th>Experience</th>
        <th>salary</th>
        <th>vacancy</th>
        <th>Last Date</th>
      </tr>
    </thead>
<?php
    while ($row = mysqli_fetch_object($result)){
?>
<tr>
  <td> <?php echo $row->pid ?></td>
  <td> <?php echo $row->company_name?></td>
  <td> <?php echo $row->address?></td>
  <td> <?php echo $row->area?></td>
  <td> <?php echo $row->job_position?></td>
  <td> <?php echo $row->requirement?></td>
  <td> <?php echo $row->experience?></td>
  <td> <?php echo $row->selary?></td>
  <td> <?php echo $row->vecancy?></td>
  <td> <?php echo $row->last_date?></td>
</tr>
<?php }?>
  </table>




</div>


</body>
</html>
