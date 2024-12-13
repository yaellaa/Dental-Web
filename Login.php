<?php
session_start();
?>

<html>
<head>
    <title>Login (Dental)</title>
</head>
<body>
    <link href="/styles/Login.css" type="text/css" rel="stylesheet"/>
    <center>
        <img src="/public/uploads/banner.png" />
        <br></br>
        <div class="login">
            <!-- Login Form -->
            <form action="app/auth/loginpro.php" method="POST">
                <p>ID Number: &nbsp
                    <input type="text" id="u" name="u" placeholder="Enter ID Number" required></p>
                <p>Password: &nbsp&nbsp&nbsp
                    <input type="password" id="p" name="p" placeholder="Enter Password" required></p>

                <input type="submit" name="login" value="Login">
            </form>

            <!-- Add User Button -->
            <form action="/app/auth/auser.php" method="GET">
                <input type="submit" name="addu" value="Add User">
            </form>

            <?php
            // Display error message if set
            if (isset($_SESSION['error_message'])) {
                echo "<p style='color: red;'>" . $_SESSION['error_message'] . "</p>";
                unset($_SESSION['error_message']);
            }
            ?>
        </div>
    </center>
</body>
</html>
