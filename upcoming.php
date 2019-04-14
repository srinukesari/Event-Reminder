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
			<div class="lowleftu">
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="eventr";
					$conn = mysqli_connect($servername, $username, $password,$dbname);
					if (!$conn){
						die("Connection failed: " . mysqli_connect_error());
					}
					// echo "Connected successfully";
					// session_start();
					$u=$_SESSION['imp'];
					// echo $u;
					$sql = "select * from eventr where dat>(select curdate()) and username='$u' order by dat limit 5";
					// $resultc = $conn->query($sql);
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0){
						echo '<span style="font-size: 25pt">'.'!!!...Upcoming events are...!!!<br><br>'.'</span>';
						while($row = mysqli_fetch_assoc($result)) {echo '<i class="fa fa-bullhorn" style="font-size:32px";></i><i class="fa fa-file-audio-o" style="font-size:32px";></i><span style="font-size: 20pt">'.'Event on    '.$row["dat"].'       is       '.$row["event"].'<br>'.'</span>';}}
					else {echo '<span style="font-size: 25pt">'."NO upcomig events found".'</span>';}
					mysqli_close($conn);
					?>
			</div>
		</div>
	</div>
</body>
</html>