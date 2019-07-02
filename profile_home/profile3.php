<?php
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
  $fname=$result['fname'];
  $lname=$result['lname'];
  $contact=$result['contact'];
  $email=$result['email'];
  $city=$result['city'];
  $username=$result['username'];
  $balance=$result['balance'];

  $querym="SELECT * FROM `seats` WHERE username='$e' ORDER BY `id` DESC LIMIT 1";
  $iquerym=mysqli_query($conn,$querym);
  $mresult=mysqli_fetch_assoc($iquerym);
  $movie=$mresult['movie'];
  $seatno=$mresult['seat_no'];
  $date=$mresult['date'];



$m_query="SELECT * FROM movie WHERE username='$e'";
$m_iquery=mysqli_query($conn,$m_query);
$result=mysqli_fetch_assoc($m_iquery);
$seat=$result['seat'];
$genre=$result['genre'];

if(isset($_POST['cancel']))
{
    
        $cdate = date("Y-m-d");
        if($cdate > $date){
            ?>
            <script type="text/javascript">
              alert("Ticket cannot be cancelled");
              window.location="../profile_home/profile3.php";
            </script>
            <?php
        }
        else{
            $cancel = "DELETE FROM `seats` WHERE username='$e' AND date='$date' ORDER BY `id` DESC LIMIT 1";
            $ecancel=mysqli_query($conn,$cancel);
            $balance=$balance+100;
            $u_query="UPDATE user SET balance='$balance' WHERE username='$e'";
            $e_query=mysqli_query($conn,$u_query);
            ?>
            <script>
                 alert("Your ticket has been cancelled!");
                 alert("Refund money has been added to your account!");
                 window.location = "../profile_home/profile3.php";
            </script>
            <?php
            
        }
        
}


  if(isset($_POST['update']))
  {
    $n_fname=$_POST['fname'];
    $n_lname=$_POST['lname'];
    $n_contact=$_POST['contact'];
    $n_email=$_POST['email'];
    $n_city=$_POST['city'];
    $n_username=$_POST['username'];
    $n_password=$_POST['password'];
    $n_cpassword=$_POST['cpassword'];

    $u_query="UPDATE user SET fname='$n_fname', lname='$n_lname', contact='$n_contact', email='$n_email', city='$n_city', username='$n_username', password='$n_password' WHERE username='$e'";
    $e_query=mysqli_query($conn,$u_query);

    if($n_password != $n_cpassword)
    {
      ?>
      <script type="text/javascript">
        alert("Enter correct password");
        window.location="../profile_home/profile3.php";
      </script>
      <?php

    }
    elseif($e_query)
    {
      ?>
      <script type="text/javascript">
        alert("Updated Successfully");
        window.location="../login/logout.php";
      </script>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Update Failed");
      </script>
      <?php
    }
  }
?>
<!Doctype html>
<html>
    <head>
        <title>Unseen</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style_userpage.css" type="text/css" />
        <link rel="stylesheet" href="New_homepage.css" type="text/css"/>
        <meta name="viewport" content="width=device-width",intialscale=1.0>
    </head>
    
    <body>
        <div class="grid-container">
            
             <!--Header of the document-->
            <div class="header-grid">
                <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Home</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="index.php">Home</a>
                            <a href="../login/">Logout</a>
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
                        <li><a href="index.php" style="color:white;text-decoration: none;">Home</a></li>
                        <li><a href="../login/" style="float:right;color:red;text-decoration: none;">Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <button class="tablinks" onclick="openSection(event, 'Bookings')" id="defaultOpen">Bookings</button>
                <button class="tablinks" onclick="openSection(event, 'Setting')">Account Setting</button>
                <button class="tablinks" onclick="openSection(event, 'balance')">My Balance</button>
            </div>
            
            <div id="Bookings" class="movie-info tabcontent">
                <div class="ticket">
                    <h2>Movie Name|ratings:<label style="color:blue;"><?php echo $movie ?></label></h2>
                    <h3>Date / time:<label style="color:blue;"><?php echo $date ?></label></h3>
                    <h3>Seat No:<label style="color:blue;"><?php echo $seatno ?></label></h3>
                    <form method="POST">
                    <input type="submit" class="cancel" name="cancel" style="background-color:red;font-size: 30px;color:white;border-radius:11px;" value="Cancel ticket" style="font-size:20px;border-radius:7px;">
                    </form>
                </div>
            </div>
            <div id="Setting" class="user-info tabcontent">
                
  <h1 align="center" style="margin: 7 5 7 5;font-family: arial;color: gray;">Update Profile Details</h1>

        <form method="POST">
            <div>
                <input type="text" name="fname" value="<?php echo $fname ?>" id="fname" placeholder="Enter new name" required>
            </div>
      
            <div>
                <input type="text" name="lname" value="<?php echo $lname ?>" id="lname" placeholder="Enter new last name" required>
            </div>
   
   
            <div>
                <input type="text" name="username" id="username" placeholder="Enter new username" required>
            </div>

            <div>
                <input type="number" name="contact" id="contact" value="<?php echo $contact ?>" placeholder="Enter new contact" required>
            </div>

            <div>
                <input type="email" name="email" id="email" value="<?php echo $email ?>" placeholder="Enter new email" required>
            </div>

            <div>
                <select name="city" class="form-control" id="city">
                    <option value="null" disabled selected>Choose new city</option>
                    <option value="1">Mumbai</option>
                    <option value="2">Delhi</option>
                    <option value="3">Bangalore</option>
                    <option value="4">Kolkata</option>
                </select>
            </div>
  
            <div>
                <input type="password" name="password" id="password" minlength="8" placeholder="Enter new password" required>
            </div>
   
     
            <div >
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" required>
            </div>
        

            <div class="col-sm-12 form-group">
                <input type="submit" name="update" id="update" value="Update">
            </div>
        </form>
</div>
            
            <div id="balance" class="movie-info tabcontent">
                <div class="ticket">
                    <h2>Account balance:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color:gold;"><?php echo $balance ?></label></h2>
                </div>
                <div>
                    <a href="../add_balance/"><input type="button" value="Add Balance" name="add"/></a>
                </div>
            </div>
            <div class="footer-grid" style="margin-top:50%;">
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
        <script>
    function openSection(evt,part) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }   

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(part).style.display = "block";
        evt.currentTarget.className += " active";
    }   
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
            document.getElementById("defaultOpen").click();
                </script>
        
    </body>
</html>