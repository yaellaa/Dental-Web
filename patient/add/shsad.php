<?php
	date_default_timezone_set('Asia/Manila');
	$date = date('F j, Y');
	$time = date('g:i a');

	$server='localhost';
	$username='root';
	$password="";
	$db='Dental';
	
	$StudentNumber=$_POST['sn'];
	$FirstName=$_POST['fn'];
	$MiddleName=$_POST['mn'];
	$LastName=$_POST['ln'];
	$Strand=$_POST['Strand'];
	$Grade=$_POST['g'];
	$Section=$_POST['Section'];
	$Age=$_POST['a'];
	$Sex=$_POST['Sex'];
	$Birthdate=$_POST['bd'];
	$ContactNo=$_POST['pc'];
	$AttendingDoctor=$_POST['ad'];
	$GContactNo=$_POST['gpc'];
	
	
	$conn= mysqli_connect($server, $username, $password, $db);
	
	$query ="INSERT INTO `shs` (`Date`, `Time`, `StudentNumber`, `FirstName`, `MiddleName`,  `LastName`, `Strand`, `Grade`, `Section`, `Age`, `Sex`, `Birthdate`, `ContactNumber`, `AttendingDoctor`, `GuardianNumber`) VALUES ('$date', '$time', '$StudentNumber', '$FirstName', '$MiddleName', '$LastName', '$Strand', '$Grade', '$Section' , '$Age', '$Sex', '$Birthdate', '$ContactNo', '$AttendingDoctor', '$GContactNo');";

	mysqli_query($conn, $query);
	
	header("Location: /forms/add/NFormS.php");
?>