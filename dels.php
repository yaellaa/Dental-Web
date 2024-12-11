<?php
    $databaseHost = 'localhost';
    $databaseName = 'dental';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM shs WHERE id=$id");

    header("Location:NRS.php");
?>