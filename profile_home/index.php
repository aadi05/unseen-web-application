<?php
  $flag=0;
  session_start();
  include("../db/dbconfig.php");

  $a=$_SESSION['loginstatus'];
  $e=$_SESSION['username'];


  if($a==1)
  {

  }
  else
  {
    session_destroy();
    header('Location:../login/');
  }


  $query="SELECT * FROM user WHERE username='$e'";
  $iquery=mysqli_query($conn,$query);
  $result=mysqli_fetch_assoc($iquery);
  $username=$result['username'];


?>





<!DOCTYPE html>
<html>
  <head>
    <link href="../New_homepage.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <title>Unseen movie booking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">  
    <style>
</style>  
      
  </head>
  
  <body>
        <div class="main-grid">
            <!--Header of the document-->
            <div class="header-grid">
                <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Menu</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#now_showing">Now Showing</a>
                            <a href="#movies">Movies</a>
                            <a href="#near">Near me</a>
                            <a href="#contact">Contact us</a>
                        </div>
                 </div>
                <div class="logo-div">
                    <h1 class="logo-text"><b>UN</b>SEEN</h1>
                </div>
                <div class="searchbar-div">
                    <input class="searchbox" type="text" placeholder="Movies,Shows,Theater..." title="Movies,Shows,Theater...">
                    <button class="searchbutton" type="submit"><i class="fas fa-search"style="padding-right:5px;"></i></button> 
                </div>
            </div>
            <!--Navigation and login-->
            <div class="navigation-grid">
                <div class="navigation-div">
                    <ul class="navgation" style="cursor: context-menu">
                        <li><a href="#now_showing" style="color:white;text-decoration: none;">Now Showing</a></li>
                         <li><a href="#movies" style="color:white;text-decoration: none;">Movies</a></li>
                         <li><a href="#near" style="color:white;text-decoration: none;">Near Me</a></li>
                        <li><a href="#about" style="color:white;text-decoration: none;">Contact us</a></li>
                        <li><a href="profile3.php" style="color:white;text-decoration: none;float:right;color:#4CAF50;"><?php echo $username ?></a></li>
                    </ul>
                </div>
            </div>
            <!--Title and Sliding Images -->
            <div class="slide-div" id="now_showing">
                <div class="mySlides fade">
                    <!-- <div class="numbertext">1 / 3</div> -->
                    <a href="movie/aquaman/"><img src="slide3.jpg" style="width:100%"></a>
                    <div class="text">Aquaman</div>
                </div>

                <div class="mySlides fade">
                    <!--<div class="numbertext">2 / 3</div>-->
                    <a href="movie/bp/"><img src="slide1.jpg" style="width:100%"></a>
                    <div class="text">Black Panther</div>
                </div>
                
                <div class="mySlides fade">
                    <!--<div class="numbertext">3 / 3</div>-->
                    <a href="movie/venom/"><img src="slide2.jpg" style="width:100%"></a>
                    <div class="text">Venom</div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
                
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
            <!--Movies and filters-->
            <div class="movie-grid">
                <div class="title-div">
                    <h1>Movies</h1>
                    <br>
                </div>

            
                
                <div class="movie-div" id="movies">
                    <div class="container_movie" style="margin-left: 15%;margin-bottom: 15%;">
                      <img src="img/mp1.jpg" alt="Avatar" class="image_movie movie-template">
                    <h1>Johnny English</h1>
                       <p>English|(U/A)|87mins|</p>
                        <div class="middle">
                            <div><h3>Johnny English</h3></div>
                            <a href="movie/je/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp2.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Aquaman</h1>
                       <p>English|(U/A)|98mins|</p>
                        <div class="middle">
                            <div><h3>Aquaman</h3></div>
                            <a href="movie/aquaman/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp3.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Tiger</h1>
                        <p>Hindi|(U/A)|120mins</p>
                        <div class="middle">
                            <div><h3>Tiger</h3></div>
                            <a href="movie/tiger/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp4.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Black Panter</h1>
                       <p>English|(U/A)|98mins|</p>
                        <div class="middle">
                            <div><h3>Black Panther</h3></div>
                            <a href="movie/bp/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp5.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Bazzar</h1>
                        <p>Hindi|(U/A)|97mins</p>
                        <div class="middle">
                            <div><h3>Bazaar</h3></div>
                            <a href="movie/bz/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp6.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Wreck it ralph 2</h1>
                       <p>English|(U/A)|98mins|</p>
                        <div class="middle">
                            <div><h3>Wreck it ralph 2</h3></div>
                            <a href="movie/ralph/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp7.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Venom</h1>
                       <p>English|(U/A)|98mins|</p>
                        <div class="middle">
                            <div><h3>Venom</h3></div>
                            <a href="movie/venom/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                    <div class="container_movie" style="margin-left: 15%;">
                      <img src="img/mp8.jpg" alt="Avatar" class="image_movie movie-template" >
                        <h1>Hunter Killer</h1>
                       <p>English|(U/A)|98mins|</p>
                        <div class="middle">
                            <div><h3>Hunter Killer</h3></div>
                            <a href="movie/hk/"><button class="text_movie">Book</button></a>
                        </div>
                    </div>
                </div>
            </div>

    <div id="near">
        <div>
            <h1 style="display:inline-block;margin-left:6%;font-family: arial;color:grey;">Nearby Theaters</h1>
            <iframe src="map/theater.html" style="width:50%;height:450px;float:right;margin-right: 20%;margin-bottom: 3%;"></iframe>
        </div>

    </div>

        <div style="background-color:#eee">
            <p style="color:#515454;padding:1% 11% 1% 11.5%;">
            Privacy Note<br>
            By using www.unseen.com(our website), you are fully accepting the Privacy Policy available at https://unseen.com/privacy governing your access to Unseen and provision of services by unseen to you. If you do not accept terms mentioned in the Privacy Policy, you must not share any of your personal information and immediately exit Unseen.
            </p>
        </div>

            
            <!--footer and links and notification-->
            <div class="footer-grid" id="about">
                <div class ="location-2-div">
                    <h1><b>Theaters at:</b></h1>
                    <h1>Mumbai</h1>
                    <h1>Thane</h1>
                    <h1>Boisar</h1>
                </div>
                <div class="socials-div">
                    <h1>SOCIALS LINKS GO HERE</h1>
                </div>
                <div class="abouts-div">
                    <h1>Dummy site project by shadpr@yandex.com for xavier enginnering college</h1>
                </div>
            </div>
            
        </div>
        
        
        <script>
            //javascript for sliding widnow
            
            var slideIndex = 0;
            showSlides(slideIndex);
            
            function plusSlides(n) {
             showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            var interval = setInterval(showslides(1),1000); 
            
            //javascript for menu
            
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                }
            }
            
        </script>

    
    </body>
</html>
    
    
    
    