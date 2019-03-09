<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        //'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        //'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	
	//Render Google  profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $outputname = $userData['first_name'].' '.$userData['last_name'];
        $outputemail =  $userData['email'];
        $output .=  $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	$output ="Direct Login please first signup in Login Page";
}
if ($outputemail==NULL)
{
    header("location:studentlogin.php");
}
?>
<!DOCTYPE HTML>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Technovation | Registration</title>
		
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
        <li class="nav-item  ">
            <a class="nav-link " href="event.html"> EVENT </a></li>
        <li class="nav-item active   "><a class="nav-link " href="studentlogin.php"> LOGIN  </a></li>
        
            <li class="nav-item   "><a class="nav-link  " href="sponsor.html"> SPONSOR  </a></li>
        
            <li class="nav-item   "><a class="nav-link  " href="gallery.html"> GALLERY </a></li>
       
      
       
    </ul>
  </div>
</nav>
        
        
        
        
        
   <div class="container" style="margin-top:150px;">
       <div class="row d-flex justify-content-center">
       <div class="col-xs-12 col-sm-12 d-flex justify-content-center">
       <div style="font-size:20px; color:red;">Welcome!!! &nbsp;<?php echo $outputname; ?> Complete Your details </div>
           </div>
        
           
           
            <div class="col-xs-3  d-flex justify-content-center">
<div class="form">
    <h1>Registration Panel</h1>
    <form action="rhandler.php" method="POST">
        
        
        <div class="input-group f1 d-flex justify-content-center">
             <div class="row" style="margin-top:5px;"> 
            
            <div class="col-xs-2">
 <div class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1" style="height:40px;"><i class="fas fa-user"></i></span>
            </div>
                 </div>
     <div class="col-xs-10">
            <input type="text" name="name" autocomplete="off" spellcheck="false"  placeholder="Full Name"  required style="height:40px; width:40vh;" >
                 </div>
            </div>
        </div>
        
        
        <div class="input-group f2 d-flex justify-content-center" >
            
            <div class="row"  style="margin-top:5px;"> 
            
            <div class="col-xs-2">
<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" style="height:40px;"><i class="fas fa-envelope"></i></span>
  </div> 
</div>
            <div class="col-xs-10">
            <select name="email" style="height:40px;width:40vh;">
                <option ><?php echo $outputemail; ?></option>
                </select>
                </div>
                
               </div>
         </div>
        
     

           <div class="input-group f6 d-flex justify-content-center">
             <div class="row" style="margin-top:5px;"> 
            
            <div class="col-xs-2">
 <div class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1" style="height:40px;"><i class="fas fa-key"></i></span>
            </div>
                 </div>
     <div class="col-xs-10">
             <input type="password" name="pass" maxlength="15" placeholder="New Password" id="password" autocomplete="off" spellcheck="false" required style="height:40px; width:40vh;"> 
        </div>
               </div>
        </div>
        
        
        
        
         <div class="input-group f7 d-flex justify-content-center">
             <div class="row" style="margin-top:5px;"> 
            
            <div class="col-xs-2">
 <div class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1" style="height:40px;"><i class="fas fa-university"></i></span>
            </div>
                 </div>
     <div class="col-xs-10">
             <input type="text" name="cn" autocomplete="off" spellcheck="false"  placeholder="College Name" required style="height:40px; width:40vh;"> 
        </div>
                 
             </div>
        </div>
    
        
        
		 <div class="input-group f3 d-flex justify-content-center">
             <div class="row" style="margin-top:5px;"> 
            
            <div class="col-xs-2">
 <div class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1" style="height:40px;"><i class="fas fa-mobile-alt"></i></span>
            </div>
                 </div>
     <div class="col-xs-10">
            <input type="text" name="mob" maxlength="10" onkeypress="return check_number(event)" placeholder="Mobile Number" autocomplete="off" spellcheck="false" required style="height:40px; width:40vh;">
         </div>
             </div>
        </div>
        
        
           <div class="row" style="margin-top:15px;">
                <div class="f9 col-xs-12 col-sm-6 d-flex justify-content-center" style="margin-top:5px;">
                    <button type="reset" value="Reset"  class="rs btn btn-info">Reset</button>
        </div>  
            <div class="f8 col-xs-12 col-sm-6 d-flex justify-content-center" style="margin-top:5px;">
                <button type="submit" value="Submit" class="sb btn btn-info" >Submit</button>
        </div>
         
               </div> 
</form>
</div>
                
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