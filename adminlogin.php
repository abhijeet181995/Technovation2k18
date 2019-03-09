<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		body
		{
			background: radial-gradient(#42b3f4,#417df4,#f141f4);
		}
		h1 {
         text-shadow: 2px 2px red;
         font-size: 40px;
         letter-spacing: 5px;
         text-decoration: underline;
           }
	</style>
</head>
<body>
<div style="height: 150px;width: 80%;text-align: center;color: white;">
	<h1>ADMINISTRATOR LOGIN</h1>
</div>
<button><a href="studentlogin.php">BACK</a></button>
<CENTER>
<div style="width:300px;height:180px;background-color:grey;border:2px solid grey;border-radius:5px;">
<form action="alhandler.php" method="post">
<table cellspacing="30px;">
<tr>
<th style="color:white;">Email_id</th><td><input type="text" name="email" placeholder="Enter the Email_id;" required></td>
</tr>
<tr>
<th style="color:white;">Password</th><td><input type="password" name="pass"placeholder="Enter the Password;" required></td>
</tr>
<tr>
<td></td><td style="padding:20px;" ><input type="submit" value="submit" name="txt3" class="txt2">
<input type="reset"  value="reset" class="txt2"/></td>
</tr>
</table>
</form>
</div>
    </CENTER>

</body>
</html>