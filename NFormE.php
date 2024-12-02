<?php
session_start();
$databaseHost = 'localhost';
$databaseName = 'dental';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
date_default_timezone_set('Asia/Manila');
$date = date('F j, Y');
$time = date('g:i a');
?>
<html>
	<body>
	<link href="NForm.css" type="text/css" rel="stylesheet"/>
		<div class="con">
			<div class="main">
				<div class="nav">
					<table>
						<tr>
						<td class="dental"><i><center>Dental System</center></i><br/>
						</tr>
						<tr>
						<td>Forms
						<ul>
						<li><a href="NFormC.php"><button>College</button></a></li>
						<li><a href="NFormS.php"><button>Senior High</button></a></li>
						<li><a href="NFormE.php"><button class="emp">Employee</button></a></li>
						</ul>
						</td>
						</tr>
						<tr>
						<td>Records
						<ul>
						<li><a href="NRC.php"><button>College</button></a></li>
						<li><a href="NRS.php"><button>Senior High</button></a></li>
						<li><a href="NRE.php"><button>Employee</button></a></li>
						</ul>
						</td>
						</tr>
						<tr>
						<td><a href="Login.php"><center>Logout</center></a></td>
						</tr>
					</table>
				</div>
				<div class="form">
					<h1 class="emp">&nbspEmployee</h1>
					<form action="employeead.php" method="POST">
		<div class="first">
						<p>ID Number:</p>
			<input type="text" id="in" name="in" required>
		</div>
		<table>
		<tr>
		<td width="50%">
						<p>First Name:</p>
			<input type="text" id="fn" name="fn" required>
		</td>
		<td width="50%">
						<p>Middle Name:</p>
			<input type="text" id="mn" name="mn" required>
		</td>
		<td width="50%">
						<p>Last Name:</p>
			<input type="text" id="ln" name="ln" required>
		</td>
		</tr>
		</table>
		<table>
		<tr>
		<td width="70%">
						<p>Unit</p>
			<select name="Unit">
			<option value="Select Type" selected>Select Dapartment</option>
			<option value="Teaching">Teaching</option>
			<option value="Non-Teaching">Non-Teaching</option>
			</select>
		</td>
		<td>
						<p>Department</p>
			<select name="Department">
			<option value="Select Type" selected>Select Dapartment</option>
			<option value="CAM">CAM</option>
			<option value="CAS">CAS</option>
			<option value="MDCon">MDCon</option>
			</select>
		</td>
		</tr>
		</table>
		<table>
		<tr>
		<td width="51%">
						<p>Age:</p>
			<input type="text" id="a" name="a" required>
		</td>
		<td width="70%">
						<p>Sex</p>
			<select name="Sex">
			<option value="Select Type" selected>Select Sex</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			</select>
		</td>
		<td>
						<p>Birthdate:</p>
			<input type="text" id="bd" name="bd" placeholder="(MM/DD/YY)" required>
		</td>
		</tr>
		</table>
		<table>
		<tr>
		<td width="41%">
						<p>Contact Number:</p>
			<input type="text" id="pc" name="pc" required>
		</td>
		<td width="41%">
						<p>Attending Doctor:</p>
			<input type="text" id="ad" name="ad" required>
		</td>
		<td>
						<p>Guardian's Contact Number:</p>
			<input type="text" id="gpc" name="gpc" required>
		</td>
		</tr>
		</table>
		<br/><br/><br/>
		<center>
		<input type="submit" name="Save" value="Save">
		</center>
			</form>  
					</center>
					</div>
			</div>
		</div>
	</body>
</html>