<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Cruise Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
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
		<form action="add_jet_details_form_handler.php" method="post">
			<h2>ENTER THE CRUISE DETAILS</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Cruise has been successfully added.</strong>
						<br><br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Cruise ID already exists, please enter a new Cruise ID.</strong>
						<br><br>";
				}
			?>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter a valid Cruise ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Cruise Type/Model</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_type" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the total capacity of the Cruise</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" name="jet_capacity" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>