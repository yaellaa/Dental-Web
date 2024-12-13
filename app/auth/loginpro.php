<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['u'];
    $password = $_POST['p'];

    $mysqli = mysqli_connect("localhost", "root", "", "dental");

    $username = mysqli_real_escape_string($mysqli, $username);
    $password = mysqli_real_escape_string($mysqli, $password);

    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE Username = '$username'");
    $res = mysqli_fetch_array($result);
    $user1 = "Doctor";
    $user2 = "Nurse";

    if ($res) {
        if ($res['Username'] == $username && $res['Password'] == $password) {
            $_SESSION['username'] = $username;


            if ($res['UserLevel'] == $user1) {
                header('Location: /forms/doctor/DRC.php');
            } elseif ($res['UserLevel'] == $user2) {
                header('Location: /forms/add/NFormC.php');
            }
        } else {

            $_SESSION['error_message'] = "Invalid ID or Password. Please try again.";
            header('Location: /Login.php');
        }
    } else {

        $_SESSION['error_message'] = "User does not exist. Please check your ID.";
        header('Location: /Login.php');
    }
}
?>
