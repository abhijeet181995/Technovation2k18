<?php
include("config.php");
$nm=$_POST["name"];
$em=$_POST["email"];
$p=$_POST["pass"];
$c=$_POST["cn"];
$m=$_POST["mob"];
$q="insert into main(name,email,password,college_name,mobile) values('$nm','$em','$p','$c','$m')";

if(mysqli_query($con,$q))
{
    session_start();
		$_SESSION['myemail']=$em;
		$_SESSION['active']=1;
	header("location:profile.php");
	//header("location:thank.php?msg=success");
}
else 
{
    Print '<script type="text/javascript"> alert("This Email is already  Registered, please login ");</script>';
        Print '<script>window.location.assign("studentlogin.php");</script>';
    echo "You are already Registered";
}
?>


