<?php
include("config.php");
$a=array();
$a[0]=$_POST["email1"];
$a[1]=$_POST["email2"];
$a[2]=$_POST["email3"];
$a[3]=$_POST["email4"];
$a[4]=$_POST["email5"];
$t=$_POST['tname'];
$e=$_POST["Events"];
$j=0;
$m=0;
$error=0;
if ($a[0]==NULL)
{
    
}
else if ($a[0]==$a[1] )
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}

if ($a[1]==NULL)
{
    
}
else if ($a[0]==$a[2])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}
if ($a[0]==NULL)
{
    
}
else if ($a[0]==$a[3])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}

if ($a[0]==NULL)
{
    
}
else if ($a[0]==$a[4])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}

if ($a[1]==NULL)
{
    
}
else if ($a[1]==$a[2])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}
if ($a[1]==NULL)
{
    
}
else if ($a[1]==$a[3])
{
   Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}

if ($a[1]==NULL)
{
    
}
else if ($a[1]==$a[4])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}

if ($a[2]==NULL)
{
    
}
else if ($a[2]==$a[3])
{
   Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}
if ($a[2]==NULL)
{
    
}
else if ($a[2]==$a[4])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}
if ($a[3]==NULL)
{
    
}
else
if ($a[3]==$a[4])
{
    Print '<script type="text/javascript"> alert("Two Or More Emails are Same");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    $error=1;
}
$q1="select * from main where email='$a[0]'";
$r1 = mysqli_query($con, $q1);
if (mysqli_num_rows($r1) > 0)
{ $m++;
}
$q2="select * from main where email='$a[1]'";
$r2 = mysqli_query($con, $q2);

if (mysqli_num_rows($r2) > 0)
{ $m++;
}


$q3="select * from main where email='$a[2]'";
$r3 = mysqli_query($con, $q3);
if (mysqli_num_rows($r3) > 0)
{ $m++;
}

$q4="select * from main where email='$a[3]'";
$r4= mysqli_query($con, $q4);
if (mysqli_num_rows($r4) > 0)
{ $m++;
}

$q5="select * from main where email='$a[4]'";
$r5 = mysqli_query($con, $q5);
if (mysqli_num_rows($r5) > 0)
{ $m++;
}

$q1="SELECT * FROM `technical5` WHERE ( (EVENTS='$e') AND ( email1='$a[0]' OR email2='$a[0]' OR email3='$a[0]' OR email4='$a[0]' OR email5='$a[0]' ) )";
$r1 = mysqli_query($con,$q1);
if (mysqli_num_rows($r1) > 0)
{
    Print '<script type="text/javascript"> alert("User One is already registered for this event");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
}
else { $m++;}


if ($a[1]==NULL)
{
    $m++;
}
else 
{


$q2="SELECT * FROM `technical5` WHERE ( (EVENTS='$e') AND ( email1='$a[1]' OR email2='$a[1]' OR email3='$a[1]' OR email4='$a[1]' OR email5='$a[1]' ) )";
$r2 = mysqli_query($con,$q2);
if (mysqli_num_rows($r2) > 0)
{
    Print '<script type="text/javascript"> alert("User Two is already registered for this event");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
}
else $m++;
}


if($a[2]==NULL){$m++;}
else
{
   $q3="SELECT * FROM `technical5` WHERE ( (EVENTS='$e') AND ( email1='$a[2]' OR email2='$a[2]' OR email3='$a[2]' OR email4='$a[2]' OR email5='$a[2]' ) ) ";
$r3 = mysqli_query($con,$q3);
if (mysqli_num_rows($r3) > 0)
{
    Print '<script type="text/javascript"> alert("User Three is already registered for this event");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
} 
    else $m++;
}

if($a[3]==NULL){$m++;}
else
{
   $q4="SELECT * FROM `technical5` WHERE ( (EVENTS='$e') AND ( email1='$a[3]' OR email2='$a[3]' OR email3='$a[3]' OR email4='$a[3]' OR email5='$a[3]' ) ) ";
$r4 = mysqli_query($con,$q4);
if (mysqli_num_rows($r4) > 0)
{
    Print '<script type="text/javascript"> alert("User Fourth is already registered for this event");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
} 
    else $m++;
}

if($a[4]==NULL){$m++;}
else
{
   $q5="SELECT * FROM `technical5` WHERE ( (EVENTS='$e') AND ( email1='$a[4]' OR email2='$a[4]' OR email3='$a[4]' OR email4='$a[4]' OR email5='$a[4]' ) ) ";
$r5 = mysqli_query($con,$q5);
if (mysqli_num_rows($r5) > 0)
{
    Print '<script type="text/javascript"> alert("User 5th is already registered for this event");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
} 
    else $m++;
}


if($m==10)
{
$que="select *from technical5 where events='$e' and team_name='$t'";
$res=mysqli_query($con,$que);
    for ($i=0; $i <5 ; $i++) { 
      while($row = mysqli_fetch_assoc($res)) {
          
        if($a[$i]==$row["email1"]) 
        {
            $j++;
        }
      elseif (($a[$i]==$row["email2"])) {
        	$j++;
        } 
       elseif (($a[$i]==$row["email3"])) {
        	$j++;
       } 
         elseif (($a[$i]==$row["email4"])) {
        	$j++;
        }    
         elseif (($a[$i]==$row["email5"])) {
        	$j++;
        }
        else
        $j=0; 
    }
    }
        if ($j>0) {
            Print '<script type="text/javascript"> alert("ERROR ");</script>';
            Print '<script>window.location.assign("profile.php");</script>';
            
                }                 

else{
    if ($error==0)
    {
$q="insert into technical5(email1,email2,email3,email4,email5,team_name,events) values('$a[0]','$a[1]','$a[2]','$a[3]','$a[4]','$t','$e')";
    }

if(mysqli_query($con,$q))
{
    if ($error==0)
    {
	Print '<script>window.location.assign("profile.php");</script>';
    }
}
    else 
    {
        Print '<script type="text/javascript"> alert("TEAM Name is must be Unique for each Event.Try With Some Other Name ");</script>';
            Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
    }
}
}
else
{
    Print '<script type="text/javascript"> alert("One Of your Team member has not Registered Yet  REGISTER FIRST");</script>';
        Print '<script>window.location.assign("technicaleventregisteration.php");</script>';
}
?>