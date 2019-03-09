<?php
include("config.php");
$em=$_POST["email"];
$p=$_POST["pass"];


$q="select *from main where email='$em'";
$res=mysqli_query($con,$q);
if (mysqli_num_rows($res)>0)
{
    $que="update main set password='$p' where email='$em'";
    mysqli_query($con,$que);
    session_start();
		$_SESSION['myemail']=$em;
		$_SESSION['active']=1;
    Print '<script type="text/javascript"> alert("Password Changed Successful");</script>';
        Print '<script>window.location.assign("profile.php");</script>';
    
}
else 
{
    Print '<script type="text/javascript"> alert("Your Email address is not Registered. Please Register");</script>';
        Print '<script>window.location.assign("studentlogin.php");</script>';
}
?>