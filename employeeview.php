<?php
$databaseHost = 'localhost';
$databaseName = 'dental';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
session_start();
$_SESSION["id"]= $_GET['id'];
?>
<html>
<head>	
	<title>Employee (Record)</title>
</head>
<body>
<link href="blend.css" rel="stylesheet" type="text/css"/>
<center>
<table>
<?php
$id = $_GET['id'];
$_SESSION["id"]= $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE id=$id");
while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<th>ID Number: </th>";
		echo "<td>" .$res['IdNumber']. "</td>";	
		echo "</tr>";
		echo "<tr>";
		echo "<th>First Name: </th>";
		echo "<td>" .$res['FirstName']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Middle Name: </th>";
		echo "<td>" .$res['MiddleName']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Last Name: </th>";
		echo "<td>" .$res['LastName']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Unit: </th>";
		echo "<td>" .$res['Unit']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Department: </th>";
		echo "<td>" .$res['Department']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Age: </th>";
		echo "<td>" .$res['Age']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Sex: </th>";
		echo "<td>" .$res['Sex']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Birthdate: </th>";
		echo "<td>" .$res['Birthdate']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Contact Number: </th>";
		echo "<td>" .$res['ContactNumber']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Attending Doctor: </th>";
		echo "<td>" .$res['AttendingDoctor']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Guardian Number: </th>";
		echo "<td>" .$res['GuardianNumber']. "</td>";
		echo "</tr>";
		echo "</table>";
}
		echo "<br/><br/>";
		echo "<a href=\"employeeedit.php?id=$res[id]\">Edit</a>";
		echo "&nbsp&nbsp&nbsp&nbsp";
		echo "<a href=\"NRE.php\">Go back
		<script></a>";
?>
</center>
</body>
</html>	
</html>	