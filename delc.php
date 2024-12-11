<?php
    $databaseHost = 'localhost';
    $databaseName = 'dental';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM college WHERE id=$id");

    header("Location:NRC.php");
?>