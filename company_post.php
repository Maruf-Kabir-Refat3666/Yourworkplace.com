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
$mysqli= new mysqli('localhost','root','','admin') or die(mysqli_error($mysqli));
if (isset($_POST['submit'])){
  $cname =$_POST['cname'];
  $address =$_POST['address'];
  $area =$_POST['area'];
  $job =$_POST['Job'];
  $req=$_POST['req'];
  $exp =$_POST['exp'];
  $salary =$_POST['salary'];
  $vac =$_POST['vac'];
  $ldate=$_POST['ldate'];


  $mysqli->query("INSERT INTO post(company_name , address , area ,job_position ,requirement,experience , selary ,vecancy ,last_date)
   VALUE ('$cname' ,'$address' ,'$area','$job','$req','$exp','$salary','$vac','$ldate')")
  or die($mysqli ->error);
    $result =$mysqli->query("SELECT * FROM post where company_name ='$cname' order by pid DESC ")    or die($mysqli ->error);
}
?>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="company_post_table.css">
</head>
<body>
  <a href="logout_admin.php">

    <div class="logout_admin">

    <button type="button" class="btn1" name="Data">Logout</button>
    </a>
    <a href="adminprofile.php" >
    <button type="button"class="btn1" name="Data">back</button>
    </div>
    </a>
<div >
  <table border="1">
    <thead>
      <tr>
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
    while ($row = $result ->fetch_assoc()):
?>
<tr>
  <td> <?php echo $row['company_name'];?></td>
  <td> <?php echo $row['address'];?></td>
  <td> <?php echo $row['area'];?></td>
  <td> <?php echo $row['job_position'];?></td>
  <td> <?php echo $row['requirement'];?></td>
  <td> <?php echo $row['experience'];?></td>
  <td> <?php echo $row['selary'];?></td>
  <td> <?php echo $row['vecancy'];?></td>
  <td> <?php echo $row['last_date'];?></td>
</tr>
<?php endwhile;?>
  </table>




</div>


</body>
</html>
