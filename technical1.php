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
	
     <div class="container d-flex justify-content-center" style="margin-top:50px;"><div class="row">
        
     <div class="col-xs-12 col-sm-4  d-flex justify-content-center"> 
         
             <h4>SOLO Event</h4>
</div>
    

        
           
            <div class="col-xs-12 col-sm-8">

   
<form action="thandler1.php" method="post">
	<div class="table-responsive" style="margin-left:3vw">
	<table  class="table" >
		<tr>
			<td>Registered E-MAIL</td>
			<td><select name="email">
                <option><?php echo $q; ?></option>
                </select>
		</tr>
		<tr>
			<td>Events</td>
		  <td><select name="Events" required><option> </option><option>Code-Golf</option> <OPTION>C Legacy</OPTION><OPTION>Codervation</OPTION><OPTION>Bug D Code</OPTION><OPTION>Web Dextro</OPTION><option>Canvas</option><option>M-Quiz</option><option>Auto-Quiz</option>
		  	<OPTION>Type Racer</OPTION></select></td>
		</tr>
		<tr>
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