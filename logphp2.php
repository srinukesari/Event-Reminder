<html>
<head>
	<title> LOGIN </title>
	<link rel="stylesheet" href="logcs.css">
</head>
<body>
	<h1 style="color:white" > LOGIN </h1>
	<div class="login">
		<h2>  </h2>
		<form action="sql2.php" method="post">
			<p> <b> <em> User Id </em> </b> </p>
			<input type= "text" name="userid" placeholder="Enter your User Id" required>
			<p> <b> <em> Password </em> </b> </p>
			<input type="Password" name="password" placeholder= "Enter your Password" required>
			<br>
			<br>
			<input type="submit" name="login" value="LOGIN"> 
			<br>
			<a  href="resetp.php"> Forgot Password ? </a> <br>
			<a  href="sign.php" target="_self"> Sign Up </a> 
		</form>
	</div>
</body>
</html>
