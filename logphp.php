<html>
<head>
	<title> eventR </title>
	<link rel="stylesheet" href="sigcss.css">
</head>
<body>
	<h1> WELCOME TO eventR! </h1>
	<div class="signup">
		<form action="sql.php" method="post">
			<p> <b> <em> User Name </em> </b> </p>
			<input type="text" name="username" placeholder="Set a UserName" required>
			<p> <b> <em> Email Id </em> </b> </p>
			<input type="text" name="emailid" placeholder="Enter your Email Id" required>
			<p> <b> <em> Date of Birth </em> </b> </p>
			<input type="date" name="dob" placeholder="Enter your Date of Birth" required>
			<p for="Gender"> <b> <em> Gender </em> </b> </p>
			<input type="radio" name="Gender" value="Male" checked> Male
  			<input type="radio" name="Gender" value="Female"> Female
  			<input type="radio" name="Gender" value="Other"> Other
			<p> <b> <em> Mobile Number </em> </b> </p>
			<input type= "text" name="phone" placeholder="Enter your Mobile Number" required>
			<p> <b> <em> Password </em> </b> </p>
			<input type="Password" name="password" placeholder= "Set ur Password" required>
			<p> <b> <em> Confirm Password </em> </b> </p>
			<input type="Password" name="cpassword" placeholder= "Confirm Password" required>
			<br>
			<br>
			<input type="submit" name="Signup" value="SIGN UP">
			<p id="p1"> Back to <a  href="logphp2.php" target="_self"> Login </a> page </p>
		</form>
		
	</div>
</body>
</html>