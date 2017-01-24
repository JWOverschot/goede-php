<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Goede PHP</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>
<body>
	<script type="text/javascript">
		setInterval( function(){
			$("#reload").load(location.href + "#reload");
		}, 1000);
	</script>
	<div id="reload">
		<?php
		date_default_timezone_set("Europe/Amsterdam");
		$time = date("H:i");
		if ($time >= "06:00" && $time < "12:00") {
			echo "<h1>GOEDE MORGEN!</h1>";
			echo "<style type='text/css'>body {background-image: url(backgrounds/morning.png);}</style>";
		}
		elseif ($time >= "12:00" && $time < "18:00") {
			echo "<h1>GOEDE MIDDAG!</h1>";
			echo "<style type='text/css'>body {background-image: url(backgrounds/afternoon.png);}</style>";
		}
		elseif ($time >= "18:00" && $time < "00:00") {
			echo "<h1>GOEDE AVOND!</h1>";
			echo "<style type='text/css'>body {background-image: url(backgrounds/evening.png);}</style>";
		}
		elseif ($time >= "00:00" && $time < "06:00") {
			echo "<h1>GOEDE NACHT!</h1>";
			echo "<style type='text/css'>body {background-image: url(backgrounds/night.png);}</style>";
		}
		echo "<p>$time</p>";
		?>
	</div>
</body>
</html>