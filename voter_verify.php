<?php
session_start();
if(!isset($_SESSION["reg_no"])){
    header("location: index.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE - Zetech University Election Platform</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/vote.css">
    <link rel="stylesheet" href="Assets/css/context.css">
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
                        <li><a href="news.php">News</a></li>
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
                        <a href="dashboard.php"><img src="Assets/images/logo2.png" alt="Zetech logo"></a>
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
                        <li><a href="news.php">News</a></li>
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
    
                    <form action="voting_details_check.php" method="post">
                        
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
                               

                    <div class="form-sec-2">

                            <div class="reg">
                                    <p>Course</p>
                                    <input type="text" placeholder="Enter Your Course" name="course" required>
                               </div>


                              <div class="reg">
                                    <p>Password</p>
                                    <input type="password" placeholder="Enter Your Password" name="pass" required>
                              </div>
                    </div>                     
                        </div> 
                        <div class="submit">
                    <input type="submit" value="Vote" class="vote">
                </div>
            </form>
        </div>
    </div>

          <!-- <div class="content-el">
                <div class="content">
                    
                
                </div>
          </div> -->
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
        </footer>
    </main>
</div>


<!-- Context Menu Start -->
<div class="context-el">

            <div class="close-context" id="close-menu">
            <span class="material-icons-sharp">close</span>
            </div> 

            <div class="context-menu">
            <ul>
                    <li><a href="">Resources</a></li>
                    <li><a href="candidates.php">Leaders</a></li>
                    <li><a href="">Semester schedule</a></li>
                    <li><a href="vote.php">Vote</a></li>
                    <li><a href="">Community</a></li>

                    <!-- context news start -->     
                    <li>
                        <details name="" id="news">
                            <summary id="News">News</summary>
                                <ul>
                                    <li><a href="">Academics</a></li>
                                    <li><a href="">Sports</a></li>
                                    <li><a href="">Innovation</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="news.php">Other</a></li>
                                </ul>
                        </details>
                    </li>
            <!-- Context news end -->
    </ul>
</div>
</div>
<!-- Context Menu End -->



    <!-- Javascript -->
    <script type="text/javascript" src="Assets/js/script.js"></script>
    <script type="text/javascript" src="Assets/js/context.js"></script>
</body>
</html>
