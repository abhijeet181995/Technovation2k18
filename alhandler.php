<?php
include("config.php");
$em=$_POST["email"];
$p=$_POST["pass"];
$a="select *from admin where email='$em' and password='$p'";
$res=mysqli_query($con,$a);
if(mysqli_num_rows($res)>0)
{
		session_start();
		$_SESSION['email']=$em;
		$_SESSION['a']=1;
	   header("location:adminprofile.php");
}
else
{	session_start();
		
		$_SESSION['login_error']='login failed';
	       header("location:adminlogin.php");

}
?>