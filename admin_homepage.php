<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome Administrator
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
		<h2>Welcome Administrator!</h2>
		<table cellpadding="5">
			
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-ship" aria-hidden="true"></i> View List of Booked Tickets for a Cruise</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-ship" aria-hidden="true"></i> Add Cruise Schedule Details</a>
				</td>
			</tr>
			<!-- <tr>
				<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a>
				</td>
			</tr> -->
			<tr>
				<td class="admin_func"><a href="delete_flight_details.php"><i class="fa fa-ship" aria-hidden="true"></i> Delete Cruise Schedule Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_jet_details.php"><i class="fa fa-ship" aria-hidden="true"></i> Add Cruise Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="activate_jet_details.php"><i class="fa fa-ship" aria-hidden="true"></i> Activate Cruise</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="deactivate_jet_details.php"><i class="fa fa-ship" aria-hidden="true"></i> Deactivate Cruise</a>
				</td>
			</tr>
		</table>
	</body>
</html>