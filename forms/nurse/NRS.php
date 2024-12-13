
<html>
	<body>
	<link href="styles/NR.css" type="text/css" rel="stylesheet"/>
		<div class="con">
			<div class="main">
				<div class="nav">
					<table>
						<tr>
							<td><i><center>Dental System</center></i><br/>
						</tr>
						<tr>
							<td>Forms
						<ul>
							<li><a href="forms/add/NFormC.php"><button>College</button></a></li>
							<li><a href="forms/add/NFormS.php"><button>Senior High</button></a></li>
							<li><a href="forms/add/NFormE.php"><button>Employee</button></a></li>
						</ul>
							</td>
						</tr>
						<tr>
							<td>Records
						<ul>
							<li><a href="patient/records/allrec.php"><button>All Records</button></a></li>
							<li><a href="forms/nurse/NRC.php"><button>College</button></a></li>
							<li><a href="forms/nurse/NRS.php"><button class="shs">Senior High</button></a></li>
							<li><a href="forms/nurse/NRE.php"><button>Employee</button></a></li>
						</ul>
							</td>
						</tr>
						<tr>
							<td><a href="Logout.php"><center>Logout</center></a></td>
						</tr>
					</table>
						</div>
						<div class="data">
						<h1 class="shs">&nbspSenior High</h1>
					<table class = "bars">
						<tr>
							<td>
						<form action="forms/nurse/NRS.php" method="POST"><br/><br/><br/>
						<p> 
							<input type="text"  id="search" name="search" placeholder="Search"/>
							<br></br> 
							<input type="submit" id="filter" name="filter" value="Search">&nbsp&nbsp
							<input type="submit" id="all" name="all" value="All"></p>
							<br></br>
						</form>
							</td>
						</tr>
					</table>
			<center>
					<table>
						<tr>
							<th width="15%">Date</th>
							<th width="10%">Time</th>
							<th width="15%">Student Number</th>
							<th width="25%">Name</th>
							<th width="10%">Strand</th>
							<th width="10%">Grade</th>
							<th width="5%">Section</th>
							<th width="15%">Options</th>
						</tr>
					<?php 
					if (isset($_POST['filter'])){
						$search = $_POST['search'];
						$mysqli = mysqli_connect("localhost", "root", "", "dental");
						$search_result = mysqli_query(
						$mysqli, "SELECT * FROM shs WHERE CONCAT (`StudentNumber`,`LastName`,`FirstName`,`MiddleName`,`Date`,`Strand`,`Grade`,`Section`) LIKE  '%" .$search."%'");
					while($res = mysqli_fetch_array($search_result)) {
						echo "<tr>";
						echo "<td>" .$res['Date']. "</td>";
						echo "<td>" .$res['Time']. "</td>";
						echo "<td>" .$res['StudentNumber']. "</td>";
						echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
						echo "<td>" .$res['Strand']. "</td>";
						echo "<td>" .$res['Grade']. "</td>";
						echo "<td>" .$res['Section']. "</td>";
						echo "<td><a href=\"patient/views/shsview.php?id=$res[id]\">Edit</a> | <a href=\"patient/delete/dels.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						echo "</tr>";
					}
				}
					elseif (isset($_POST['all'])){
						$mysqli = mysqli_connect("localhost", "root", "", "dental");
						$search_result = mysqli_query($mysqli, "SELECT * FROM shs ORDER BY `id` DESC");
					while($res = mysqli_fetch_array($search_result)) {
						echo "<tr>";
						echo "<td>" .$res['Date']. "</td>";
						echo "<td>" .$res['Time']. "</td>";
						echo "<td>" .$res['StudentNumber']. "</td>";
						echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
						echo "<td>" .$res['Strand']. "</td>";
						echo "<td>" .$res['Grade']. "</td>";
						echo "<td>" .$res['Section']. "</td>";
						echo "<td><a href=\"patient/views/shsview.php?id=$res[id]\">Edit</a> | <a href=\"patient/delete/dels.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						echo "</tr>";
					}	
				}
					else{
						$mysqli = mysqli_connect("localhost", "root", "", "dental");
						$search_result = mysqli_query($mysqli, "SELECT * FROM shs ORDER BY `Date` DESC");
					while($res = mysqli_fetch_array($search_result)) {
						echo "<tr>";
						echo "<td>" .$res['Date']. "</td>";
						echo "<td>" .$res['Time']. "</td>";
						echo "<td>" .$res['StudentNumber']. "</td>";
						echo "<td>" .$res['LastName'] .", " .$res['FirstName']. " " .$res['MiddleName']. "</td>";
						echo "<td>" .$res['Strand']. "</td>";
						echo "<td>" .$res['Grade']. "</td>";
						echo "<td>" .$res['Section']. "</td>";
						echo "<td><a href=\"patient/views/shsview.php?id=$res[id]\">Edit</a> | <a href=\"patient/delete/dels.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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
