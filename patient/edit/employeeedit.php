<?php
	$databaseHost = 'localhost';
	$databaseName = 'dental';
	$databaseUsername = 'root';
	$databasePassword = '';

	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

session_start();
if(isset($_POST['cancel']))
{
	header("Location: /forms/nurse/NRE.php");
}
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$in = mysqli_real_escape_string($mysqli, $_POST['in']);
	$fn = mysqli_real_escape_string($mysqli, $_POST['fn']);
	$mn = mysqli_real_escape_string($mysqli, $_POST['mn']);
	$ln = mysqli_real_escape_string($mysqli, $_POST['ln']);	
	$u = mysqli_real_escape_string($mysqli, $_POST['u']);	
	$d = mysqli_real_escape_string($mysqli, $_POST['d']);
	$a = mysqli_real_escape_string($mysqli, $_POST['a']);
	$s = mysqli_real_escape_string($mysqli, $_POST['s']);
	$bd = mysqli_real_escape_string($mysqli, $_POST['bd']);
	$pc = mysqli_real_escape_string($mysqli, $_POST['pc']);
	$ad = mysqli_real_escape_string($mysqli, $_POST['ad']);
	$gpc = mysqli_real_escape_string($mysqli, $_POST['gpc']);
	
	//updating the table
		$result = mysqli_query($mysqli, "UPDATE employee SET IdNumber='$in',FirstName='$fn',MiddleName='$mn',LastName='$ln',Department='$d',Unit='$u',Age='$a',Sex='$s',Birthdate='$bd',ContactNumber='$pc',AttendingDoctor='$ad',GuardianNumber='$gpc' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: /forms/nurse/NRE.php");
	}
?>
<?php
//getting id from url
$id = $_SESSION["id"];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$in = $res['IdNumber'];
	$fn = $res['FirstName'];
	$mn = $res['MiddleName'];
	$ln = $res['LastName'];
	$d = $res['Department'];
	$u = $res['Unit'];
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
	<form method="post" action="/patient/edit/employeeedit.php">
		<table border="0">
			<tr> 
				<th>ID Number: </th>
				<td><input type="text" name="in" value="<?php echo $in;?>"></td>
			</tr>
			<tr> 
				<th>First Name: </th>
				<td><input type="text" name="fn" value="<?php echo $fn;?>"></td>
			</tr>
			<tr> 
				<th>Middle Name: </th>
				<td><input type="text" name="mn" value="<?php echo $mn;?>"></td>
			</tr>
			<tr> 
				<th>Last Name: </th>
				<td><input type="text" name="ln" value="<?php echo $ln;?>"></td>
			</tr>
			<tr> 
				<th>Unit: </th>
				<td><input type="text" name="u" value="<?php echo $u;?>"></td>
			</tr>
			<tr> 
				<th>Department: </th>
				<td><input type="text" name="d" value="<?php echo $d;?>"></td>
			</tr>
				<th>Age: </th>
				<td><input type="text" name="a" value="<?php echo $a;?>"></td>
			</tr>
			<tr> 
				<th>Sex: </th>
				<td><input type="text" name="s" value="<?php echo $s;?>"></td>
			</tr>
			<tr> 
				<th>Birthdate: </th>
				<td><input type="text" name="bd" value="<?php echo $bd;?>"></td>
			</tr>
			<tr> 
				<th>Contact Number: </th>
				<td><input type="text" name="pc" value="<?php echo $pc;?>"></td>
			</tr>
			<tr> 
				<th>Attending Doctor: </th>
				<td><input type="text" name="ad" value="<?php echo $ad;?>"></td>
			</tr>
			<tr> 
				<th>Guardian Number: </th>
				<td><input type="text" name="gpc" value="<?php echo $gpc;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_SESSION["id"];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
				<td><input type="submit" name="cancel" value="Cancel"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>