<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <link rel="stylesheet" href="Assets/Css/login.css">
</head>

<body>
  
  <div class="container" id="container">
         
    <!-- Sign-up -->

    <div class="form-container sign-up-container"> 
      
      <form action="Sign_up.php" method="post" novalidate>
             <div><p id="error"></p></div>
              <h1>Create Account</h1>
              <div class="progress-container">
                  <a href="#" class="social step-1"><h1>1</h1></i></a>
                  <a href="#" class="social step-2" ><h1>2</h1></i></a>
                  <a href="#" class="social step-3"><h1>3</h1></i></a>
              </div>

              <span>or use your email for registration</span>
                <!--  Sign up Sec-1 -->
              <div class="section-1">
                  <input type="text" placeholder="First Name" name="f-name"  required/>
                  <input type="text" placeholder="Last Name"  name="l-name"  required/>
                  <input type="text" placeholder="Registration Number"  name="reg-no"  required/>
                  <input  type="button" id="next-1" value="Next" name="next-1">
              </div>

              <!--  Sign up Sec-2 -->
              <div class="section-2">
               <input name="level" list="level" placeholder="Level of study" required>
                                   <datalist id="level">
                                         <option value="Degree">
                                         <option value="Diploma">
                                         <option value="Certificate">
                                         <option value="Artisan">
                                    </datalist>
                  <input type="text" placeholder="Course" name="course" required/>
                  <input name="year" list="year" placeholder="Year of Study" required>
                                   <datalist id="year">
                                         <option value="1st Year">
                                         <option value="2nd Year">
                                         <option value="3rd Year">
                                         <option value="4th Year">
                                  </datalist>
                  <input type="button" id="next-2" value="Next" name="next-1">
                  <input type="button" id="back-1" value="Back">                          
              </div>

              <!--  Sign up Sec-3 -->
              <div class="section-3">
                  <input type="email" placeholder="Student Email" name="email" required/>
                  <input type="password" placeholder="Create Password" name="pass1" required/>
                  <input type="password" placeholder="Confirm Password"name="pass2"   required/>
                  <input type="submit" name="register" id="sign-up" value="Register">
                  <input type="button" value="Back" id="back-2">
              </div>
        </form>
     </div>

    <!-- Sign in -->
         <div class="form-container sign-in-container">
            <form action="login.php" method="post" novalidate>
                  <h1>Sign in</h1>
                  <div class="progress-container">
                      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                      <span>or use your account</span>
                          <input type="text" placeholder="Registration Number" name="reg-no" required autocomplete="on"/>
                          <input type="password" placeholder="Password" name="user-pass" required/>
                           <a href="reset.php">Forgot your password?</a>
                        <input type="submit" name="sign-in" value="Sign In" id="sign-in">     
            </form>
         </div>
       <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login with your personal info</p>
                  <button class="ghost" id="signIn">Sign In</button>
               </div>
                <div class="overlay-panel overlay-right">
                  <h1>Hello, Student</h1>
                  <p>Fill in Your details and Explore Our New Voting Platform</p>
                  <button class="ghost" id="signUp">Sign Up</button>
              </div>
         </div>
       </div>
    </div>
  <script type="text/javascript" src="Assets/Js/login.js"></script>
</body>
</html>


