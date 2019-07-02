<?php

session_start();
  include("dbconfig.php");
  $a=$_SESSION['loginstatus'];
  $e=$_SESSION['username'];
    $seats = $_SESSION['total_seats'];
    $total = $_SESSION['total'];
    $count = $_SESSION['count'];
    $movie = $_SESSION['movie_name'];
    $seats = $_SESSION['total_seats'];


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


if(isset($_POST['unseen']))
{
    if($balance>=$total)
    {  
        
        require '../PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                   
		$mail->Host = 'smtp.gmail.com';                    
		$mail->SMTPAuth = true;                           
		$mail->Username = 'unseentechnologies05@gmail.com';        //email id
		$mail->Password = 'unseen05';		  //password
		$mail->SMTPSecure = 'tls';                        
		$mail->Port = 587;                                 

		$mail->addAddress($email);   		//receiver email id $email is used to store receiver email
	

		$mail->isHTML(true);  

		$bodyContent = "Thank You for choosing unseentechnologies
                        You have Succeessfully booked ".$count." tickets for the movie ".$movie. 
                        ". Following tickets are booked: ->-> ".$seats.".";
		
		$mail->Subject = 'Booking Confirmation';
		$mail->Body    = $bodyContent;
        
        $mail->isSMTP();

		if(!$mail->send()) 
        {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 
        else 
        {
			echo 'Message has been sent';
			
		}
        $balance=$balance-$total;
        $u_query="UPDATE user SET balance='$balance' WHERE username='$e'";
        $e_query=mysqli_query($conn,$u_query);
        ?>
        <script>window.location = "../final/";</script>
        <?php
        
    }
    else{
        ?>
        <script>alert("Insufficient Balance");</script>
        <?php
    }
    
    
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../New_homepage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
    
    
    <div class="header-grid">
                <div class="logo-div">
                    <h1 class="logo-text"><b>UN</b>SEEN</h1>
                </div>
            </div>
            <!--Navigation and login-->
            <div class="navigation-grid">
                <div class="navigation-div">
                    <ul class="navgation" style="cursor: context-menu">
                        <li><a href="../seat/" style="color:white;text-decoration: none;"><i class="fas fa-long-arrow-alt-left"></i>Back</a></li>
                    </ul>
                </div>
            </div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST">
      
        <div class="row">

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="First Middle Last">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
          <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $count ?></b></span></h4>
      <p><a href="#">Tickets Booked:</a> <span class="price"><?php echo $seats ?></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo $total ?></b></span></p>
    </div>
  </div>
          </div>
          
        <input type="submit" value="Continue to checkout" class="btn" style="background-color:#2f4f4f;">
          <input type="submit" value="Pay using unseen balance" name="unseen" class="btn" style="background-color:aqua;color:black;">
      </form>
    </div>
  </div>
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

</body>
</html>
