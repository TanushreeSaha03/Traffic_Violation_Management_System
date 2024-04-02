<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "person_details";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);


$date = $_POST["date"];
$ID = $_POST["Caseid"];
$offarea = $_POST["offencearea"];
$offtime = $_POST["offencetime"];
$offence = $_POST["bookingReason"];
$fine = $_POST["fine"];
//$driversname = $_POST["driversname"];
$driverslisence = $_POST["dlisence"];
$dphno = $_POST["dphno"];
//$carsname = $_POST["cname"];
//$carsphno = $_POST["cphno"];
$carsnumber = $_POST["cno"];
$offname = $_POST["offname"];
$ofid = $_POST["ofid"];

$sql = "INSERT INTO `report_history`(`dateviolation`, `ID`, `off.area`, `off.time`, `offence`, `fine`, `drivers lisence`, `gmail`,  `carsnumber`, `offname`, `off.id.`) VALUES ('$date', '$ID', '$offarea', '$offtime', '$offence', '$fine', '$driverslisence', '$dphno',   '$carsnumber', '$offname', '$ofid')";


$result = mysqli_query($conn , $sql);


            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>--</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url(Traffic.jpg) repeat, rgba(255, 255, 255, 0.9);
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

         /* Added CSS for the back arrow */
         .back-arrow {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: rgb(227, 144, 35);
            text-decoration: none;
            cursor: pointer;
            transform: scaleX(0.7);
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
        }

        h1 {
            color: rgb(227, 144, 35);
            font-size: 28px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 2px solid rgb(227, 144, 35);
            border-radius: 5px;
            font-size: 18px;
        }

        /* Style the dropdown options */
        select option {
            font-size: 16px;
            background-color: black; /* Background color of options */
            color: rgb(227, 144, 35); /* Text color of options */
            padding: 5px 10px;
        }

        select option:hover {
            background-color: rgb(227, 144, 35); /* Hover background color */
            color: #fff; /* Hover text color */
            border: 2px solid rgb(227, 144, 35);
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid white;
            background-color: rgb(227, 144, 35);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: white;
            color: rgb(227, 144, 35);
            border: 2px solid rgb(227, 144, 35);
        }
    </style>


    

</html>