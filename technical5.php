<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <?php
        include('config.php');
		$q="{$_SESSION['myemail']}";
        
    ?>
<body>

<h4 style="color:red;margin-left:5vw"> Before registering for Team Event, Please check the event details for maximum and minimum no. of participants. </h4>   
    
    
    <div class="container d-flex justify-content-center" style="margin-top:50px;"><div class="row">
        
     <div class="col-xs-12 col-sm-4   justify-content-center"> 	
    <h4 class="d-flex  justify-content-center">Registration Form</h4>
         <h5  >Once You Register For Team Event You Cannot Delete.</h5>
        </div>
        
        
           
            <div class="col-xs-12 col-sm-8">
<form action="thandler5.php" method="post">
    <div class="table-responsive">
	<table  class="table" >
		<tr  >
			<td>Registered E-MAIL 1</td>
			<td><select name="email1">
                <option><?php echo $q; ?></option>
                </select>
		</tr>
			<tr >
			<td>Registered E-MAIL 2</td>
			<td><input type="email" name="email2" placeholder="(OPTIONAL)"></td>
		</tr>
			<tr >
			<td>Registered E-MAIL 3</td>
			<td><input type="email" name="email3" placeholder="(OPTIONAL)"></td>
		</tr>
			<tr  >
			<td>Registered E-MAIL 4</td>
			<td><input type="email" name="email4" placeholder="(OPTIONAL)"></td>
		</tr>
			<tr   >
			<td>Registered E-MAIL 5</td>
			<td><input type="email" name="email5" placeholder="(OPTIONAL)"></td>
		</tr>
			<tr  >
			<td>TEAM NAME</td>
			<td><input type="text" name="tname" required></td>
		</tr>
		<tr   >
			<td>Events</td>
			<td><select name="Events" required><option> </option>
                <option>RoboSoccer</option><option>ROBOWAR</option> <option>Pathik</option ><option>Hurdle-mania</option><option>E-Quiz</option><option>Bridge it</option>
                <OPTION>Circuitex</OPTION><option>Smart Idea</option>
                <option>Rocket-Propulsion</option>
            <option>Identokit</option>
                <option>Davit</option>
                <option>Fast-Boot</option>
                <option>Unchained Reaction</option>
                <option>Modula</option>
    </select></td>
		</tr>
		<tr   >
            <td><button class="btn btn-info" type="submit" value="Submit" name="sub">Submit</button></td>
            <td> <button class="btn btn-info" type="reset" value="Reset" name="reset">Reset</button></td>
		</tr>
       
	</table>
                
    </div>
</form>
                
        </div>
        </div>
    </div>

</body>
</html>