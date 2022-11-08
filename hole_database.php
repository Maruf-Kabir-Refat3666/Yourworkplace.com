
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
 <!DOCTYPE html>
<html>
<head>
</head>
<body>
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
$conn= mysqli_connect("localhost","root","","admin");
if ($conn-> connect_error){
  die("Connection failed:".$conn-> connect_error);
}
$sql ="SELECT * FROM post ORDER by last_date,pid DESC";
$result=$conn-> query($sql);
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

</body>
</html>
