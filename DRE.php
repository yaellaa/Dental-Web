<html>
	<body>
	<link href="NR.css" type="text/css" rel="stylesheet"/>
		<div class="con">
			<div class="main">
				<div class="nav">
					<table>
						<tr>
						<td><i><center>Dental System</center></i><br/>
						</tr>
						<tr>
						<td>Records
						<ul>
						<li><a href="DRC.php"><button>College</button></a></li>
						<li><a href="DRS.php"><button>Senior High</button></a></li>
						<li><a href="DRE.php"><button class="emp">Employee</button></a></li>
						</ul><br/>
						</td>
						</tr>
						<tr>
						<td><a href="Login.php"><center>Logout</center></a></td>
						</tr>
					</table>
				</div>
				<div class="data">
				<h1 class="emp">&nbspEmployee</h1>
				<table class = "bars">
				<tr>
				<td>
				<form action="NRE.php" method="POST"><br/><br/><br/>
				<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch: 
			<input type="text"  id="search" name="search" placeholder="Search"/> <input type="submit" id="filter" name="filter" value="Search">&nbsp&nbsp<input type="submit" id="all" name="all" value="All"></p>
</form>
</td>
</tr>
</table>
<center>
<table>
<tr>
<th width="15%">Date</th>
<th width="10%">Time</th>
<th width="15%">ID Number</th>
<th width="25%">Name</th>
<th width="10%">Department</th>
<th width="15%"></th>
</tr>
<?php 
if (isset($_POST['filter'])){
$search = $_POST['search'];
$mysqli = mysqli_connect("localhost", "root", "", "dental");
$search_result = mysqli_query(
$mysqli, "SELECT * FROM employee WHERE CONCAT (`IdNumber`,`LastName`,`FirstName`,`MiddleName`,`Date`,`Department`) LIKE  '%" .$search."%'");
while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['Date']. "</td>";
		echo "<td>" .$res['Time']. "</td>";
		echo "<td>" .$res['IdNumber']. "</td>";
		echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
		echo "<td>" .$res['Department']. "</td>";
		echo "<td><a href=\"employeechart.php?id=$res[id]\">View</a> | <a href=\"dele.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
}
}
elseif (isset($_POST['all'])){
$mysqli = mysqli_connect("localhost", "root", "", "dental");
$search_result = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY `id` DESC");
while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['Date']. "</td>";
		echo "<td>" .$res['Time']. "</td>";
		echo "<td>" .$res['IdNumber']. "</td>";
		echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
		echo "<td>" .$res['Department']. "</td>";
		echo "<td><a href=\"employechart.php?id=$res[id]\">View</a> | <a href=\"dele.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
}	
}
else{
$mysqli = mysqli_connect("localhost", "root", "", "dental");
$search_result = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY `Date` DESC");
while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['Date']. "</td>";
		echo "<td>" .$res['Time']. "</td>";
		echo "<td>" .$res['IdNumber']. "</td>";
		echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
		echo "<td>" .$res['Department']. "</td>";
		echo "<td><a href=\"employeechart.php?id=$res[id]\">View</a> | <a href=\"dele.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
}	
}
?>
</table>
</center>
</div>
			</div>
		</div>
</body>
</html>
