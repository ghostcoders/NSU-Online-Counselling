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
<body background="dandelion_blur_fluff_hand_116362_1366x768.jpg">

     <li class="nav-item">
        <a class="nav-link" href="LoginForm.html"></a>
        <a class="nav-link" href="about.html"></a>
    </li>
    
	
    <div class="container">
	    <div class="page-header">
	     	<a class="list-inline-item" class="NOC-logo" href="file:///C:/xampp/htdocs/Practice/home.html">
                
                    <img src="help_png_656290.png" alt="NOC logo medium" width="50" height="50">
                
            </a>

             <h3 class="list-inline-item" style="color: navy"><bold>NSU ONLINE COUNSELLING</bold></h3>    
                 <h6 style="color: midnightblue ; margin-left: 60px;">W E L C O M E <?php echo $_SESSION['username'];?> </h6>
                 
                 <a href="about.html" class="btn btn-primary" id="about-nav"><li>About</li></a>
                 <a href="advice.html" class="btn btn-primary" id="advice-nav"><li>Advice</li></a>
                 <a href="Therapist-information.html" class="btn btn-primary" id="faq-nav"><li>Therapist-information</li></a>
                 <a href="contact.html" class="btn btn-primary" id="support-nav"><li>Contact</li></a>
                 <a href="slide1.html" class="btn btn-success" id="get-started-nav">Get started</a>
                 <a href="mainHome.html" class="btn btn-info" id="login-nav">Logout</a>

        </div>
    </div>

	            <div class="col-sm-35 col-sm-offset-1">
                    <p style="color:indigo ; font-size:30px"><bold>You deserve to be happy</bold></p>
                    </div>

                    


</body>
</html>
