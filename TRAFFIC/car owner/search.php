<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "person_details";

// Establish a database connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carNumber = mysqli_real_escape_string($conn, $_POST['carNumber']);
    
    // Construct an SQL SELECT query
    $sql = "SELECT * FROM report_history_police WHERE carsnumber = '$carNumber'";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Date Violation</th><th>Reason</th><th>Fine</th><th>Car Number</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['dateviolation'] . "</td>";
                echo "<td>" . $row['offence'] . "</td>";
                echo "<td>" . $row['fine'] . "</td>";
                echo "<td>" . $row['carsnumber'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data found for car number: " . $carNumber;
        }
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }

    mysqli_free_result($result);
}

mysqli_close($conn);
?>
