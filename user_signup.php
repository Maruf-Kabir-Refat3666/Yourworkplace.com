<!DOCTYPE html>
<html>
 <head>
   <title> user_pannel </title>
</head>
<body>


   <form action="user_store_reg.php" method="POST">
     <div >
     <label> Name </label>
     <input type="text" name="name" value="user_name">
   </div>
     <div>
      <label> Email </label>
     <input type="text" name="email" value="email">
   </div>
   <div >
    <label> Phone</label>
   <input type="number" name="num" value="num">
 </div>
     <div >
      <label> Password </label>
     <input type="password" name="pass" value="pass">
   </div>
   <div >
     <button type="submit" name="save">signup</button>
   </div>
  </form>
  <div >
    <a href="user_login.php">
    <button type="reset" name="reset">login</button>
  </a>
  </div>
</body>
</html>
