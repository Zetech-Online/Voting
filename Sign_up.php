 <?php
        include("Databases/users_db.php");


        // Section 1 Validation

          if (empty($_POST["f-name"])) {
            die("First Name is Recquired");
            }


            if (empty($_POST["l-name"])) {
            die("Last Name is Recquired");
          }


            if (empty($_POST["reg-no"])) {
            die("Registration number is Recquired!");
          }
        

        /* end of sec-1*/ 
        
            if (empty($_POST["level"])) {
              die("Please Select the level of Study!");

            }

            if (empty($_POST["email"])) {
              die("Please Enter Your student Email!");

            }

            if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
              die("Valid Email is Required!");

            }

        //  Password Validation

        if(strlen($_POST["pass1"])<8){
          die("Password Must be atleast Eight characters");
        }

        if(!preg_match("/[a-z]/i", $_POST["pass1"])){
          die("Password Must Contain atleast one letter");
        }


        if(!preg_match("/[0-9]/i", $_POST["pass1"])){
          die("Password Must Contain atleast one  Number!");
        }


  // Password confirmation

   if( $_POST["pass1"] !== $_POST["pass2"]){
       die("Passwords Must Match");
   }


  //  Password Encription (hash)
  $user_pass = password_hash($_POST["pass1"], PASSWORD_DEFAULT);

    // Form data submition

        $first_Name = $_POST["f-name"];
        $last_Name = $_POST["l-name"];
        $reg_No = $_POST["reg-no"];
        $level = $_POST["level"];
        $course = $_POST["course"];
        $year = $_POST["year"];
        $email = $_POST["email"];
        $pass = $_POST["pass1"];


        try{
            $sql = "INSERT INTO users (First_Name, Last_Name, Registration_No, Level_Study, Course, Year_Study, Student_Email, User_Pass)
            VALUES ('$first_Name', '$last_Name', '$reg_No', ' $level', '$course', ' $year', ' $email', ' $pass')";

            mysqli_query($conn, $sql);

            mysqli_close($conn);

            header("location: reg_sucess.php");
            
            session_start();
            $_SESSION["registered"] = $pass;

        }catch(mysqli_sql_exception){
           die("User already Exist");
        }

?>