<?php

include("debug_DB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
</head>
<body>
   <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
      <label for="">Enter Email</label>
   <input type="email" placeholder="Enter email" name="email"><br><br>
   <label for="">Password</label>
   <input type="password" placeholder="Enter password" name="pass"><br><br>
   <input type="submit" value="Register" name="submit"> <br><br>
   </form>
</body>
</html>

<?php
 

     if($_SERVER["REQUEST_METHOD"] == "POST"){


      $email = $_POST["email"];
      $pass = $_POST["pass"];

      $hash = password_hash($pass, PASSWORD_DEFAULT);

 
      try{
           $sql ="INSERT INTO users (email, Pass)
           VALUES ('$email', '$hash')"; 
           mysqli_query($conn,$sql);

           echo"User Registered Successfully!";
           
           exit;

      }
      catch( mysqli_sql_exception){
         echo"User already Exist";
      }
     
   }
     mysqli_close($conn);
?>