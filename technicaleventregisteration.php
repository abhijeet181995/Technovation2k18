<!DOCTYPE HTML>
<html>
	<head>
<title>Technovation2k18 | Event | Registration</title>
        <meta name="description">
        <meta name="keywords">
        
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
 
        
        
        
        
        
         <div class="container" style="margin-top:150px;"><div class="row">
            
            <div class="col-xs-12 col-sm-6 col-md-4   offset-sm-6 offset-md-8 ">      
                
    <button class="btn btn-primary"> <a href='profile.php' style="color:white;">Profile</a></button>
             <button class="btn btn-info"><a href='feepayment.php' style="color:white;">Pay Fee</a></button>
            <button class="btn btn-danger"> <a href='profilelogout.php' style="color:white;">Logout</a> </button>

            
            </div>
            
    

<div class="col-xs-12"  style="margin-top:50px;">
    <ul>
        <li><button class="btn btn-block btn-primary" style="width:150px;"><a href="?page=t1" class="l1" style="color:white;"><h5>SOLO EVENT</h5></a></button></li>
       <li style="margin-top:10px;"> <button class="btn btn-block  btn-primary" style="width:150px;"><a href="?page=t5" class="l1" style="color:white;"><h5>TEAM EVENT</h5></a></button></li>
        </ul>
	</div>
     </div>
        </div>

        
        
        
        
        
<div id="container">
		<?php
			session_start();
		if(!isset($_SESSION['active']))
		{
			header("location:studentlogin.php");
		}
        include('config.php');
    
    
	if (isset($_GET["page"]))
	{
		switch($_GET["page"]) {

			case "t1":
		include("technical1.php");
		break;
	    case "t2":
	    include("technical2.php");
	    break;
	    case "t5":
	    include("technical5.php");
	    break;
	}
	}
	?>
<br>
</div>
        
        
        
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

		