<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/app/config/Directories.php");
?>

<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_SESSION = [];
            session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card text-center shadow p-3" style="width: 24rem;">
            <div class="card-body">
                <h5 class="card-title">You have been logged out</h5>
                <p class="card-text">Thank you for visiting. You are now logged out.</p>
                <a href="/Login.php" class="btn btn-danger">Go to Login</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>