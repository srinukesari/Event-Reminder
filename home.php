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
			<a  class="ac"><i class="fa fa-user" style="font-size:28px";> Hello <?php session_start(); $u=$_SESSION['imp']; echo $u;?></i></a>
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
				
			<?php echo '<span style="font-size: 25pt">'.'!!!...Upcoming holidays are...!!!<br><br>'.'</span>';?>
				<ul>
					<canvas id="canvas" width="250" height="250"
					style="background-color:transparent">
					</canvas>

					<script>
					var canvas = document.getElementById("canvas");
					var ctx = canvas.getContext("2d");
					var radius = canvas.height / 2;
					ctx.translate(radius, radius);
					radius = radius * 0.9
					setInterval(drawClock, 1000);

					function drawClock() {
					  drawFace(ctx, radius);
					  drawNumbers(ctx, radius);
					  drawTime(ctx, radius);
					}

					function drawFace(ctx, radius) {
					  var grad;
					  ctx.beginPath();
					  ctx.arc(0, 0, radius, 0, 2*Math.PI);
					  ctx.fillStyle = 'white';
					  ctx.fill();
					  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
					  grad.addColorStop(0, 'blue');
					  grad.addColorStop(0.5, 'black');
					  grad.addColorStop(1, 'gray');
					  ctx.strokeStyle = grad;
					  ctx.lineWidth = radius*0.1;
					  ctx.stroke();
					  ctx.beginPath();
					  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
					  ctx.fillStyle = 'black';
					  ctx.fill();
					}

					function drawNumbers(ctx, radius) {
					  var ang;
					  var num;
					  ctx.font = radius*0.15 + "px samp";
					  ctx.textBaseline="middle";
					  ctx.textAlign="center";
					  for(num = 1; num < 13; num++){
						ang = num * Math.PI / 6;
						ctx.rotate(ang);
						ctx.translate(0, -radius*0.85);
						ctx.rotate(-ang);
						ctx.fillText(num.toString(), 0, 0);
						ctx.rotate(ang);
						ctx.translate(0, radius*0.85);
						ctx.rotate(-ang);
					  }
					}

					function drawTime(ctx, radius){
						var now = new Date();
						var hour = now.getHours();
						var minute = now.getMinutes();
						var second = now.getSeconds();
						//hour
						hour=hour%12;
						hour=(hour*Math.PI/6)+
						(minute*Math.PI/(6*60))+
						(second*Math.PI/(360*60));
						drawHand(ctx, hour, radius*0.5, radius*0.07);
						//minute
						minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
						drawHand(ctx, minute, radius*0.8, radius*0.07);
						// second
						second=(second*Math.PI/30);
						drawHand(ctx, second, radius*0.9, radius*0.02);
					}

					function drawHand(ctx, pos, length, width) {
						ctx.beginPath();
						ctx.lineWidth = width;
						ctx.lineCap = "round";
						ctx.moveTo(0,0);
						ctx.rotate(pos);
						ctx.lineTo(0, -length);
						ctx.stroke();
						ctx.rotate(-pos);
					}
					</script>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>