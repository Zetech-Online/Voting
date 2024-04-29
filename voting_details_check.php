<?php

include("Databases/users_db.php");


 if($_SERVER["REQUEST_METHOD"] == "POST"){

    $reg_no = $_POST["reg-no"];
    $course = $_POST["course"];
    $level = $_POST["level"];
    $pass = $_POST["pass"];

        $sql = "SELECT * FROM users
        where Registration_No = '$reg_no' and User_Pass = '$pass'";

        $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);

                 if($user["User_Pass"] == $pass && $user["Registration_No"] == $reg_no){
                                    
                                 //    Select from voted_users

                         $sql = "SELECT * FROM voted_users where Reg_no = '$reg_no' and  User_pass = '$pass' and Course = '$course' ";
                          
                         $result = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows ($result)>0){                             
                                        header("location: invalid_voter.php");
                                        exit;

                                    }else{
                                        
                                                // If the user doesn't Exist
                                        $sql = "INSERT INTO voted_users  (Reg_no, Course, Study_level, User_pass)
                                                VALUES ('$reg_no', '$course', '$level', '$pass')";

                                        try{
                                        mysqli_query($conn, $sql);

                                        header("location: vote.php");
                                        
                                        session_start();
                                        $_SESSION["reg"] = $reg_no;

                                        }catch( mysqli_sql_exception){
                                            header("location: invalid_voter.php");
                                            exit;
                                        }

                             }
        
                          }

                       }else{
                        echo"Invalid Credentials";
                        exit;
                        }

                     } 

           ?>