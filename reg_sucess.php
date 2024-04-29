 <?php
session_start();  
if(!isset($_SESSION["registered"])){
    header("location: index.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h2>Signed up successfully!</h2>
        <button><a href="index.php">Login</a></button>
        <p>Now Feel Free to Explore Our New Platform</p>
    </div>
 
    <style>
    body{
        margin: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;
        background-image: url(Assets/images/hero.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .container{
        display: flex;
        flex-direction: column;
        background: #fff;
        padding: 6rem;
    }

     h2{
        text-align: center;
        color: darkgreen;
        margin: 2rem;
        font-family: sans-serif;
     }

     button{
        border: none;
        padding-left: 4rem;
        padding-right: 4rem;
        padding-top: 0.9rem;
        padding-bottom: 0.9rem;
        color: #fff;
        background:#1c1d3b;
        cursor: pointer;
     }

     button a{
        color:#fff;
        text-decoration:none;

     }

     .container p{
        text-align: center;
        font-family: sans-serif;
     }

    </style>
    
</body>
</html>