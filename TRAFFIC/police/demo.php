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
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #444;
        }

        caption {
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    $query = "SELECT * FROM report_history_police ORDER BY dateviolation DESC LIMIT 1";
    $data = mysqli_query($conn, $query);

    if (mysqli_num_rows($data) == 1) {
        $result = mysqli_fetch_assoc($data);
        ?>

        <form>
            <caption>Records of Police</caption>
            <label for="dateviolation">Date of Violation:</label>
            <input type="text" id="dateviolation" name="dateviolation" value="<?= $result['dateviolation'] ?>" readonly>

            <label for="ID">Case ID:</label>
            <input type="text" id="ID" name="ID" value="<?= $result['ID'] ?>" readonly>

            <label for="off.area">Offence Area:</label>
            <input type="text" id="off.area" name="off.area" value="<?= $result['off.area'] ?>" readonly>

            <!-- Add similar fields for other data -->

            <button type="submit" disabled>Update</button>
        </form>
    <?php
    } else {
        echo "No records found";
    }
    ?>
</div>
</body>
</html>
