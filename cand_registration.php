<!-- <?php
session_start();
if(!isset($_SESSION["reg_no"])){
    header("location: index.php");
 }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE - Zetech University Election Platform</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/vote.css">
    <!-- Fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/e22fa7651b.js" crossorigin="anonymous"></script> -->
</head>
<body>
    <div class="container">
        <div class="headerEl">
           <header>
             <div class="top">
                <div class="left">
                    <div class="logo-img">
                        <a href="#"><img src="Assets/images/logo2.png" alt="Zetech logo"></a>
                    </div>
                    <div class="logo-txt">
                        <h1>ZETECH <br> UNIVERSITY</h1>
                    </div>
                </div>

                <div class="mid">
                    <div class="title">
                        <h1>Zetech University Online Voting</h1>
                    </div>
                </div>

                <!--  -->
                <div class="right">
                    <div class="login-btn">
                        <a href="logout.php" name="logout" target="_self"><button>Logout</button></a>
                    </div>
                </div>
            </div>
            </header>

            <!-- End of header -->

            <!-- Navigation bar -->
            <nav>
                <div class="nav-el">
                    <ul>
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="voter_verify.php">Vote</a></li>
                        <li><a href="#">Results</a></li>
                        <li><a href="candidates.php">Leaders</a></li>
                        <li><a href="#">Chat</a></li>
                        <li class="log-out"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Navigation Bar -->
     </div>
     <!-- End of ContentEl -->

     <div class="container">
        <div class="headerEl">
           <header>
             <div class="top">
                <div class="left">
                    <div class="logo-img">
                        <a href="#"><img src="Assets/images/logo2.png" alt="Zetech logo"></a>
                    </div>
                    <div class="logo-txt">
                        <h1>ZETECH <br> UNIVERSITY</h1>
                    </div>
                </div>

                <div class="mid">
                    <div class="title">
                        <h1>Zetech University Online Voting</h1>
                    </div>
                </div>

                <div class="right">
                    <div class="login-btn">
                        <a href="logout.php" name="logout" target="_self"><button>Logout</button></a>
                    </div>
                </div>
            </div>
            </header>

            <!-- End of header -->

            <!-- Navigation bar -->
            <nav>
                <div class="nav-el">
                    <ul>
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="voter_verify.php">Vote</a></li>
                        <li><a href="#">Results</a></li>
                        <li><a href="candidates.php">Leaders</a></li>
                        <li><a href="#">Chat</a></li>
                        <li class="log-out"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Navigation Bar -->
     </div>
        
     <img src="Assets/images/hero.jpg" alt="">
        <!-- Main section -->
        <main>   
        <!--Section - 1 Start  -->
          <div class="content-el">
            <div class="content">      
               <div class="detail-el">
                 <p class="p1">Fill in Your Details to Register</p>

                 <!-- FORM Start -->
                       <form action="cand_reg_details_check.php" method="post">   
                        <!-- Section one -->
                            <div class="form-sec-1">
                                <div class="reg">
                                            <p>Registration Number</p>
                                            <input type="text" placeholder="Registration Number" name="reg-no" required>
                                    </div>

                            
                                      <div class="course">
                                            <p>Level</p>
                                            <input list="level" placeholder="Level of study" name="level" required>
                                            <datalist id="level">
                                                    <option value="Degree">
                                                    <option value="Diploma">
                                                    <option value="Certificate">
                                                    <option value="Artisan">
                                                </datalist>
                                        </div>
                             </div>

                            <!-- Section Two -->
                               <div class="form-sec-2">
                                    <div class="reg">
                                            <p>Position</p>
                                            <input type="text" placeholder="Position You're vying for.." name="position" required>
                                    </div>

                                    <div class="reg">
                                            <p>Password</p>
                                            <input type="password" placeholder="Enter Your Password" name="pass" required>
                                      </div>
                                  </div> 

                            <!-- Section Three -->
                                  <div class="form-sec-2">
                                        <div class="course">
                                            <p>Grade</p>
                                                <input list="grade" placeholder="Your recent Grade" name="grade" required>
                                                <datalist id="grade">
                                                        <option value="A">
                                                        <option value="B">
                                                        <option value="C">
                                                        <option value="D">
                                                    </datalist>
                                   </div>

                                  <div class="reg">
                                            <p>Result Slip</p>
                                            <input type="button"  class="slip" value="Click here" required>
                                           
                                  </div>
                             </div> 
                         </div> 

                         <!-- Submit -->
                        <div class="submit">
                                <input type="submit" value="Register" class="vote">
                        </div>
                     </form>
                     <!-- FORM end -->
                </div>
           </div>

        <!-- Footer - start-->
        <footer>
            <div class="contact footer-el">
               
                <ul> 
                    <h2>Socials</h2>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Youtube</a></li>
                    <li><a href="">Tiktok</a></li>
                </ul>
             </div>

              <div class="socials footer-el">                
                <ul>
                    <h2>Contact us</h2>
                    <li><a href="tel:+254727405667">WhatsApp</a></li>
                    <li><a href="tel:+254727405667">Phone</a></li>
                    <li><a href="">Messenger</a></li>
                    <li><a href="mailto:kipkoechishmaelbett@gmail.com">Email</a></li>
                </ul>
            </div>

            <div class="about footer-el">               
                  <ul>
                    <h2>About us</h2>
                    <li><a href="">Our Website</a></li>
                    <li><a href="">LinkedIn</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Github</a></li>
                 </ul>
            </div>  
            
            
            <div class="about footer-el">               
             
                <h2>Our Monthly Newsletter</h2>
                <input type="email" placeholder="Your personal Email">
                <button>Sign-Up</button>
          </div>    

            

            <!-- Copyright Start -->
               <div class="copyright">
                    <div class="terms">
                        <a href="">Terms and conditions</a>
                        <a href="">Privacy Policy</a>
                    </div>

                    <div class="copy">
                        <p>copyright © <span id="copy-y"></span></p>
                        <p>By Mr.Hope</p>
                    </div>
               </div>

             <!-- Copyright End -->
            </footer>
          <!-- Footer - End -->
         </main>
      <!-- Main End -->
</div>


<!-- +================================================================================================ -->

        <!-- Result slip check start -->
     <div class="results-el">
                <!-- Close btn -->
                <div class="close-slip" id="close-slip">
                    <span class="material-icons-sharp">close</span>
                </div> 

               <div class="header">
                        <h1>Zetech University</h1>
                       <p>Results Verification</p>
                       <hr>
                </div>

            <div class="results-body">
                <form action="results_verify.php" method="post">

                    <!-- Parent One -->
                     <div class="parent-1 parent">
                            <div class="sec-one sec">
                                <label for="">UNIT - 1</label>
                                <input type="text"  name="unit-1" placeholder="unit-1">
                                <label for="">Grade</label>
                                <input list="grade-1" placeholder="Grade" name="grade" required>
                                <datalist id="grade-1">
                                        <option value="A">
                                        <option value="B">
                                        <option value="C">
                                        <option value="D">
                                    </datalist>
                            </div>
                    
                            <div class="sec-two sec">
                                <label for="">UNIT-2</label>
                                <input type="text"  name="unit-2"  placeholder="unit-2">
                                <label for="">Grade</label>
                                <input list="grade-2" placeholder="Grade" name="grade" required>
                                <datalist id="grade-2">
                                        <option value="A">
                                        <option value="B">
                                        <option value="C">
                                        <option value="D">
                                    </datalist>
                            </div>   
                      </div>
                       
                  
                      <!-- Parent  Two -->

                      <div class="parent-2 parent">
                            <div class="sec-three sec">
                                <label for="">UNIT-3</label>
                                <input type="text"  name="unit-3"  placeholder="unit-3">
                                <label for="">Grade</label>
                                <input list="grade-3" placeholder="Grade" name="grade" required>
                                <datalist id="grade-3">
                                        <option value="A">
                                        <option value="B">
                                        <option value="C">
                                        <option value="D">
                                    </datalist>
                            </div>

                            <div class="sec-four sec">
                                <label for="">UNIT-4</label>
                                <input type="text"  name="unit-4" placeholder="unit-4">
                                <label for="">Grade</label>
                                <input list="grade-4" placeholder="Grade" name="grade" required>
                                <datalist id="grade-4">
                                        <option value="A">
                                        <option value="B">
                                        <option value="C">
                                        <option value="D">
                                    </datalist>
                            </div>
                      </div>

                      <input type="submit" value="Submit" class="submit-el">
                 </form>
            </div>

            <div class="footer">

            </div>
        </div>
        <!-- Result slip End -->
        
<!-- ============================================================================================ -->

    <!-- Javascript File paths -->
    <script type="text/javascript" src="Assets/js/script.js"></script>
    <script type="text/javascript" src="Assets/js/vote.js"></script>
</body>
</html>
