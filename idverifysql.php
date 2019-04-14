<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
				}
					// echo "Connected successfully";
					// session_start();
			$id=$_POST['idverify'];
			// echo $u;
			//$sql = "select event from eventr where dat=(select curdate()) and username='$u'";
					// $resultc = $conn->query($sql);
			//$result = mysqli_query($conn, $sql);
			//if (mysqli_num_rows($result) > 0){
				//echo '!!!...Today events are...!!!';
				//while($row = mysqli_fetch_assoc($result)) {echo "<br>\t"."\t". $row["event"]."  ";}}
			//else {echo "NO events Today";}
			echo $id;
			mysqli_close($conn);
?>