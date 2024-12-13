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
					<h1 class="emp">&nbspEmployee</h1>
					<form action="/patient/add/employeead.php" method="POST">
						<div class="first">
										<p>ID Number:</p>
							<input type="text" id="in" name="in" required>
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
						<td width="18%">
						<p>Unit</p>
							<select name="Unit">
							<option value="Select Type" selected>Select Department</option>
							<option value="Teaching">Teaching</option>
							<option value="Non-Teaching">Non-Teaching</option>
							</select>
						</td>
						<td width="18%">
						<p>Department</p>
							<select name="Department" required>
							<option value="Select Type" selected hidden>Select Department</option>
							<option value="Teach" hidden>-- Teaching --</option>
							<option value="BEdPreschool">Basic Education (Preschool)</option>
							<option value="BEdElem">Basic Education (Elementary)</option>
							<option value="BEdJHS">Basic Education (Junior High School)</option>
							<option value="BEdSHS">Basic Education (Senior High School)</option>
							<option value="HEdSCMCS">Higher Education (SCMCS)</option>
							<option value="HEdSMLS">Higher Education (SMLS)</option>
							<option value="HEdSIHTM">Higher Education (SIHTM)</option>
							<option value="HEdSASE">Higher Education (SASE)</option>
							<option value="HEdSNAHS">Higher Education (SNAHS)</option>
							<option value="NonTeach" hidden>-- Non-Teaching --</option>
							<option value="BAO">BAO</option>
							<option value="Canteen">Canteen Staff</option>
							<option value="DLRC">DLRC</option>
							</select>
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
							<select name="Sex" required>
							<option value="Select Type" selected hidden>Select Sex</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							</select>
						</td>
						<td width="18%">
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