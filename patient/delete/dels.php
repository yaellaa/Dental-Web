<?php
    $databaseHost = 'localhost';
    $databaseName = 'dental';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM shs WHERE id=$id");

<<<<<<< HEAD
    header("Location:/forms/nurse/NRS.php");
=======
    header("Location:forms/nurse/NRS.php");
>>>>>>> 58cfe5b8fe8866114730f88047a74625578609a5
?>