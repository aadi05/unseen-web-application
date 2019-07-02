<!DOCTYPE html>
<html>
	<head>
		<link href="moviepage.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<title>Unseen movie booking</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width",intialscale=1.0>
        
        
        <script>
            function book()
            {
                    alert("Please Login First");
                    window.location("../login/");
            }

    </script>
	</head>
	
	<body>
        <div class="header-grid">
                <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Menu</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="../../" >Home</a>

                        </div>
                 </div>
                
                <div class="logo-div">
                    <h1 class="logo-text"><b>UN</b>SEEN</h1>
                </div>
                
                
            </div>
            <div class="navigation-grid">
              
                    <ul class="navgation" style="cursor: context-menu">
                        <li><a href="../../" style="color:white;text-decoration:none;">Home</a></li>

                    </ul>
                
            </div>
        <div class="grid-container">
            
            
            <div class="poster-grid">
                <div class="title-div">
                    <h1>Movie-Name</h1>
                </div>
                <div class="subtitle-div">
                    <h1>Lang|U/A|Genres</h1>
                </div>
                <div class="poster-div">
                    <img src="mp2.jpg" style="height:100%; width:100%;">
                </div>
                <div class="booknow-div">
                    <input type="button" name="book" onclick="book()" value="BookNow" class="booknow">
                </div>
            </div>
            
            <div class="trailer-grid">
                <iframe  src="https://www.youtube.com/embed/WDkg3h8PCVU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="movie-name-grid">
                <h1>Aquaman</h1>
                <h2>Hindi/English/Tamil/Telgu</h2>
                <h1></h1>
            </div>
            <div class="summary-grid">
                <h1>Synopsis</h1>
                <article class="synopsis">
                     Arthur Curry is the reluctant ruler of Atlantis and King of the Seven Seas, who finds himself caught between a surface world constantly ravaging the sea and Atlanteans looking to lash out in revolt, but committed to protecting the entire globe. 
                    
                </article>
            </div>
            <div class="cast-grid">
                <ul>
                   <li> 
                       <div class ="actor-1">
                            <div class="photo">
                                <img src="jason%20momoa.jpg">
                        </div>
                            <div class="nameroll">
                                <h4>Jason Momoa<br><b>Aquaman</b></h4>
                            </div>
                        </div>
                    </li>
                     <li> 
                       <div class ="actor-2">
                            <div class="photo">
                                <img src="Amber.jpg">
                           </div>
                            <div class="nameroll">
                                <h4>Amber Heard<br><b>Mera</b></h4>
                            </div>
                        </div>
                    </li>
                     <li> 
                       <div class ="actor-3">
                            <div class="photo">
                                <img src="patrick.jpg">
                            </div>  
                            <div class="nameroll">
                                <h4>Patrick Wilson<br><b>Ocean Master</b></h4>
                            </div>
                        </div>
                    </li>
                     <li> 
                       <div class ="actor-4">
                            <div class="photo">
                                <img src="nicole.jpg">
                            </div>
                            <div class="nameroll">
                                <h4>Nicole Kidman<br><b>Atlanna</b></h4>
                            </div>
                        </div>
                    </li>
                     
                </ul>
            </div>    
        </div>
        <div class="footer-grid">
                <div class ="location-2-div">
                    <h1><b>Theaters at:</b></h1>
                    <h1>Mumbai</h1>
                    <h1>Thane</h1>
                    <h1>Boisar</h1>
                </div>
            
                <div class="socials-div">
                    <i class="fab fa-facebook"style="font-size:40px;margin-left:30px;"></i><i class="fab fa-twitter-square"style="font-size:40px;margin-left:30px;"></i><i class="fab fa-instagram"style="font-size:40px;margin-left:30px;"></i>
                </div>
                <div class="abouts-div">
                    <h1>Dummy site project by shadpr@yandex.com for xavier enginnering college</h1>
                </div>
            </div>
        <script>
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