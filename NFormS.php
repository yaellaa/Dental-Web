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
						<li><a href="NFormC.php"><button>College</button></a></li>
						<li><a href="NFormS.php"><button class="shs">Senior High</button></a></li>
						<li><a href="NFormE.php"><button>Employee</button></a></li>
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
					<h1 class="shs">&nbspSenior High</h1>
					<form action="shsad.php" method="POST">
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
		<td width="42.5%">
						<p>Strand</p>
			<select name="Strand">
			<option value="Select Type" selected>Select Strand</option>
			<option value="TVLHRS">TVL-HRS</option>
			<option value="TVLICT">TVL-ICT</option>
			<option value="HUMMS">HUMMS</option>
			<option value="STEM">STEM</option>
			<option value="ABM">ABM</option>
			</select>
		</td>
		<td width="43%">
						<p>Grade:</p>
			<input type="text" id="g" name="g" required>
		</td>
		<td>
								<p>Section</p>
			<select name="Section" required>
			<option value="Select Section" selected hidden>Select Section</option>
			<option value="Mabini">Albert Einstein</option>
			<option value="Pelaez">Galileo Galilei</option>
			<option value="Diana">Euclid</option>
			<option value="Jacinto">Isaac Newton</option>
			<option value="Aquino">Nikola Tesla</option>
			<option value="Bonifacio">Charles Darwin</option>
			<option value="Zeus">Aristotle</option>
			<option value="Aphrodite">Blaise Pascal</option>
			<option value="Helios">Nelson Mandela</option>
			<option value="Hermes">Plato</option>
			<option value="Zeus">Alaine Ducasse</option>
			<option value="Zeus">Alfred Marshall</option>
			<option value="Zeus">Copernicus</option>
			<option value="Zeus">Pythagoras</option>

			</select>
		</td>
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
			<option value="Select Sex" selected>Select Sex</option>
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