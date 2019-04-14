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
			$u=$_POST['username'];
			$p=$_POST['phone'];
			$e=$_POST['emailid'];
			$pas=$_POST['password'];
			$cpas=$_POST['cpassword'];
			$do=$_POST['dob'];
			session_start();
			$_SESSION['e']=$e;
			$_SESSION['u']=$u;
					 
			$sq="SELECT username FROM register";
			
			$sqe="SELECT email FROM register";
			
			$sqp="SELECT phone FROM register";
			
			$result = $conn->query($sq);
			$pr=mysqli_fetch_assoc($result);
			
			$result1 = $conn->query($sqe);
			$pr1=mysqli_fetch_assoc($result1);
			
			$result2 = $conn->query($sqp);
			$pr2=mysqli_fetch_assoc($result2);
			
			if ($u!=$pr['username']){
				if ($e!=$pr1['email']){
					if ($p!=$pr2['phone']){
						if ($pas==$cpas){
							$sql = "INSERT INTO register (username,email,password,dat,phone)VALUES('$u','$e','$pas','$do','$p')";
							if ($conn->query($sql) === TRUE) {
								header("location:mypro.php");
}
							else {echo "Error: " . $sql . "<br>" . $conn->error;}
							$conn->close();
						}
						else{ $msg="check your password";
							echo "<script type='text/javascript'>alert('$msg');</script>";
							// header("location:logphp.php");
							}
					}
					else{ $msg="phone number is already registered...!!!";
						echo "<script type='text/javascript'>alert('$msg');</script>";
						// header("location:sqllogphp.php");
						}
				}
				else{ $msg="email already registered use another one!";
					echo "<script type='text/javascript'>alert('$msg');</script>";
					// header("location:logphp.php");
					}
			}
			else{ $msg="username already exits";
				echo "<script type='text/javascript'>alert('$msg');</script>";
				// header("location:logphp.php");
				}
?>
</body>
</html>