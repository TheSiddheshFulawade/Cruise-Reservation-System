<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Cruise
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="https://www.logolynx.com/images/logolynx/0c/0c6aed8e6bd876d5248058eb726aa11a.jpeg"/> 
		<h1 id="title">
		Cruise Reservation System
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h3>Oops! You need to login with a Customer Account to Book Tickets</h3>
	</body>
</html>