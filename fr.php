<html>
<head>
<head>
	<title> home</title>
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="home">
		<div class="up">
			<a href="home.php" class="hbsp"><i class="fa fa-home" style="font-size:28px";>  HOME</i></a>
			<a href='#' class="ac"><i class="fa fa-user" style="font-size:28px";> Hello <?php session_start(); $u=$_SESSION['imp']; echo $u;?></i></a>
			<a href="logphp2.php" class="button"><i class="fa fa-expeditedssl" style="font-size:28px";> signout</i></a>
		</div>
		<div class="low">
			<div class="lowright">
				<a href="checkit.php" class="button"><i class="fa fa-tripadvisor" style="font-size:32px";>   Check-It</i></a>
				<a href="addevent.php" class="button"><i class="fa fa-edit" style="font-size:32px";>  Add Event</i></a>
				<a href="upcoming.php" class="button"><i class="fa fa-road" style="font-size:32px";>  UpComing</i></a>
				<a href="friendevent.php" class="button"><i class="fa fa fa-users" style="font-size:32px";>  Friend Events</i></a>
				<a href="delete.php" class="button"><i class="fa fa-close" style="font-size:32px";>  Delete Event</i></a>
				<a href="anyholidays.php" class="button"><i class="fa fa-calendar-check-o" style="font-size:32px";>  Any Holidays</i></a>
			</div>
			<div class="lowleftct">
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="eventr";
					$conn = mysqli_connect($servername, $username, $password,$dbname);
					if (!$conn){
						die("Connection failed: " . mysqli_connect_error());
					}
					$u=$_SESSION['imp'];
					$fr=$_POST['fr'];
					$da=$_POST['dater'];
					$sql = "select event from eventr where dat='$da' and username='$fr'";
					$sql3="select phone from register where username='$fr'";
					$result = mysqli_query($conn, $sql);
					$result3 = mysqli_query($conn, $sql3);
					if (mysqli_num_rows($result3) > 0){
						if (mysqli_num_rows($result) > 0){
							echo '<span style="font-size: 35pt">'.'!!!...your friend '.$fr .' has  events on '.$da .'  are...!!!</span><br>';
							while($row = mysqli_fetch_assoc($result)) {echo '<span style="font-size: 25pt"><br>'. $row["event"].'</span>';}}
						else {echo '<span style="font-size: 32pt">' .'!!! your friend '.$fr.' is free on that day...!!!'. '</span>';
						echo '<span style="font-size: 20pt">'.'...ThankYou...'.'</span>';}
					}
					else{
					echo '<span style="font-size: 32pt">' .'!!!sorry  your friend '.$fr.' is not yet registered for event remainder...!!!'. '</span>';}
					
					mysqli_close($conn);
					?>
			</div>
		</div>
	</div>
</body>
</html>
