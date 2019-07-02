<?php
session_start();
include("../db/dbconfig.php");
  $a=$_SESSION['loginstatus'];
  $e=$_SESSION['username'];
$movie=$_SESSION['movie_name'];
$seats = $_SESSION['total_seats'];
$count = $_SESSION['count'];

  $query="SELECT * FROM user WHERE username='$e'";
  $iquery=mysqli_query($conn,$query);
  $result=mysqli_fetch_assoc($iquery);
  $fname=$result['fname'];
  $lname=$result['lname'];
  $email=$result['email'];
  $username=$result['username'];



?>

<html>
<head>
<title>unseen</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="../New_homepage.css">

  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
<style>
    h1,h3{
        font-family: arial;
        color:#333;
    }
    .final{
        min-height: 350px;
    }
    
</style>
<body>

<div class="main-grid">
            <!--Header of the document-->
            <div class="header-grid">
                <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Home</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="../profile_home/">Home</a>
                        </div>
                 </div>
                <div class="logo-div">
                    <h1 class="logo-text"><b>UN</b>SEEN</h1>
                </div>
            </div>
            <!--Navigation and login-->
            <div class="navigation-grid">
                <div class="navigation-div">
                    <ul class="navgation" style="cursor: context-menu">
                        <li><a href="../profile_home/" style="color:white;text-decoration: none;">Home</a></li>
                    </ul>
                </div>
            </div>
    
    <div class="final">
    
    <h1>Booking Details</h1>
        <h3>Movie:&nbsp;&nbsp;<label style="color:blue;"><?php echo $movie ?></label></h3><br>
    <h3>Seats Booked:&nbsp;&nbsp;<label style="color:blue;"><?php echo $seats ?></label></h3><br>
    </div>
    
    <div>
        <h1 style="color:green;">Your have succesfully booked &nbsp;<?php echo $count ?>&nbsp;tickets.Show time: 2 PM. Check your email (It may be in your spam)<a href="../profile_home/" style="color:aqua;">continue</a></h1>
    </div>
    
    
    <div class="footer-grid">
                <div class ="location-2-div">
                    <h1><b>Theaters at:</b></h1>
                    <h1>Mumbai</h1>
                    <h1>Thane</h1>
                    <h1>Boisar</h1>
                </div>
                <div class= "news-letter">
                    <h1>Recive Newsletter:</h1>
                    <input class="newsletter" type="email" placeholder="Newsletter" title="news and more..">
                    <input class="newsletter-submit" type="submit">
                </div>
                <div class="socials-div">
                    <h1>SOCIALS LINKS GO HERE</h1>
                </div>
                <div class="abouts-div">
                    <h1>Dummy site project by shadpr@yandex.com for xavier enginnering college</h1>
                </div>
            </div>
            
        </div>
    </body>