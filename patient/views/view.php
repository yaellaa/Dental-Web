<?php
$mysqli = mysqli_connect("localhost", "root", "", "dental");

if (isset($_GET['id']) && isset($_GET['category'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);
    $category = mysqli_real_escape_string($mysqli, $_GET['category']);
    
    switch ($category) {
        case "College":
            $table = "college";
            $id_field = "StudentNumber";
            break;
        case "Senior High":
            $table = "shs";
            $id_field = "StudentNumber";
            break;
        case "Employee":
            $table = "employee";
            $id_field = "IdNumber";
            break;
        default:
            die("Invalid category.");
    }

    $query = "SELECT * FROM $table WHERE $id_field = '$id'";
    $result = mysqli_query($mysqli, $query);
    $record = mysqli_fetch_assoc($result);

    if (!$record) {
        die("No record found for the given ID.");
    }

    $history_query = "SELECT * FROM records WHERE ID = '$id' AND Category = '$category' ORDER BY Date DESC";
    $history_result = mysqli_query($mysqli, $history_query);
} else {
    die("Invalid request.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $new_time = mysqli_real_escape_string($mysqli, $_POST['time']);
    $details = mysqli_real_escape_string($mysqli, $_POST['details']);
    

    $insert_query = "INSERT INTO records (ID, Category, Date, Time, Details) VALUES ('$id', '$category', '$new_date', '$new_time', '$details')";
    
    if (mysqli_query($mysqli, $insert_query)) {

        header("Location: /patient/views/view.php?id=$id&category=$category");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record - <?php echo htmlspecialchars($category); ?></title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>
    <header>
        <h1>Patient Record</h1>
        <p>View and manage records for <?php echo htmlspecialchars($category); ?> patients.</p>
    </header>

    <div class="container">
        <section id="about">
            <h2>Personal Information</h2>
            <center>
            <table>
                <tr><th>ID/Student Number:</th><td><?php echo htmlspecialchars($record[$id_field]); ?></td></tr>
                <tr><th>Full Name:</th><td><?php echo htmlspecialchars($record['LastName'] . ", " . $record['FirstName'] . " " . $record['MiddleName']); ?></td></tr>
                <?php if ($category === "College") { ?>
                    <tr><th>Course:</th><td><?php echo htmlspecialchars($record['Course']); ?></td></tr>
                <?php } elseif ($category === "Senior High") { ?>
                    <tr><th>Strand:</th><td><?php echo htmlspecialchars($record['Strand']); ?></td></tr>
                    <tr><th>Grade:</th><td><?php echo htmlspecialchars($record['Grade']); ?></td></tr>
                    <tr><th>Section:</th><td><?php echo htmlspecialchars($record['Section']); ?></td></tr>
                <?php } elseif ($category === "Employee") { ?>
                    <tr><th>Unit:</th><td><?php echo htmlspecialchars($record['Unit']); ?></td></tr>
                    <tr><th>Department:</th><td><?php echo htmlspecialchars($record['Department']); ?></td></tr>
                <?php } ?>
            </table>
        </section>

        <section id="services">
            <h2>Patient History</h2>
        <center>
            <table border="1">
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Details</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($history_result)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['Date']); ?></td>
                        <td><?php echo htmlspecialchars($row['Time']); ?></td>
                        <td><?php echo htmlspecialchars($row['Details']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </center>
        </section>

        <section id="contact">
            <h2>Add New Record</h2>
            <form method="POST" action="">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
                <label for="details">Details:</label>
                <textarea id="details" name="details" required></textarea>
                <button type="submit">Add Record</button>
            </form>
        </section>
    </div>
</body>
</html>
