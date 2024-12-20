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
require_once($_SERVER["DOCUMENT_ROOT"]."/app/config/Directories.php");

?>
<html>
	<body>
	<link href="/styles/NForm.css" type="text/css" rel="stylesheet"/>
		<div class="con">
			<div class="main">
			<?php include(ROOT_DIR."/app/includes/nsidenav.php"); ?>
							<div class="form">
								<h1 class="shs">&nbspSenior High</h1>
								<form action="/patient/add/shsad.php" method="POST">
					<div class="first">
									<p>Student Number:</p>
						<input type="text" id="sn" name="sn" required>
					</div>
					<table>
					<tr>
					<td width="24%">
									<p>First Name:</p>
						<input type="text" id="fn" name="fn" required>
					</td>
					<td width="24%">
									<p>Middle Name:</p>
						<input type="text" id="mn" name="mn" required>
					</td>
					<td width="24%">
									<p>Last Name:</p>
						<input type="text" id="ln" name="ln" required>
					</td>
					</tr>
					</table>
					<table>
					<tr>
					<td width="26%">
						<p>Strand</p>
						<select name="Strand">
						<option value="Select Type" selected hidden>Select Strand</option>
						<option value="TVLHRS">TVL-HRS</option>
						<option value="TVLICT">TVL-ICT</option>
						<option value="HUMMS">HUMMS</option>
						<option value="STEM">STEM</option>
						<option value="ABM">ABM</option>
						</select>
					</td>
					<td width="26%">
						<p>Grade:</p>
						<select id="g" name="g" required>
						<option value="Select Grade" selected hidden>Select Grade</option>
						<option value="G11">Grade 11</option>
						<option value="G12">Grade 12</option>
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
					<td width="18%">
						<p>Age:</p>
						<input type="text" id="a" name="a" required>
					</td>
					<td width="24%">
						<p>Sex</p>
						<select name="Sex">
						<option value="Select Sex" selected>Select Sex</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select>
					</td>
					<td width="24%">
						<p>Birthdate:</p>
						<input type="text" id="bd" name="bd" placeholder="(YYYY/MM/DD)" required>
					</td>
					</tr>
					</table>
					<table>
					<tr>
					<td width="18%">
						<p>Contact Number:</p>
							<input type="text" id="pc" name="pc" required>
					</td>
					<td width="42%">
						<p>Attending Doctor:</p>
							<input type="text" id="ad" name="ad" required>
					</td>
					<td width="18%">
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