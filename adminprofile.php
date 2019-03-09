<!DOCTYPE html>
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
        
    <button> <a href="eventwise.php">Solo Event</a></button>
    <button> <a href="teamevent.php">Team Event</a></button>
	</div>
		<div id="container">
            <!--div style="height: 30px;"></div-->
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:50px;">
            
			<?php
		
		include('config.php');
        $sql="select *from main";
        $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
              echo "<tr><th>S.No</th><th>Name</th><th>Email</th><th>College_name</th><th>Contact_no.</th><th>FEE Status</th></tr>";
            $i=0;
       while($row = mysqli_fetch_assoc($res)) {
           if ($i==0)
           {
               //hello;
           }
           else 
           {
           
            echo "<tr><td> $i </td> <td> " .$row["name"] . " </td> <td> " .$row["email"] . " </td> <td> " .$row["college_name"] . " </td> <td> " .$row["mobile"] . " </td> <td> " .$row["fee"] . " </td>  </tr>";
           
           }
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