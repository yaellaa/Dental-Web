<?php
	if (isset($_POST['save'])){
		$Type=$_POST['Type'];
		$Username=$_POST['u'];
		$Password=$_POST['p'];
		$FirstName=$_POST['fn'];
		$MiddleName=$_POST['mn'];
		$LastName=$_POST['ln'];
		$Age=$_POST['a'];
		$Sex=$_POST['Sex'];
		$Birthdate=$_POST['bd'];
		$ContactNo=$_POST['c'];
	
		$conn= mysqli_connect("localhost", "root", "", "dental");
	
		$query ="INSERT INTO `users` (`UserLevel`, `Username`, `Password`, `FirstName`, `MiddleName`,  `LastName`, `Age`, `Sex`, `Birthdate`, `Contact#`) VALUES ('$Type', '$Username', '$Password', '$FirstName', '$MiddleName', '$LastName', '$Age', '$Sex', '$Birthdate', '$ContactNo');";
		mysqli_query($conn, $query);
		header("Location:Login.php");
	}
	if (isset($_POST['cancel'])){
		header("Location:Login.php");
	}
?>
	<html>
		<body>
			<link href="blend.css" rel="stylesheet" type="text/css"/>
				<form action="auser.php" method="POST">
						<p>User Type: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select name="Type" id="Type">
						<option value="Select Type" selected>Select Type</option>
						<option value="Doctor">Doctor</option>
						<option value="Nurse">Nurse</option>
					</select></p>
						<p>ID Number: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="u" name="u" placeholder="ID Number" ></p>
						<p>Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="p" name="p" placeholder="Password" ></p>
						<p>First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="fn" name="fn" placeholder="First Name" ></p>
						<p>Middle Name: &nbsp&nbsp&nbsp&nbsp
							<input type="text" id="mn" name="mn" placeholder="Middle Name" ></p>
						<p>Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="ln" name="ln" placeholder="Last Name" ></p>
						<p>Age: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="a" name="a" placeholder="Age" ></p>
						<p>Sex: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select name="Sex">
						<option value="Select Type" selected>Select Sex</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select></p>
						<p>Birthdate: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="bd" name="bd" placeholder="(YYYY/DD/MM)" ></p>
						<p>Contact#: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="text" id="c" name="c" placeholder="Contact#" ></p>
						<br/>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="submit" name="save" value="Save">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="submit" name="cancel" value="Cancel">
				</form>
		</body>
	</html>