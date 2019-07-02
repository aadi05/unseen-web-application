<?php
include("../db/dbconfig.php");
session_start();

$username=$_SESSION['username'];
$movie = $_SESSION['movie_name'];

$count=0;
$total_seats= "";


$query = $conn->query("SELECT `seat_no` FROM `seats` WHERE `movie`='$movie';");
$seats = Array();
while($result = $query->fetch_assoc()){
    $seats[] = $result['seat_no'];
}

if(isset($_POST["submit"]))
{
	if(!empty($_POST["seats"]))
	{   
		foreach($_POST["seats"] as $seats)
		{
        $date = date("Y-m-d");
        $sql = "INSERT INTO seats (seat_no,movie,username,date) VALUES ('$seats','$movie','$username', '$date')";
        mysqli_query($conn,$sql);
		$selected[] = $seats;
        $total_seats = $total_seats.$seats;
        $count = $count+1;
		}
        $_SESSION['count']=$count;
        $total = $count*150;
        $_SESSION['total']=$total;
        $_SESSION['total_seats']=$total_seats;
        
        $movie = "INSERT INTO movie (username,movie) VALUES ('$username', '$movie')";
         mysqli_query($conn,$movie);     

	}
	else{
		
	}
}
?>


<script type='text/javascript'>
<?php
$js_array = json_encode($seats);
echo "var bookedseats = ". $js_array . ";\n";
?>

</script>

<!DOCTYPE html>
<html>
	<head>
        <link href="seatsfinal.css" rel="stylesheet" type="text/css">
        <link href="../New_homepage.css" rel="stylesheet" type="text/css">
		<title>Unseen movie booking</title>
		<meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <li><a href="../profile_home/movie/aquaman/" style="color:white;text-decoration: none;">Back</a></li>
                    </ul>
                </div>
            </div>
        <form method="post">
            
            <table style="height: 372px;margin-left:30%;" width="446";>
                <tbody>
                    <tr>
                    <td style="width: 49px;">&nbsp;</td>
                    <td style="width: 49px;">&nbsp; &nbsp;A</td>
                    <td style="width: 49px;">&nbsp;&nbsp; &nbsp;B</td>
                    <td style="width: 49px;">&nbsp;&nbsp; &nbsp;C</td>
                    <td style="width: 49px;">&nbsp;&nbsp; &nbsp;D</td>
                    <td style="width: 50px;">&nbsp;&nbsp; &nbsp;E</td>
                    <td style="width: 50px;">&nbsp;&nbsp; &nbsp;F</td>
                    <td style="width: 50px;">&nbsp;&nbsp; &nbsp;G</td>
                    <td style="width: 50px;">&nbsp;&nbsp; &nbsp;H</td>
                    <td style="width: 50px;">&nbsp;&nbsp; &nbsp;I</td>
                    <td style="width: 50px;">&nbsp;&nbsp; &nbsp;J</td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">1</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a1"id="a1"name="seats[a1]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b1"id="b1"name="seats[b1]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c1"id="c1"name="seats[c1]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d1"id="d1"name="seats[d1]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e1"id="e1"name="seats[e1]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f1"id="f1"name="seats[f1]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g1"id="g1"name="seats[g1]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h1"id="h1"name="seats[h1]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i1"id="i1"name="seats[i1]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j1"id="j1"name="seats[j1]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">2</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a2"id="a2"name="seats[a2]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b2"id="b2"name="seats[b2]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c2"id="c2"name="seats[c2]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d2"id="d2"name="seats[d2]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e2"id="e2"name="seats[e2]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f2"id="f2"name="seats[f2]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g2"id="g2"name="seats[g2]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h2"id="h2"name="seats[h2]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i2"id="i2"name="seats[i2]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j2"id="j2"name="seats[j2]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">&nbsp;</td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">3&nbsp;</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a3"id="a3"name="seats[a3]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b3"id="b3"name="seats[b3]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c3"id="c3"name="seats[c3]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d3"id="d3"name="seats[d3]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e3"id="e3"name="seats[e3]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f3"id="f3"name="seats[f3]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g3"id="g3"name="seats[g3]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h3"id="h3"name="seats[h3]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i3"id="i3"name="seats[i3]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j3"id="j3"name="seats[j3]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">4&nbsp;</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a4"id="a4"name="seats[a4]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b4"id="b4"name="seats[b4]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c4"id="c4"name="seats[c4]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d4"id="d4"name="seats[d4]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e4"id="e4"name="seats[e4]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f4"id="f4"name="seats[f4]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g4"id="g4"name="seats[g4]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h4"id="h4"name="seats[h4]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i4"id="i4"name="seats[i4]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j4"id="j4"name="seats[j4]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">5&nbsp;</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a5"id="a5"name="seats[a5]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b5"id="b5"name="seats[b5]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c5"id="c5"name="seats[c5]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d5"id="d5"name="seats[d5]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e5"id="e5"name="seats[e5]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f5"id="f5"name="seats[f5]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g5"id="g5"name="seats[g5]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h5"id="h5"name="seats[h5]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i5"id="i5"name="seats[i5]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j5"id="j5"name="seats[j5]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">6&nbsp;</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a6"id="a6"name="seats[a6]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b6"id="b6"name="seats[b6]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c6"id="c6"name="seats[c6]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d6"id="d6"name="seats[d6]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e6"id="e6"name="seats[e6]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f6"id="f6"name="seats[f6]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g6"id="g6"name="seats[g6]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h6"id="h6"name="seats[h6]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i6"id="i6"name="seats[i6]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j6"id="j6"name="seats[j6]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">7&nbsp;</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a7"id="a7"name="seats[a7]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b7"id="b7"name="seats[b7]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c7"id="c7"name="seats[c7]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d7"id="d7"name="seats[d7]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e7"id="e7"name="seats[e7]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f7"id="f7"name="seats[f7]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g7"id="g7"name="seats[g7]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h7"id="h7"name="seats[h7]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i7"id="i7"name="seats[i7]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j7"id="j7"name="seats[j7]"></td>
                    </tr>
                    <tr>
                    <td style="width: 49px;">&nbsp;8</td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="a8"id="a8"name="seats[a8]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="b8"id="b8"name="seats[b8]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="c8"id="c8"name="seats[c8]"></td>
                    <td style="width: 49px;">&nbsp;<input type="checkbox"value="d8"id="d8"name="seats[d8]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="e8"id="e8"name="seats[e8]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="f8"id="f8"name="seats[f8]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="g8"id="g8"name="seats[g8]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="h8"id="h8"name="seats[h8]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="i8"id="i8"name="seats[i8]"></td>
                    <td style="width: 50px;">&nbsp;<input type="checkbox"value="j8"id="j8"name="seats[j8]"></td>
                    </tr>
                </tbody>
                </table>
                <div class="screen" style="background-color:gray; width:446;margin-left:30%;font-family:arial;color:white;text-align:center;">
                        Screen This way
                </div>
                <input type="submit" name="submit" value="submit" style="margin-left:45%;"/>
            </form>
        <div>
            <h1 style="font-family:arial;color:#333;">Your Bookings</h1>
            <h2 style="color:green;font-family:arial;color:#333;"><?php if(!empty($_POST['seats'])){foreach($selected as $value){
                echo $value.'<br>'; }
                echo '<a href="../checkout/"> <input type="button" name="confirm" value="confirm"/></a>';}?></h2>
        </div>
        
          <div class="footer-grid">
                <div class ="location-2-div">
                    <h1><b>Theaters at:</b></h1>
                    <h1>Mumbai</h1>
                    <h1>Thane</h1>
                    <h1>Boisar</h1>
                </div>
                <div class="socials-div">
                    <i class="fab fa-facebook"></i><i class="fab fa-twitter-square"></i><i class="fab fa-instagram"></i>
                </div>
                <div class="abouts-div">
                    <h1>Dummy site project by shadpr@yandex.com for xavier enginnering college</h1>
                </div>
            </div>

    </body>
    <script>
            var index;
            for (index = 0; index < bookedseats.length; ++index) {
                document.getElementById(bookedseats[index]).setAttribute('disabled', 'disabled');
                }
    </script>
</html>
