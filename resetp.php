<html>
	<head> 
		<title> RESET PASSWORD </title>
		<link rel="stylesheet" type="text/css" href="resetp.css">
	</head>
</html>
<body>
	<h1> RESET YOUR PASSWORD </h1>

	<div class="Reset">
		<form action="rpass.php" method="post">
			<input type="text" name="user" placeholder= "registered username">
			<br>
			<input type="text" name="phone" placeholder= "registered phone number">
			<br>
			<input type="password" name="newp" placeholder= "Set a New Password">
			<br>
			<input type="password" name="rnewp" placeholder= "Re-enter New Password">
			<br>
			<input type="submit" name="Login" value="RESET MY PASSWORD">
			<br>
			<p id="p2"> Back to <a  href="logphp2.php" target="_self"> Login </a> page </p>
		</form>
	</div>
</body>