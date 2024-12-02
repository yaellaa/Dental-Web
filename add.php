<?php
	date_default_timezone_set('Asia/Manila');
	$date = date('F j, Y');

	$server='localhost';
	$username='root';
	$password="";
	$db='Dental';
	
	$Date=$date;
	$Tooth=$_POST['tooth'];
	$Cond=$_POST['condition'];
	$Treatment=$_POST['treatment'];
	$AttendingDoctor=$_POST['ad'];
	
	$conn= mysqli_connect($server, $username, $password, $db);
	
	$query ="INSERT INTO `college` (`Date`, `Time`, `StudentNumber`, `FirstName`, `MiddleName`,  `LastName`, `Course`, `Year`, `Age`, `Sex`, `Birthdate`, `ContactNumber`, `AttendingDoctor`, `GuardianNumber`) VALUES ('$date', '$time', '$StudentNumber', '$FirstName', '$MiddleName', '$LastName', '$Course', '$Year', '$Age', '$Sex', '$Birthdate', '$ContactNo', '$AttendingDoctor', '$GContactNo');";

	mysqli_query($conn, $query);
	
	header("Location:rec.php");
?>