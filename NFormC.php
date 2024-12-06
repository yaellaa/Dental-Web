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
						<td><i><center>Dental System</center></i><br/>
						</tr>
						<tr>
						<td>Forms
						<ul>
						<li><a href="NFormC.php"><button class="college">College</button></a></li>
						<li><a href="NFormS.php"><button>Senior High</button></a></li>
						<li><a href="NFormE.php"><button>Employee</button></a></li>
						</ul>
						</td>
						</tr>
						<tr>
						<td>Records
						<ul>
						<li><a href="NRC.php"><button>College</button></a></li>
						<li><a href="NRS.php"><button>Senior High</button></a></li>
						<li><a href=""><button>Employee</button></a></li>
						</ul>
						</td>
						</tr>
						<tr>
						<td><a href="Logout.php"><center>Logout</center></a></td>
						</tr>
					</table>
				</div>
				<div class="form">
					<h1 class="col">&nbspCollege</h1>
					<form action="collegead.php" method="POST">
					<div class="first">
					<p>Student Number:</p>
					<input type="text" id="sn" name="sn" required>
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
					<td width="65.7%">
					<p>Course</p>
					<select name="Course" required>
					<option value="Select Type" selected hidden>Select Course</option>
					<option value="BSA">BSA</option>
					<option value="BSBA">BSBA</option>
					<option value="BAComm">BAComm</option>
					<option value="BSIT">BSIT</option>
					<option value="BSN">BSN</option>
					<option value="BSP">BSP</option>
					<option value="BSHM">BSHM</option>
					<option value="BSEd">BSEd</option>
					<option value="BSPsych">BSPsych</option>
					<option value="BSTM">BSTM</option>
					<option value="BSTM">BSPharma</option>
					<option value="BSMT">BSPT</option>
					<option value="BSRT">BSRT</option>
					</select>
					</td>
					<td>
					<p>Year:</p>
					<select id="y" name="y" required>
						<option value="Select Year" selected hidden>Select Year</option>
						<option value="1">Year One</option>
						<option value="2">Year Two</option>
						<option value="3">Year Three</option>
						<option value="4">Year Four</option>
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
					<select name="Sex" required>
					<option value="Select Type" selected hidden>Select Sex</option>
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
					<br/><br/>
					<center>
					<input type="submit" name="Save" value="Save">
					</form>
					</center>
					</div>
			</div>
		</div>
	</body>
</html>