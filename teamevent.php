<html>
    <head>
    <title></title>
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
        
        	<div id="header"><CENTER><h1>ADMIN PANEL</h1></CENTER>
        
    
    <?php
    session_start();
    if(!isset($_SESSION['a']))
		{
			header("location:adminlogin.php");
		}
		include('config.php');
		$q="select name from admin where email='{$_SESSION['email']}'";
		 $res=mysqli_query($con,$q);
       $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    ?>
    <h2>WELCOME :<?php foreach ($row as $key => $value) {   
              echo"$value </br>";}
               ?></h2>
    <button><?php echo "<a href='adminlogout.php'>logout</a>"; ?></button>
        
    <button> <a href="adminprofile.php">Admin Profile</a></button>
                <button><a href="eventwise.php">Solo Event</a></button>
	</div>
        
        
        
    <CENTER><h3> Team Events</h3></CENTER><br><br>
    <CENTER><h5> Bridge it</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Bridge it'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
        
        
            <CENTER><h5>Circuitex</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Circuitex'";
        $res=mysqli_query($con,$sql);
                   if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5>Davit</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Davit'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5>E-Quiz</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='E-Quiz'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
        
            <CENTER><h5>Fast-Boot</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Fast-Boot'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5>Hurdle-Mania</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Hurdle-mania'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5>Identokit</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Identokit'";
        $res=mysqli_query($con,$sql);
                   if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5> Pathik</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Pathik'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td> <td></td> <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5>Unchained Reaction</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Unchained Reaction'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5> RoboSoccer</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='RoboSoccer'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5>ROBOWAR</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='ROBOWAR'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td> <td></td> <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5> Rocket-Propulsion</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Rocket-Propulsion'";
        $res=mysqli_query($con,$sql);
if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5> Smart Idea</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Smart Idea'";
        $res=mysqli_query($con,$sql);
                   if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
            <CENTER><h5> Modula</h5></CENTER>
    
    <div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="SELECT team_name,email1,email2,email3,email4,email5 from  technical5 where events='Modula'";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th> <th>Team Name</th><th>Email</th><th>Name</th><th>Mobile</th><th>Fee</th></tr>";
            $i=1;
       while($row = mysqli_fetch_assoc($res)) {
             $email=$row["email1"] ;
             $s="select name,fee,mobile from main where email='$email'";
              $te=mysqli_query($con,$s);
             $ti=mysqli_fetch_assoc($te);
             
             $email2=$row["email2"] ;
             $s2="select name,fee,mobile from main where email='$email2'";
              $te2=mysqli_query($con,$s2);
             $ti2=mysqli_fetch_assoc($te2);
             
             $email3=$row["email3"] ;
             $s3="select name,fee,mobile from main where email='$email3'";
              $te3=mysqli_query($con,$s3);
             $ti3=mysqli_fetch_assoc($te3);
             
             $email4=$row["email4"] ;
             $s4="select name,fee,mobile from main where email='$email4'";
              $te4=mysqli_query($con,$s4);
             $ti4=mysqli_fetch_assoc($te4);
             
             $email5=$row["email5"] ;
             $s5="select name,fee,mobile from main where email='$email5'";
              $te5=mysqli_query($con,$s5);
             $ti5=mysqli_fetch_assoc($te5);
           
            echo "<tr><td> $i </td>   <td > " .$row["team_name"] . " </td>
            <td> " .$row["email1"] . " </td><td>".$ti["name"] ."</td><td>".$ti["mobile"] ."</td> <td>".$ti["fee"] ."</td></tr> 
            
            <tr><td>  </td> <td>  </td> <td> " .$row["email2"] . " </td><td>".$ti2["name"] ."</td><td>".$ti2["mobile"] ."</td> <td>".$ti2["fee"] ."</td> </tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email3"] . " </td><td>".$ti3["name"] ."</td><td>".$ti3["mobile"] ."</td> <td>".$ti3["fee"] ."</td></tr> 
            <tr><td>  </td>  <td>  </td><td> " .$row["email4"] . " </td><td>".$ti4["name"] ."</td><td>".$ti4["mobile"] ."</td> <td>".$ti4["fee"] ."</td></tr>
            <tr> <td>  </td> <td>  </td><td> " .$row["email5"] . " </td><td>".$ti5["name"] ."</td><td>".$ti5["mobile"] ."</td> <td>".$ti5["fee"] ."</td> </tr>
           
             <tr style=\"background-color:black; height=1vh\"><td></td><td></td>  <td></td><td></td><td></td><td></td></tr>";
           $i++;
          }
                            }  
	echo "</table>";
    echo "</div>";
       
		?>
		

		</div>
    </div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    </html>