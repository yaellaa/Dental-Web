<?php
    $databaseHost = 'localhost';
    $databaseName = 'dental';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];

    $id = mysqli_real_escape_string($mysqli, $id);

    $deleteCollege = mysqli_query($mysqli, "DELETE FROM college WHERE id = '$id'");
    $deleteEmployee = mysqli_query($mysqli, "DELETE FROM employee WHERE id = '$id'");
    $deleteShs = mysqli_query($mysqli, "DELETE FROM shs WHERE id = '$id'");

    if ($deleteCollege && $deleteEmployee && $deleteShs) {
        echo "Records with ID $id successfully deleted from college, employee, and shs tables.";
    } else {
        echo "Error deleting records: " . mysqli_error($mysqli);
    }

    header("Location:/patient/records/allrec.php");

    mysqli_close($mysqli);
?>
