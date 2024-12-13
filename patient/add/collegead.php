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
	$Course=$_POST['Course'];
	$Year=$_POST['y'];
	$Age=$_POST['a'];
	$Sex=$_POST['Sex'];
	$Birthdate=$_POST['bd'];
	$ContactNo=$_POST['pc'];
	$AttendingDoctor=$_POST['ad'];
	$GContactNo=$_POST['gpc'];
	
	
	$conn= mysqli_connect($server, $username, $password, $db);
	
	$query ="INSERT INTO `college` (`Date`, `Time`, `StudentNumber`, `FirstName`, `MiddleName`,  `LastName`, `Course`, `Year`, `Age`, `Sex`, `Birthdate`, `ContactNumber`, `AttendingDoctor`, `GuardianNumber`) VALUES ('$date', '$time', '$StudentNumber', '$FirstName', '$MiddleName', '$LastName', '$Course', '$Year', '$Age', '$Sex', '$Birthdate', '$ContactNo', '$AttendingDoctor', '$GContactNo');";

	mysqli_query($conn, $query);
	
	header("Location:/forms/add/NFormC.php");
?>