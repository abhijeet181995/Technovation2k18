<!DOCTYPE HTML>
<html>
	<head>
		
		<title>Technovation2k18 | PROFILE</title>
        <meta name="description" content="Technical Fest of Iert Allahabad">
  <meta name="keywords" content="IERT,Technovation,technovation2k18,iert allahabad,technical fest,aktu fest,aktu zonal fest,aktu,allahabad,selfievation,selfivation,tech fest,technovation2k18.org,technovation.org,2k18technovation,2k18,User Profile">
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
<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
 
    <h3 style="color:#004a80;">STUDENT PROFILE</h3>
    
<?php
			session_start();
		if(!isset($_SESSION['active']))
		{
			header("location:studentlogin.php");
		}
        include('config.php');
      
         $q="select *from main where email='{$_SESSION['myemail']}'";
         $res=mysqli_query($con,$q);
            $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    echo "<div class='table-responsive'>";
            echo "<table class='table'>";
        echo "<tr><td><b>Name</b></td><td> " .$row["name"] . " </td> </tr>";
          echo "<tr><td><b>E-Mail</b></td><td> " .$row["email"] . " </td> </tr>";
            echo "<tr><td> <b>College_Name</b></td><td> " .$row["college_name"] . " </td> </tr>";
              echo "<tr><td><b>Mobile_No</b></td><td> " .$row["mobile"] . " </td> </tr>";
              echo "<tr><td><b>FEE Payment Status</b></td><td> " .$row["fee"] . "</td> </tr>";
              echo "</table>";
     echo "</div>";
?> 
</div>
<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
	<?php
  $email=$_SESSION['myemail'];
  
            /*now record for technical events */
    
          echo "<h3 style='color:#004a80;'>Technical Event</h3>";
    echo "<div style='margin-top:30px;'></div>";
  $t1="select *from technical1 where email='{$_SESSION['myemail']}'";
  $tres1=mysqli_query($con,$t1);
    $t5="select *from technical5 where email1='$email' or (email2='$email') or (email3='$email') or (email4='$email') or (email5='$email')";
  $tres5=mysqli_query($con,$t5);
      
      
      
      echo "<div class='table-responsive'>";
              echo "<table class='table'><tr><th>YOUR SOLO EVENT </th></tr>";     
          while($trow1 = mysqli_fetch_assoc($tres1)) {
            echo "<tr> <td> " .$trow1["events"] . " </td><tr>";
             
          }
    
    echo "</table>";
    
    echo "</div>";
      echo"\n";
      echo "<br />\n";echo "<br />\n";
      
      
      
      echo"<div class='table-responsive'>";
      echo "<table class='table'><tr><th>YOUR TEAM EVENT </th></tr>";   
    echo "<table class='table'><tr><th>Team Name</th> <th>Event</th><th>First Participant</th><th>Second Participant</th><th>Third Participant</th><th>Fourth Participant</th><th>Fifth Participant</th></tr>";   
                    while($trow5 = mysqli_fetch_assoc($tres5)) {
            echo "<tr><td> " .$trow5["team_name"] . " </td> <td> " .$trow5["events"] . " </td><td>".$trow5["email1"] ."</td><td>".$trow5["email2"] ."</td><td>".$trow5["email3"] . "</td><td>".$trow5["email4"] . "</td><td>".$trow5["email5"] . "</td> </tr>";
             
          }
          
  echo "</table>";
    
    echo "</div>";
    
	?>

    
  
</div>

        
        <div class="col-xs-12 col-sm-6 d-flex justify-content-center" style="margin-top:30px; ">
            <button class="btn btn-primary"><a href='technicaleventregisteration.php' style="color:white;">Register for more events</a></button>
             </div>
             <div class="col-xs-12 col-sm-6 d-flex justify-content-center" style="margin-top:30px;">
    <button class="btn btn-primary"><a href='delete.php' style="color:white;">Delete Your Single Events</a></button>
            </div>
       
      </div></div>
        
        
        
        
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