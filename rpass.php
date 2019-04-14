<?php
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="eventr";
					$conn = new mysqli($servername, $username, $password,$dbname);
					if ($conn->connect_error){
						die("Connection failed: " . $conn->connect_error);
					} 
					$u=$_POST['user'];
					$phone=$_POST['phone'];
					$newp=$_POST['newp'];
					$rnewp=$_POST['rnewp'];
					
					$sql = "select phone from register where username='$u'";
					
					$sql1="update register set password='$newp' where username='$u'";
					
					$result = $conn->query($sql);
					$pr=mysqli_fetch_assoc($result);
					
					if ($pr['phone']==$phone){
						if ($newp==$rnewp){
							if ($conn->query($sql1) === TRUE) {
								$msg="password suceesfully changed ";
								echo "<script type='text/javascript'>alert('$msg');</script>";
								header("location:logphp2.php");
								}
							}
						else{ $msg="check your password";
							echo "<script type='text/javascript'>alert('$msg');</script>";
							// header("location:logphp2.php");
							}
					}else{ $msg="cant change the password invalid username or phone number";
							echo "<script type='text/javascript'>alert('$msg');</script>";
						// header("location:logphp2.php");
						}
					
					// $resultc = $conn->query($sql);
					// if (mysqli_num_rows($result) > 0){
						// echo '<span style="font-size: 25pt">'.'!!!...Upcoming events are...!!!<br><br>'.'</span>';
						// while($row = mysqli_fetch_assoc($result)) {echo '<i class="fa fa-bullhorn" style="font-size:32px";></i><i class="fa fa-file-audio-o" style="font-size:32px";></i><span style="font-size: 20pt">'.'Event on    '.$row["dat"].'       is       '.$row["event"].'<br>'.'</span>';}}
					// else {echo '<span style="font-size: 25pt">'."NO events Today".'</span>';}
					$conn->close();
?>