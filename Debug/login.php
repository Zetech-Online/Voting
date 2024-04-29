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

               

                $sql = "SELECT Email, Pass FROM users WHERE Email = '$email'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($result);
                $user = mysqli_fetch_assoc($result);
                  

               if($row>0 ){                 
                  $user_email = $user["Email"];
                  $user_pass = password_verify($pass,$user["Pass"]);

                  if($user_email == $email && $user_pass == true){
                        echo"Login Successfully!";
                  }   
               }else if($row == null){
                echo"Invalid User";
               }
            
        }
?>