<html>
<body>
<link href="styles/NR.css" type="text/css" rel="stylesheet"/>
<div class="con">
    <div class="main">
        <div class="nav">
            <table>
                <tr>
                    <td><i><center>Dental System</center></i><br/></td>
                </tr>
                <tr>
                    <td>Records
                        <ul>
                            <li><a href="patient/records/dallrec.php"><button>All Records</button></a></li>
                            <li><a href="forms/doctor/DRC.php"><button>College</button></a></li>
                            <li><a href="forms/doctor/DRS.php"><button>Senior High</button></a></li>
                            <li><a href="forms/doctor/DRE.php"><button>Employee</button></a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="Logout.php"><center>Logout</center></a></td>
                </tr>
            </table>
        </div>
        <div class="data">
            <h1 class="dallrec">&nbspAll Records</h1>
            <table class="bars">
                <tr>
                    <td>
                        <form action="patient/records/dallrec.php" method="POST">
                            <br/><br/><br/>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch: 
                                <input type="text" id="search" name="search" placeholder="Search"/> 
                                <input type="submit" id="filter" name="filter" value="Search">&nbsp&nbsp
                                <input type="submit" id="all" name="all" value="All">
                            </p>
                        </form>
                    </td>
                </tr>
            </table>
            <center>
                <table>
                    <tr>
                        <th width="15%">ID/Student Number</th>
                        <th width="25%">Name</th>
                        <th width="10%">Category</th>
                        <th width="10%">Details</th>
                        <th width="15%">Options</th>
                    </tr>
                    <?php 
                    $mysqli = mysqli_connect("localhost", "root", "", "dental");
                    
                    if (isset($_POST['filter'])) {
                        $search = mysqli_real_escape_string($mysqli, $_POST['search']);
                        
                        $query = "
                            SELECT 'College' AS Category, StudentNumber AS ID, LastName, FirstName, MiddleName, Date, Time, Course AS Details 
                            FROM college 
                            WHERE CONCAT(StudentNumber, LastName, FirstName, MiddleName, Date, Course, Year) LIKE '%$search%'
                            OR 'College' LIKE '%$search%'
                            
                            UNION
                            
                            SELECT 'Senior High' AS Category, StudentNumber AS ID, LastName, FirstName, MiddleName, Date, Time, CONCAT(Strand, ' - ', Grade, ' - ', Section) AS Details 
                            FROM shs 
                            WHERE CONCAT(StudentNumber, LastName, FirstName, MiddleName, Date, Strand, Grade, Section) LIKE '%$search%'
                            OR 'Senior High' LIKE '%$search%'
                            
                            UNION
                            
                            SELECT 'Employee' AS Category, IdNumber AS ID, LastName, FirstName, MiddleName, Date, Time, CONCAT(Unit, ' - ', Department) AS Details 
                            FROM employee 
                            WHERE CONCAT(IdNumber, LastName, FirstName, MiddleName, Date, Unit, Department) LIKE '%$search%'
                            OR 'Employee' LIKE '%$search%'
                            
                            ORDER BY Date DESC";
                    } else {
                        $query = "
                            SELECT 'College' AS Category, StudentNumber AS ID, LastName, FirstName, MiddleName, Date, Time, Course AS Details 
                            FROM college
                            
                            UNION
                            
                            SELECT 'Senior High' AS Category, StudentNumber AS ID, LastName, FirstName, MiddleName, Date, Time, CONCAT(Strand, ' - ', Grade, ' - ', Section) AS Details 
                            FROM shs
                            
                            UNION
                            
                            SELECT 'Employee' AS Category, IdNumber AS ID, LastName, FirstName, MiddleName, Date, Time, CONCAT(Unit, ' - ', Department) AS Details 
                            FROM employee
                            
                            ORDER BY Date DESC";
                    }

                    $search_result = mysqli_query($mysqli, $query);

                    while ($res = mysqli_fetch_array($search_result)) {
                        echo "<tr>";
                        echo "<td>" . $res['ID'] . "</td>";
                        echo "<td>" . $res['LastName'] . ", " . $res['FirstName'] . " " . $res['MiddleName'] . "</td>";
                        echo "<td>" . $res['Category'] . "</td>";
                        echo "<td>" . $res['Details'] . "</td>";
                        echo "<td><a href=\"patient/views/view.php?id=$res[ID]&category=$res[Category]\">View</a> | <a href=\"patient/delete/delete.php?id=$res[ID]&category=$res[Category]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </center>
        </div>
    </div>
</div>
</body>
</html>
