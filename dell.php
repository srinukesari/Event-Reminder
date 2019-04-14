<html>
<head>
	<title> eventR </title>
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
			session_start();
			// $_SESSION['imp']=$u;
			$u=$_SESSION['imp'];
			$dat=$_POST['dater'];
			// echo $p;
			$sq="delete from eventr where username='$u' and dat='$dat' ";
			if ($conn->query($sq) === TRUE) {header("location:home.php");}
			else {echo "Error: " . $sq . "<br>" . $conn->error;}
			// $result = $conn->query($sq);
			// $pr=mysqli_fetch_assoc($result);
			// echo $pr['password'];
			// if($pr['password']==$p){
			// header("location:home.php");}
			// else{echo "<h1>Invalid username or password</h1>";}
			// else {echo "Error: " . $sq . "<br>" . $conn->error;}
		

			$conn->close();
?>
	
	
</body>
</html>
