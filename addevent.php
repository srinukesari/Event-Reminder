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
			<div class="lowlefta">
				<ul>
					<form action="sql3.php" method="post">
						<p> <b> <em> date </em> </b> </p>
						<br>
						<p><input type= "date" name="dater" placeholder="YYYY-MM-DD" required></p>
						<br>
						<p> <b> <em> event </em> </b> </p>
						<br>
						<p><input type="text" name="er" placeholder= "event to saved" required></p>
						<br>
						<br>
						<br>
						<br>
						<input type="submit" name="Add" value="Add">
					</form>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>