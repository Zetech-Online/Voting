
<?php

include("databases/users_db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

                $reg_no = $_POST["reg-no"];
                $pass = $_POST["user-pass"];
                
                $sql = "SELECT * FROM users where Registration_No = '$reg_no' AND user_pass = '$pass'";
        
                $result = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($result);
            
          if($row>0){
               $user = mysqli_fetch_assoc($result);

                  if($reg_no == $user["Registration_No"] && $pass == $user["User_Pass"]){
                       
                    header("location: dashboard.php");
                    session_start();
                    $_SESSION["reg_no"] = $reg_no;         
                  }                
            }else{
                echo"Incorrect Credentials";
            }
               
        }
?>