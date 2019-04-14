<html>
<head>
	<title> eventR </title>
	<link rel="stylesheet" href="sigcss.css">
</head>
<body>
<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="eventr";
			$conn = new mysqli($servername, $username, $password,$dbname);
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
			// echo "Connected successfully";
			$u=$_POST['userid'];
			session_start();
			$_SESSION['imp']=$u;
			$p=$_POST['password'];
			// echo $p;
			$sq="SELECT password FROM register WHERE username='$u'";
			$result = $conn->query($sq);
			$pr=mysqli_fetch_assoc($result);
			// echo $pr['password'];
			if($pr['password']==$p){
			header("location:home.php");}
			else{echo "<h1>Invalid username or password</h1>";}
			// else {echo "Error: " . $sq . "<br>" . $conn->error;}
			$conn->close();
?>
</body>
</html>