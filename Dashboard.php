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
    <title>Dashboard - Zetech University Election Platform</title>

    <!-- Stylesheet start-->
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/assist.css">
    <link rel="stylesheet" href="Assets/css/context.css">
    <!-- Stylesheet end -->


    <!-- Fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/e22fa7651b.js" crossorigin="anonymous"></script> -->


    <!-- material icon -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    <!-- End of material icons -->


</head>
<body>
<div class="container">
   <div class="headerEl">
       <!--Start of Header-->
           <header>
               <!-- Start of Top -->
                 <div class="top">

                        <!-- Top-left start -->
                        <div class="left">
                                <div class="logo-img">
                                    <a href="#"><img src="Assets/images/logo2.png" alt="Zetech logo"></a>
                                </div>

                                <div class="logo-txt">
                                    <h1>ZETECH <br> UNIVERSITY</h1>
                                </div>        
                            </div>
                        <!--top-left-end-->

                        <!--Mid-start-->
                            <div class="mid">
                                <div class="title">
                                    <h1>Zetech University Online Voting</h1>
                                </div>
                            </div>
                        <!--Mid-end-->

                        <!-- Right-start -->
                        <div class="right">
                            <div class="login-btn">
                                <a href="logout.php" name="logout" target="_self"><button>Logout</button></a>
                            </div>
                        </div>
                        <!-- Right-End -->
                   </div>
              <!--End-of-Top -->
           </header>
     <!-- End of header -->

 <!-- ************************************************************* -->

     <!-- Navigation bar  start -->
           <nav>
                <div class="nav-el">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Vote</a></li>
                        <li><a href="#">Results</a></li>
                        <li><a href="candidates.php">Leaders</a></li>
                        <li><a href="news.php">Chat</a></li>
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

    <!--Mobile  Navigation bar  Start-->
            <nav>
                <div class="nav-el">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="voter_verify.php">Vote</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="candidates.php">Leaders</a></li>
                        <li><a href="news.php">News</a></li>
                        <li class="log-out"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
      <!-- Mobile Navigation Bar End-->
</div>
        

     <img src="Assets/images/hero.jpg" alt="">


<!-- Main section -->
        <main>   
        <!--Section - 1 Start  -->
          <div class="content-el">
              <div class="content">
                            <div class="txt">
                                <p>Next Election In:</p>
                            </div>

                    <!-- Counter Start -->
                      <div class="counter">

                            <div class="days time">
                                <h1 id="days"></h1><span>Days</span>
                            </div>

                            <div class="hrs">
                                <h1 id="hours"></h1><span>Hours</span>
                            </div>

                            <div class="mins">
                                <h1 id="minutes"></h1><span>Mins</span>
                            </div>

                            <div class="secs">
                                <h1 id="seconds"></h1><span>secs</span>
                            </div>
                      </div>
                      <!-- Counter End -->

                        <div class="content-btn">
                            <a href=""><button>Outcomes</button></a>
                            <a href="#"><button>Vote</button></a>
                        </div>
               </div>
          </div>


      <!-- Section 2 start -->
       <div class="content-el Main-2">
                <div class="content">

                       <h2>About</h2>
                       <div class="about-el">                      
                            <div class="founder about">                       
                                    <h3>Founder</h3>
                                        <p><q>I am Ismael Bett, known by the name Mr.Hope. I saw how elections were
                                            conducted, and i was like Why Do we have to do things the old way?,
                                            When we can just write some lines of code and get everything automated.
                                        </q></p>
                                </div>


                                <div class="docs about">
                                    <h3>How it Works</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                        Reiciendis iusto natus mollitia quibusdam animi adipisci aspernatur!</p>
                                </div>
                      </div>
                </div>
            </div>
        <!-- Section - 2 - end -->


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


<!-- Chat start -->
<div class="text-area">
    <div class="close-menu" id="close-btn">
        <span class="material-icons-sharp">close</span>
    </div> 
    
    <div class="display-text">
           <div class="chats">
                <div class="sender-msg msg">
                   <p>Welcome to Zetech University</p>
                   <p>Hello How can i assist you today? </p>
                  </div>

                  <div class="receiver-msg msg">
                     <p contenteditable="true">I am Ismael Bett,When are the elections starting?</p>
                </div>   
           </div>
         <textarea class="message" placeholder="Enter message.."></textarea>
      </div>
    <button class="send-btn">Send</button>
  </div>
<div class="chat">
 <p>We are Here!</p>
 <i>"Invent Your future"</i>
</div>
<!-- Chat end -->

       <!-- Context Menu Start -->
           <div class="context-el">

                <div class="close-context" id="close-menu">
                    <span class="material-icons-sharp">close</span>
                </div> 

                <div class="context-menu">
                     <ul>
                            <li><a href="">Resources</a></li>
                            <li><a href="">Leaders</a></li>
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
<script type="text/javascript" src="Assets/js/assist.js"></script>
<script type="text/javascript" src="Assets/js/context.js"></script>
</body>
</html>
