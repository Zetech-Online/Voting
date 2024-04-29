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
    <title>Live-News: From Zetech University</title>
    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/context.css">
</head>
<body>
   <div class="container">
 
        <div class="heading">
                  <h1>Zetech News</h1>
                  <p>Home Of Heroes</p>
  
        </div>

        <div class="vid-el">   
                    <div class="video">
                    <iframe src="assets/videos/test.mp4" title="Zetech Video Player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                    </div>      
                      <div class="news">
                            <div class="logo">
                                <div class="img">   
                            </div>

                              <div class="txt">
                                      <h2>Zetech University</h2>
                                </div>
                                </div>
                            <marquee behavior="" direction="" scrollamount="5">The next semester is scheduled to proceed from may 02 2024, All Students are expected to report on time.</marquee>
                       </div>                      
                          <ul class="nav">
                            <li><a href="">Academics</a></li>
                            <li><a href="">Sports</a></li>
                            <li><a href="">Innovation</a></li>
                            <li><a href="">Clubs</a></li>
                            <li><a href="">Community</a></li>
                        </ul>
                  </div>

          <div class="footer">
  
            <p class="date"></p>
            <p class="time"></p>
   </div>
   
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

   <script type="text/javascript" src="assets/js/news.js"></script>
   <script type="text/javascript" src="assets/js/context.js"></script>
</body>
</html>