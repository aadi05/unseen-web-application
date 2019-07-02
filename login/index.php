<?php

session_start();
include("../db/dbconfig.php");

if(isset($_POST['login']))
{
  $username=$_POST['username'];
   $password=$_POST['password'];

   $p="SELECT * FROM USER WHERE username='$username' AND password='$password'";
   $passwd= mysqli_query($conn,$p);
   $pc= mysqli_num_rows($passwd);

  if($pc>0)
  {
    $_SESSION['loginstatus']=1;
    $_SESSION['username']=$username;
    ?>
    <script type="text/javascript">
      alert("Login Succesful");
      window.location="../profile_home/";
    </script>
    <?php

  }
  else
    {
      ?>
    <script type="text/javascript">
      alert("Login Failed");
      window.location="../login/";
    </script>
    <?php
    }
    
}

?>

<html>
<head>
<title>unseen</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="../New_homepage.css">


  <!-- end -->
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<style>
.login{
  width:70%;
}
#username{
  width:70%;
  height:auto;
  padding: 12px 20px;
  box-sizing: border-box;
  border-radius: 10px;
  display:inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin:0% 35% 3% 35%;
}
#password{
  width:70%;
  height:auto;
  padding: 12px 20px;
  box-sizing: border-box;
  border-radius: 10px;
  display:inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin:0% 35% 3% 35%;
}
#login{
  width:70%;
  cursor: pointer;
  padding: 12px 20px;
  color:white;
  border-radius: 10px;
  border: 1px solid #ccc;
  margin:0% 35% 2% 35%;
  background-color: #4CAF50;
  border:none;
}
button:hover {
    opacity: 0.8;
}

</style>

<meta name="viewport" content="width-device-width, initial scale=1.8">
</head>
<body bgcolor="white" style="background:none;">

  <div class="main-grid">
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
                        <li><a href="../" style="color:white;text-decoration: none;">Home</a></li>
                    </ul>
                </div>
            </div>


<div class="login" style="margin-top:5%;margin-bottom: 10%;">
  <form method="POST">
  <div>
  <input type="text" id="username" name="username" minlength="5" maxlength="20" placeholder="username" required>
</div>
<div>
  <input type="password" id="password" name="password" minlength="8" maxlength="20" placeholder="password" required>
</div>
<div>
  <input type="submit" id="login" value="Login" name="login" placeholder="Login" style="background-color: #2f4f4f">
</div>
<div>
  <p style="margin-left:35%;margin-bottom:2%;font-size:20px;">Don't have an account? &nbsp;<a href="../signup/" style="color:green;" id="signup">Signup</a></p>
</div>
</form>
</div>

 <div class="footer-grid">
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



</body>
</html>