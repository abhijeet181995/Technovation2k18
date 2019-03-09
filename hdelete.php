<?php
include("config.php");
$em=$_POST["email"];
$e=$_POST["Events"];

$que="select *from technical1 where email='$em' and events='$e'";

          $res=mysqli_query($con,$que);
            if ($res->num_rows>0){
                
                $d="delete from technical1 where email='$em' and events='$e'";
                $res=mysqli_query($con,$d);
                
                    Print '<script type="text/javascript"> alert("Deletion Was Successful");</script>';
                    Print '<script>window.location.assign("profile.php");</script>';
                
            	
            }
else 
                {
                    Print '<script type="text/javascript"> alert("You are not Registered For This Event");</script>';
                    Print '<script>window.location.assign("profile.php");</script>';
                }

?>