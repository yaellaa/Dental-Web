<?php
$mysqli = mysqli_connect("localhost", "root", "", "dental");?>
<html>
<head>	
	<title>College (Records)</title>
</head>
<link href="tabs.css" type="text/css"rel="stylesheet"/>
<body>
<div id="RecordsC">
<div class="banner">
<img src="college.jpg"/>
</div>
<div class="nav">
<center>
<table>
<tr>
<td><a href="NurseTab.php">Forms</a></td>
<td><a href="RecordsC.php">College(Records)</a></td>
<td><a href="RecordsS.php">SHS(Records)</a></td>
<td><a href="RecordsE.php">Employee(Records)</a></td>
<td><a href="Login.php">Logout</a></td>
</tr>
</table>
</center>
</div>
<table class = "bars">
<tr>
<td>
<form action="RecordsC.php" method="POST">
			<p>Search: 
			<input type="text"  id="search" name="search" placeholder="Search"/> <input type="submit" id="filter" name="filter" value="Search">&nbsp&nbsp<input type="submit" id="all" name="all" value="All"></p>
</form>
</td>
</tr>
</table>
<center>
<div  class="data">
<table>
<tr>
<th width="15%">Date</th>
<th width="10%">Time</th>
<th width="15%">Student Number</th>
<th width="25%">Name</th>
<th width="10%">Course</th>
<th width="5%">Year</th>
<th width="15%"></th>
</tr>
<?php 
if (isset($_POST['filter'])){
$search = $_POST['search'];
$mysqli = mysqli_connect("localhost", "root", "", "dental");
$search_result = mysqli_query(
$mysqli, "SELECT * FROM college WHERE CONCAT (`StudentNumber`,`LastName`,`FirstName`,`MiddleName`,`Date`,`Course`,`Year`) LIKE  '%" .$search."%'");
while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['Date']. "</td>";
		echo "<td>" .$res['Time']. "</td>";
		echo "<td>" .$res['StudentNumber']. "</td>";
		echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
		echo "<td>" .$res['Course']. "</td>";
		echo "<td>" .$res['Year']. "</td>";
		echo "<td><a href=\"collegeview.php?id=$res[id]\">View</a> | <a href=\"delc.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
}
}
elseif (isset($_POST['all'])){
$mysqli = mysqli_connect("localhost", "root", "", "dental");
$search_result = mysqli_query($mysqli, "SELECT * FROM college ORDER BY `id` DESC");
while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['Date']. "</td>";
		echo "<td>" .$res['Time']. "</td>";
		echo "<td>" .$res['StudentNumber']. "</td>";
		echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
		echo "<td>" .$res['Course']. "</td>";
		echo "<td>" .$res['Year']. "</td>";
		echo "<td><a href=\"collegeview.php?id=$res[id]\">View</a> | <a href=\"delc.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
}	
}
else{
$mysqli = mysqli_connect("localhost", "root", "", "dental");
$search_result = mysqli_query($mysqli, "SELECT * FROM college ORDER BY `Date` DESC");
while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['Date']. "</td>";
		echo "<td>" .$res['Time']. "</td>";
		echo "<td>" .$res['StudentNumber']. "</td>";
		echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
		echo "<td>" .$res['Course']. "</td>";
		echo "<td>" .$res['Year']. "</td>";
		echo "<td><a href=\"collegeview.php?id=$res[id]\">View</a> | <a href=\"delc.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
}	
}
?>
</table>
</center>
</div>
</body>
</html>