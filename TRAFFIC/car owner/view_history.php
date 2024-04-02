<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>View Case History</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
            margin: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100px;
            padding: 5px;
            margin: 5px;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }
    </style>

</head>

<body>
    <h2>Search by Car Number</h2>
    <form method="POST">
        <label for="carNumber">Car Number:</label>
        <input type="text" name="carNumber" id="carNumber" required>
        <button type="submit">Search</button>
    </form>

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
            } //else {
               // echo "No data found for car number: " . $carNumber;
           // }
        } else {
            echo "Query failed: " . mysqli_error($conn);
        }
    
        mysqli_free_result($result);
    }
    
    mysqli_close($conn);
    ?>
    
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
        $sql = "SELECT * FROM report_history WHERE carsnumber = '$carNumber'";
        
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
            } //else {
               // echo "No data found for car number: " . $carNumber;
           // }
        } else {
            echo "Query failed: " . mysqli_error($conn);
        }
    
        mysqli_free_result($result);
    }
    
    mysqli_close($conn);
    ?>
    
   
</body>

</html>


