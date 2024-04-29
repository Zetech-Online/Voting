<?php

  include('Databases/users_db.php');

  if($_SERVER["REQUEST_METHOD"] == "POST"){

          $reg_no = $_POST['reg-no'];
          $position = $_POST['position'];
          $grade = $_POST['grade'];
          $level = $_POST['level'];
          $pass = $_POST['pass'];
           

          // Check the user Grade whether he/she qualify for candidateship
         if($grade != 'A' && $grade != 'B' && $grade != 'C'){
          echo"Sorry You do not qualify";
         }else{

          // Check the details from the original database whether the user exist
          $sql = "SELECT * FROM voted_users where Reg_no = '$reg_no' and  User_pass = '$pass'";

          $result = mysqli_query($conn,$sql);
          $row = mysqli_num_rows($result);

          if($row>0){ 

                //Check from the candidates table
         
                $sql = "INSERT into candidates(Registration_No, Level_Study, Position, Grade)
                                      VALUES(' $reg_no', '$level', '$position', '$grade')";
            
             try{
              mysqli_query($conn,$sql);
              echo"Registered Successfully";
             }
             catch(mysqli_sql_exception){
              echo"The user is Already Registered";
             }
                            
          }else{
            echo"Invalid Credentials";
       }
     }
 }

mysqli_close($conn);
?>