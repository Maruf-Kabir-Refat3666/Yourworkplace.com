<?php
session_start();
if (isset($_SESSION["email"]))
{
}
else{
  header("location:admin_login.php");
}

?>



<!DOCTYPE html>
<html>
  <head>

    <title>Job News</title>
    <link rel="stylesheet" type="text/css" href="jobnews.css">
    </head>
    <body>

      <div class="login-box">


         <form>
           <br> Area : <br>
           <select>
           <option value ="division"  selected> Dhaka<br>
           <option value ="division" > Rangpur<br>
           <option value ="division" > Khulna<br>
           <option value ="division" > Rajshahi<br>
           <option value ="division" > Sylhet<br>
           <option value ="division" > Barishal<br>
           <option value ="division" > Chottrogram<br>

           </select>

             <br> Company : <br>
             <select>
             <option value ="company"  selected> Pran <br>
             <option value ="company" > Gazi Group<br>
             <option value ="company" > British Tobaco<br>
             <option value ="company" > BSRM<br>
             <option value ="company" > Shevron<br>
             <option value ="company" > Beximco<br>
             <option value ="company" > Square<br>

           </select>

           <br>Post : <br>
           <select>
           <option value ="post"  selected> Employee <br>
           <option value ="post" > CEO <br>
           <option value ="post" > Engineer <br>
           <option value ="post" > Security Guard <br>
           <option value ="post" > Chef<br>


         </select>

         <br> Qualification: <br>
       <select>
       <option value ="Qualification"  selected>SSC <br>
       <option value ="Qualification" > HSC <br>
       <option value ="Qualification" > Diploma <br>
       <option value ="Qualification" > B.Sc in Engineering <br>
       <option value ="Qualification" > Honours<br>
        <option value ="Qualification" > BBA <br>
          <option value ="Qualification" > Masters<br>
            <option value ="Qualification" > MBA<br>
              <option value ="Qualification" >PhD<br>

     </select>

     <br> Experience <br>
     <select>

     <option value ="Experience"  selected>1 year <br>
     <option value ="Experience" > 2 year <br>
     <option value ="Experience" > 3 year <br>
     <option value ="Experience" > 4 year <br>
     <option value ="Experience" > 5 year<br>
      <option value ="Experience" > 6 year <br>
        <option value ="Experience" > 7 year<br>
          <option value ="Experience" > 8 year<br>
            <option value ="Experience" >9 year<br>
     <option value ="Experience" >10 year<br>

     </select>


     <br> Expected Salary <br>
     <select>

     <option value ="Expected Salary"  selected>10000 TK <br>
     <option value ="Expected Salary" > 20000 TK <br>
     <option value ="Expected Salary" > 30000 TK <br>
     <option value ="Expected Salary" > 40000 TK <br>
     <option value ="Expected Salary" > 50000 TK<br>
      <option value ="Expected Salary" > 60000 TK <br>
        <option value ="Expected Salary" > 70000 TK<br>
          <option value ="Expected Salary" > 80000 TKr<br>
            <option value ="Expected Salary" >90000 TK<br>
     <option value ="Expected Salary" >100000 TK<br>

     </select>
     <br>

     <br>
           <a href="allnews_admin.php">
           <button type ="button" > Submit </button>
           </a>

         </form>

      </div>

      <p class="logout_admin">
      <a href="homepage.php" >
      <button type="button"class="btn1" name="Data">Home</button>
      </a>
      <a href="User_logout.php">
        <button type="button" class="btn1" name="Data">Logout</button>
      </a>
    </p>


    </body>
</html>
