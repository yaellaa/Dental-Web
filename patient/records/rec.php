<?php 
$databaseHost = 'localhost';
$databaseName = 'dental';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$id = $_GET['id'];

$result1 = mysqli_query($mysqli, "SELECT * FROM college WHERE id=$id");

while ($res = mysqli_fetch_array($result1)) {
    $sn = $res['StudentNumber'];
    $fn = $res['FirstName'];
    $mn = $res['MiddleName'];
    $ln = $res['LastName'];
    $course = $res['Course'];
    $year = $res['Year'];
};
?>
<html>
<body>
    <link href="/styles/rec.css" type="text/css" rel="stylesheet" />
    <div class="main">
        <div class="info">
            <table>
                <tr>
                    <td width="200px">Student Number:</td>
                    <td><?php echo $sn; ?></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $ln . ", " . $fn . " " . $ln; ?></td>
                </tr>
                <tr>
                    <td>Course:</td>
                    <td><?php echo $course; ?></td>
                </tr>
                <tr>
                    <td>Year:</td>
                    <td><?php echo $year; ?></td>
                </tr>
            </table>
        </div>
        <div class="college">
            <h1>College</h1>
        </div>
        <div class="opt">
            <form action="/patient/add/add.php" method="POST">
                <p>Tooth:</p>
                <select name="tooth">
                    <option value="---" selected>---</option>
                    <option value="7 Incisor">7 Incisor</option>
                    <option value="8 Incisor">8 Incisor</option>
                    <option value="9 Incisor">9 Incisor</option>
                    <option value="10 Incisor">10 Incisor</option>
                    <option value="23 Incisor">23 Incisor</option>
                    <option value="24 Incisor">24 Incisor</option>
                    <option value="25 Incisor">25 Incisor</option>
                    <option value="26 Incisor">26 Incisor</option>
                    <option value="6 Canine">6 Canine</option>
                    <option value="11 Canine">11 Canine</option>
                    <option value="22 Canine">22 Canine</option>
                    <option value="27 Canine">27 Canine</option>
                    <option value="4 Premolar">4 Premolar</option>
                    <option value="5 Premolar">5 Premolar</option>
                    <option value="12 Premolar">12 Premolar</option>
                    <option value="13 Premolar">13 Premolar</option>
                    <option value="20 Premolar">20 Premolar</option>
                    <option value="21 Premolar">21 Premolar</option>
                    <option value="28 Premolar">28 Premolar</option>
                    <option value="29 Premolar">29 Premolar</option>
                    <option value="2 Molar">2 Molar</option>
                    <option value="3 Molar">3 Molar</option>
                    <option value="14 Molar">14 Molar</option>
                    <option value="15 Molar">15 Molar</option>
                    <option value="18 Molar">18 Molar</option>
                    <option value="19 Molar">19 Molar</option>
                    <option value="30 Molar">30 Molar</option>
                    <option value="31 Molar">31 Molar</option>
                    <option value="1 Third Molar">1 Third Molar</option>
                    <option value="16 Third Molar">16 Third Molar</option>
                    <option value="17 Third Molar">17 Third Molar</option>
                    <option value="32 Third Molar">32 Third Molar</option>
                </select>
                <p>Condition:</p>
                <select name="condition">
                    <option value="Select" selected>Decay</option>
                    <option value="Decay">Decay</option>
                    <option value="Missing due to caries">Missing due to caries</option>
                    <option value="Filled">Filled</option>
                    <option value="Caries indication for extraction">Caries indication for extraction</option>
                    <option value="Root Fragment">Root Fragment</option>
                    <option value="Impacted Tooth">Impacted Tooth</option>
                </select>
                <p class="treatment">Treatment:</p>
                <select name="treatment">
                    <option value="Bonding">Bonding</option>
                    <option value="Braces">Braces</option>
                    <option value="Bridges & Implant">Bridges & Implant</option>
                    <option value="Crowns and Caps">Crowns & Cap</option>
                    <option value="Dentures">Denture</option>
                    <option value="Extraction">Extraction</option>
                    <option value="Filling & Repair">Filling & Repair</option>
                    <option value="Gum Surgery">Gum Surgery</option>
                    <option value="Oral Cancer Examination">Oral Cancer Examination</option>
                    <option value="Root Canal">Root Canal</option>
                    <option value="Sealants">Sealants</option>
                    <option value="Teeth Whitening">Teeth Whitening</option>
                    <option value="Veneers">Veneers</option>
                </select>
                <p>Doctor:</p>
                <input type="submit" name="Save" value="Save">
            </form>
        </div>
        <div class="teeth">
            <table>
                <tr>
                    <th width="100px">Date</th>
                    <th width="120px">Tooth</th>
                    <th width="150px">Condition</th>
                    <th width="155px">Treatment</th>
                    <th width="135px">Doctor</th>
                </tr>
                <?php
                $search_result = mysqli_query(
                    $mysqli, "SELECT * FROM college ORDER BY `id` DESC"
                );
                while ($res = mysqli_fetch_array($search_result)) {
                    echo "<tr>";
                    echo "<td>" . $res['Date'] . "</td>";
                    echo "<td>" . $res['Tooth'] . "</td>";
                    echo "<td>" . $res['Condition'] . "</td>";
                    echo "<td>" . $res['Treatment'] . "</td>";
                    echo "<td>" . $res['Doctor'] . "</td>";
                    echo "<td>" . $res['Year'] . "</td>";
                }
                ?>
            </table>
        </div>
        <div class="rec">
            <img src="/public/uploads/1.jpg" />
        </div>
    </div>
</body>
</html>
