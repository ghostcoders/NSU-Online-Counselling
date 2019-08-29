<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>NOC</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="home.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<meta charset="utf-8">
	<link rel="icon" href="help_png_656290.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


            
</head>
<style>
	margin: 0;
  background-color: #f1f1f1;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
</style>
<style>
	 .font-family: Arial;
  .font-size: 17px;
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

.col-25{
  padding: 50px 0px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
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

@media (max-width: 20px) {
  .row {
    flex-direction: column-reverse;
    max-width: 20px
  }
  .col-25 {
    margin-bottom: 30px;
  }
}

</style>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>


<body background="dandelion_blur_fluff_hand_116362_1366x768.jpg">

  <li class="nav-item">
        <a class="nav-link" href="slide1.html"></a>
    </li>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Symptomp selection -->
  <a class="navbar-brand" href="#">
    <img src="help_png_656290.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="advice.html">Advice</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Therapist-information.html">Therapist-Information</a>
    </li>
 <li class="nav-item">
      <a class="nav-link" href="contact.html">contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mainHome.html">Logout</a>
    </li>
  </ul>
</nav><br><br>

    <div >
	<div class="row">
        <div class="col-25">
         <div class="container">
         	<form action="/action_page.php">
      <h4>Your form: <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <hr>
      <p>From NOC

Hi <?php echo $_SESSION['username'];?>,

First, we want to congratulate you for reaching out for help. We understand that this process may be new and difficult for you. You have taken the first (and most courageous) step. You have been matched with a licensed and certified counselor who will guide you through the next steps.

So you're probably asking - how does this work? It's quite simple, actually. Just like with any counseling, you and your counselor will discuss any challenges you're facing or might face, and you will develop some positive ways to reach your goals. The difference is that you don't need to come to an office and you don't need to schedule any time out of your day. Instead, you can write whenever it's convenient for you, and move forward at a pace that you feel comfortable with.

Please note that your messages with your counselor aren't in real-time but it won't be too long before you get a response from your counselor. Your sessions also have another benefit - you can re-read and reflect on our conversations at any time. Often, going back to a conversation can be very helpful and it's one of those things that will help you and your counselor move forward together.

Thank you for trying NOC, and for joining the community of 600,000 people who took steps to make a positive change in their lives. We'll now leave it to you and your counselor to get started!

Sincerely,
NOC Team</p>
      </form>
    </div>
  </div>
  </div>
</div>


</body>
</html>
