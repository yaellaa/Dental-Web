<?php
		date_default_timezone_set('Asia/Manila');
		$date = date('F j, Y');
		$time = date('g:i a');

		$server='localhost';
		$username='root';
		$password="";
		$db='Dental';
		
		$IdNumber=$_POST['in'];
		$FirstName=$_POST['fn'];
		$MiddleName=$_POST['mn'];
		$LastName=$_POST['ln'];
		$Department=$_POST['Department'];
		$Unit=$_POST['Unit'];
		$Age=$_POST['a'];
		$Sex=$_POST['Sex'];
		$Birthdate=$_POST['bd'];
		$ContactNo=$_POST['pc'];
		$AttendingDoctor=$_POST['ad'];
		$GContactNo=$_POST['gpc'];
		
		
		$conn= mysqli_connect($server, $username, $password, $db);
		
		$query ="INSERT INTO `employee` (`Date`, `Time`, `IdNumber`, `FirstName`, `MiddleName`,  `LastName`, `Department`, `Unit`, `Age`, `Sex`, `Birthdate`, `ContactNumber`, `AttendingDoctor`, `GuardianNumber`) VALUES ('$date', '$time', '$IdNumber', '$FirstName', '$MiddleName', '$LastName', '$Department', '$Unit', '$Age', '$Sex', '$Birthdate', '$ContactNo', '$AttendingDoctor', '$GContactNo');";

		mysqli_query($conn, $query);
		
		header("Location:NFormE.php");
?>