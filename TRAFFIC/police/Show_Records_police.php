<?php
include("importantconnect.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: black;
            color: white;
            margin: 2%;
        }

        table {
            background-color: black;
            color: white;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 2px;
            text-align: left;
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #444;
        }
        caption {
    font-size: 20px;
    text-align: center; 

}
    </style>
</head>
<body>

<?php
$query = "SELECT * FROM report_history_police"; 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0) {
    echo '<table>
        <caption><b>Records of Police</b></caption> <!-- Table heading -->
        <tr>
            <th>Date of Violation</th>
            <th>Case ID</th>
            <th>Offence Area</th>
            <th>Offence Time</th>
            <th>Offence</th>
            <th>Fine Charged</th>
          
            <th>Driver\'s License</th>
            <th>Gmail</th>
           
            <th>Car\'s Number</th>
            <th>Officer\'s Name</th>
            <th>Officer ID</th>
        </tr>';

    while($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
            <td>{$result['dateviolation']}</td>
            <td>{$result['ID']}</td>
            <td>{$result['off.area']}</td>
            <td>{$result['off.time']}</td>
            <td>{$result['offence']}</td>
            <td>{$result['fine']}</td>
          
            <td>{$result['drivers lisence']}</td>
            <td>{$result['gmail']}</td>
          
            <td>{$result['carsnumber']}</td>
            <td>{$result['offname']}</td>
            <td>{$result['off.id.']}</td>
        </tr>";
    }

    echo '</table>';
}
else {
    echo "No records found";
}
?>

</body>
</html>
<?php
$query = "SELECT * FROM report_history"; 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0) {
    echo '<table>
        <caption><b>Records of Admin</b></caption> <!-- Table heading -->
        <tr>
            <th>Date of Violation</th>
            <th>Case ID</th>
            <th>Offence Area</th>
            <th>Offence Time</th>
            <th>Offence</th>
            <th>Fine Charged</th>
           
            <th>Driver\'s License</th>
            <th>Gmail </th>
            
            <th>Car\'s Number</th>
            <th>Officer\'s Name</th>
            <th>Officer ID</th>
        </tr>';

    while($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
            <td>{$result['dateviolation']}</td>
            <td>{$result['ID']}</td>
            <td>{$result['off.area']}</td>
            <td>{$result['off.time']}</td>
            <td>{$result['offence']}</td>
            <td>{$result['fine']}</td>
           
            <td>{$result['drivers lisence']}</td>
            <td>{$result['gmail']}</td>
          
            <td>{$result['carsnumber']}</td>
            <td>{$result['offname']}</td>
            <td>{$result['off.id.']}</td>
        </tr>";
    }

    echo '</table>';
}
else {
    echo "No records found";
}
?>

</body>
</html>

