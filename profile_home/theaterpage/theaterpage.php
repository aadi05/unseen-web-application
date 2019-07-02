<!DOCTYPE html>
<?php 
$date="";
$time="";
?>
<html>
	<head>
        <link href="seatsfinal.css" rel="stylesheet" type="text/css">
        <link href="../New_homepage.css" rel="stylesheet" type="text/css">
		<title>Unseen movie booking</title>
		<meta charset="UTF-8">
	</head>	
	<body>
        <!--Header of the document-->
            <div class="header-grid">
                <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Home</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="../">Home</a>
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
                        <li><a href="../" style="color:white;text-decoration: none;">back</a></li>
                    </ul>
                </div>
            </div>
            <form method="post">
            <div class="theaterpagecontent" style="width:100%; min-height:300px;color:#333;">
                <h4 style="font-family:arial;font-size;10px;margin-left:45%;color:#333;">Select Show Time</h4>
                <select class="time"style="margin-left:45%;">
                    <option disabled selected>Select Show</option>
                    <option>11:00 AM</option>
                    <option>02:00 PM</option>
                    <option>06:00 PM</option>
                    <option>09:00 PM</option>
                </select>
                <h4 style="font-family:arial;font-size;10px;margin-left:45%;color:#333;">Select Show Date</h4>
                <br>
                <input type="date" name="book"style="margin-left:45%;">
                <br>
                <input type="submit" name="submit" value="submit" style="margin-left:45%;"/>
            </div>
            </form>
            
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
    </body>
</html>
