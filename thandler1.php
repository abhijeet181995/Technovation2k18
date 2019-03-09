<?php
include("config.php");
$em=$_POST["email"];
$e=$_POST["Events"];

$sql="select *from main where email='$em'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
$que="select *from technical1 where email='$em' and events='$e'";

          $res=mysqli_query($con,$que);
            if ($res->num_rows>0){
                Print '<script type="text/javascript"> alert("Event is Already Registered");</script>';
                Print '<script>window.location.assign("profile.php");</script>';
            }        

else{ 
$q="insert into technical1(email,events) values('$em','$e')";

if(mysqli_query($con,$q))
{
	 Print '<script type="text/javascript"> alert("Event Registration Successful");</script>';
                Print '<script>window.location.assign("profile.php");</script>';
}
}
}

?>