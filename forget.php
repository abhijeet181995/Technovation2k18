<?php
//Include GP config file && User class
include_once 'gpConfigforget.php';
include_once 'User.php';


	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/gsignin.png" alt="" width="300"/></a>';

?>
<html>
<head>

    <title>Technovation | Forget Password</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="icon" href="images/favicon.jpg" type="image/gif">
        <link rel="stylesheet" href="css/styles.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                   
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" >
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
</head>
    <body>
        
        <nav class="navbar navbar-expand-md bg-dark  navbar-dark fixed-top ">
 <a class="navbar-brand mr-auto " href="index.html" style="margin-left: 20px;" ><img src="images/logo.png" width="50" height="40px;"></a>
              
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  >
    <span class="navbar-toggler-icon  "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item   ">
            <a class="nav-link " href="event.html"> EVENT </a></li>
        <li class="nav-item active  "><a class="nav-link " href="studentlogin.php"> LOGIN  </a></li>
        
            <li class="nav-item   "><a class="nav-link  " href="sponsor.html"> SPONSOR  </a></li>
        
            <li class="nav-item   "><a class="nav-link  " href="gallery.html"> GALLERY </a></li>
       
      
       
    </ul>
  </div>
</nav>
        <?php
		//	session_start();
		if(isset($_SESSION['active']))
		{
			header("location:profile.php");
		}
    ?>
	<center style="margin-top:30vh;margin-bottom:30vh;">
        <h2>FORGET PASSWORD</h2>
        
        <p>Sign In With Google for Authentication.  </p>
        <div><?php echo $output; ?></div>
        </center>
        
        
        <footer class="row-footer" style="margin-top:10vh;">
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1">
                    <h5>Important Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="event.html">Event</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="studentlogin.php">Login</a></li>
                       
                        <li><a href="gallery.html">Gallery</a></li>
                        
                    </ul>
                </div>
                
                 <div class="col-xs-5 col-xs-offset-2 col-sm-4">
                    <h5>Related</h5>
                    <ul class="list-unstyled">
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="sponsor.html">Sponsor</a></li>
                         <li><a href="aboutus.html">About</a></li>
                        
                    </ul>
                </div>
                
                
                <div class="col-sm-3">
                    <h5>Follow Us</h5>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/2k18technovation"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/Technovation_?s=08"><i class="fa fa-twitter"></i></a>
                    
                      <a class="btn btn-social-icon btn-instagram" href="http://instagram.com/technovation_2k18"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href=""><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href=""><i class="fa fa-envelope-o"></i></a>
                   

                
                </div>
               
              
               
                <div class="col-xs-12 col-sm-12 " style="background-color:dimgray">
                    <p style="padding:0px;"></p>
                    <p align=center style="color:">© Copyright 2K18 Technovation Web Development Team</p>
                </div>
            </div>
        </div>
    </footer>
	 
        
        
       
        
        
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
        </html>
