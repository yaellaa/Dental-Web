<?php
	if (isset($_POST['login'])){
		session_start();
		$_SESSION['username'] = $_POST['u'];
		$username = $_POST['u'];
		$password = $_POST['p'];
		
		$mysqli = mysqli_connect("localhost", "root", "", "dental");
		
		$result = mysqli_query($mysqli, "SELECT * FROM users WHERE Username = $username");
		$res = mysqli_fetch_array($result);
		$user1 = "Doctor";
		$user2 = "Nurse";
	
	if($res['Username'] == $username && $res['Password'] == $password){
		if($res['UserLevel'] == $user1){
		header('Location: /forms/doctor/DRC.php');
		}
		elseif($res['UserLevel'] == $user2){
		header('Location: /forms/nurse/NFormC.php');
		}
	}
	else{
		header('Location: Login.php');
	}
	}
	if (isset($_POST['addu'])){
		header('Location: /app/auth/auser.php');
	}
?>