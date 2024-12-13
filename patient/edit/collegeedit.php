<?php
$databaseHost = 'localhost';
$databaseName = 'dental';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


session_start();
if(isset($_POST['cancel']))
{
	header("Location: /forms/nurse/NRC.php");
}
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$sn = mysqli_real_escape_string($mysqli, $_POST['sn']);
	$fn = mysqli_real_escape_string($mysqli, $_POST['fn']);
	$mn = mysqli_real_escape_string($mysqli, $_POST['mn']);
	$ln = mysqli_real_escape_string($mysqli, $_POST['ln']);	
	$c = mysqli_real_escape_string($mysqli, $_POST['c']);
	$y = mysqli_real_escape_string($mysqli, $_POST['y']);
	$a = mysqli_real_escape_string($mysqli, $_POST['a']);
	$s = mysqli_real_escape_string($mysqli, $_POST['s']);
	$bd = mysqli_real_escape_string($mysqli, $_POST['bd']);
	$pc = mysqli_real_escape_string($mysqli, $_POST['pc']);
	$ad = mysqli_real_escape_string($mysqli, $_POST['ad']);
	$gpc = mysqli_real_escape_string($mysqli, $_POST['gpc']);
	

		$result = mysqli_query($mysqli, "UPDATE college SET StudentNumber='$sn',FirstName='$fn',MiddleName='$mn',LastName='$ln', Course='$c',Year='$y',Age='$a',Sex='$s',Birthdate='$bd',ContactNumber='$pc',AttendingDoctor='$ad',GuardianNumber='$gpc' WHERE id=$id");
		

		header("Location: /forms/nurse/NRC.php");
	}
?>
<?php

$id = $_SESSION["id"];


$result = mysqli_query($mysqli, "SELECT * FROM college WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$sn = $res['StudentNumber'];
	$fn = $res['FirstName'];
	$mn = $res['MiddleName'];
	$ln = $res['LastName'];
	$c = $res['Course'];
	$y = $res['Year'];
	$a = $res['Age'];
	$s = $res['Sex'];
	$bd = $res['Birthdate'];
	$pc = $res['ContactNumber'];
	$ad = $res['AttendingDoctor'];
	$gpc = $res['GuardianNumber'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<link href="/styles/blend.css" rel="stylesheet" type="text/css"/>
	
	<center>
	<form method="post" action="/patient/edit/collegeedit.php">
		<table border="0">
			<tr> 
				<td>Student Number: </td>
				<td><input type="text" name="sn" value="<?php echo $sn;?>"></td>
			</tr>
			<tr> 
				<td>First Name: </td>
				<td><input type="text" name="fn" value="<?php echo $fn;?>"></td>
			</tr>
			<tr> 
				<td>Middle Name: </td>
				<td><input type="text" name="mn" value="<?php echo $mn;?>"></td>
			</tr>
			<tr> 
				<td>Last Name: </td>
				<td><input type="text" name="ln" value="<?php echo $ln;?>"></td>
			</tr>
			<tr> 
				<td>Course: </td>
				<td><input type="text" name="c" value="<?php echo $c;?>"></td>
			</tr>
			<tr> 
				<td>Year: </td>
				<td><input type="text" name="y" value="<?php echo $y;?>"></td>
			</tr>
			<tr> 
				<td>Age: </td>
				<td><input type="text" name="a" value="<?php echo $a;?>"></td>
			</tr>
			<tr> 
				<td>Sex: </td>
				<td><input type="text" name="s" value="<?php echo $s;?>"></td>
			</tr>
			<tr> 
				<td>Birthdate: </td>
				<td><input type="text" name="bd" value="<?php echo $bd;?>"></td>
			</tr>
			<tr> 
				<td>Contact Number: </td>
				<td><input type="text" name="pc" value="<?php echo $pc;?>"></td>
			</tr>
			<tr> 
				<td>Attending Doctor: </td>
				<td><input type="text" name="ad" value="<?php echo $ad;?>"></td>
			</tr>
			<tr> 
				<td>Guardian Number: </td>
				<td><input type="text" name="gpc" value="<?php echo $gpc;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_SESSION["id"];?>></td>
				<td><input type="submit" name="update" value="Save"></td>
				<td><input type="submit" name="cancel" value="Cancel"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>
