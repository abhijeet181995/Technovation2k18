<?php
session_start();
  $error = false;
include("config.php");
$em=$_POST["email"];
$p=$_POST["pass"];
$a="select *from main where email='$em' and password='$p'";
$res=mysqli_query($con,$a);
if(mysqli_num_rows($res)>0)
{
		$_SESSION['myemail']=$em;
		$_SESSION['active']=1;
	header("location:profile.php");
}
$a="select *from main where email='$em' ";
$res=mysqli_query($con,$a);
if(mysqli_num_rows($res)>0)
{ 
    $error=true;
		Print '<script type="text/javascript"> alert("Worng Password Please Try Again ");</script>';
        Print '<script>window.location.assign("studentlogin.php");</script>';
}
else
{	
		
		$error=true;
		Print '<script type="text/javascript"> alert("It\'s seems You are not Registered ,Register First");</script>';
        Print '<script>window.location.assign("studentlogin.php");</script>';
}
?>