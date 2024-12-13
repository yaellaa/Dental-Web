<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDCA Dental Clinic</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>Welcome to St. Dominic Dental Clinic</h1>
            <p>Bright Smiles, Healthy Lives</p>
        </div>
    </header>

    <div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
    <a href="Login.php" style="display: inline-block; background-color: #B11F27; color: white; text-decoration: none; padding: 10px 20px; font-size: 16px; font-weight: bold; border-radius: 5px;">
        Click here to consult
    </a>
</div>
<div class="hero-image" style="display: flex; justify-content: center; align-items: center; height: 50vh;">
  <img src="public/uploads/slide1.jpg" alt="Person teeth" style="max-height: 100%; max-width: 100%; object-fit: cover;">
</div>
<br>
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to St. Dominic Dental Clinic! We are committed to providing top-notch dental care for you and your family. 
                Our team of experienced professionals ensures a comfortable and stress-free experience.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> St. Dominic Dental Clinic. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
