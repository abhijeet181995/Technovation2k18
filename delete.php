<!DOCTYPE html>
<html>
<head>
			<title>Technovation2k18</title>
        <meta name="description" content="Technical Fest of Iert Allahabad">
  <meta name="keywords" content="IERT,Technovation,technovation2k18,iert allahabad,technical fest,aktu fest,aktu zonal fest,aktu,allahabad,selfievation,selfivation,tech fest,technovation2k18.org,technovation.org,2k18technovation,2k18,Delete Events">
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
        include('config.php');
        session_start();
		$q="{$_SESSION['myemail']}";   
    ?>
    
    
    
    
    
    
         <div class="container" style="margin-top:150px;"><div class="row">
            
            <div class="col-xs-12 col-sm-6 col-md-4   offset-sm-6 offset-md-8 ">      
                
    <button class="btn btn-primary"> <a href='profile.php' style="color:white;">Profile</a></button>
             <button class="btn btn-info"><a href='feepayment.php' style="color:white;">Pay Fee</a></button>
            <button class="btn btn-danger"> <a href='profilelogout.php' style="color:white;">Logout</a> </button>

            
            </div>
             
              <div class="col-xs-12 col-sm-4 justify-content-center " style="margin-top:70px;"> 
        <h3>Delete Single Event</h3>
             </div>
    
    <div class="col-xs-12 col-sm-8" style="margin-top:70px;">
<form action="hdelete.php" method="post">
	<div class="table-responsive">
	<table  class="table" >
		<tr>
			<td>Registered E-MAIL</td>
			<td><select name="email">
                <option><?php echo $q; ?></option></select></td>
                
		</tr>
		<tr>
			<td>Events</td>
		  <td><select name="Events" required><option> </option><option>Codegolf</option> <OPTION>C Legacy</OPTION><OPTION>Codervation</OPTION><OPTION>Bug D Code</OPTION><OPTION>Web Dextro</OPTION><option>Canvas</option><option>M-Quiz</option><option>Auto-Desk</option><option>Code-Golf</option>
		  	<OPTION>Type Racer</OPTION></select></td>
		</tr>
		<tr>
            <td><button class="btn btn-info" type="submit" value="Delete" name="sub" >Submit</button></td>
            <td> <button class="btn btn-info" type="reset" value="Reset" name="reset">Reset</button></td>
		</tr>
	</table>
    </div>
        </form>
             </div>
             </div>
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
   
</body>
</html>