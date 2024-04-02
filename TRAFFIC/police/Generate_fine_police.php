<?php
include("importantconnect.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Fine</title>
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
            border: 2px solirgb(16, 15, 15);
            border-radius: 5px;
            font-size: 18px;
        }

        /* Style the dropdown options */
        select option {
            font-size: 16px;
            background-color: #f4f4f4; /* Background color of options */
            color: rgb(17, 17, 16); /* Text color of options */
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


        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            font-size: 25px;
            }
            .container{
                max-width: 1000px;
                width: 100%;
                background-color: #fff;
                padding: 25px 30px;
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.15);
                margin-top: 25px;
                margin-bottom: 25px;
              }
            h1 {
            text-align: center;
            color: #333;
            margin-top: 0;
            }
            p {
            text-align: center;
            color: #777;
            margin-bottom: 20px;
            }
            label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            }
            input[type="text"],
            input[type="date"],
            input[type="id"], 
            input[type="int"]
           {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            }
           
            a {
            color: #337ab7;
            text-decoration: none;
            }
            button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            }
            button[type="submit"]:hover {
            background-color: #45a049;
            }
           
    </style>
</head>
<body>
    
    
    <form action="Connect_fine.php" method="post">

    
            <div class="container">

            
  <?php
    $query = "SELECT * FROM report_history_police ORDER BY dateviolation DESC LIMIT 1";
    $data = mysqli_query($conn, $query);

    if (mysqli_num_rows($data) == 1) {
        $result = mysqli_fetch_assoc($data);
        ?>
            <h1>Generate Fine</h1>
            

            
            <label for="Case ID"><b>Case ID</b></label>
            <input type="id"  name ="Caseid" value="<?= $result['ID'] ?>" readonly>

            <label for="date"><b>Date of Violation</b></label>
            <input type="date"  name="date"  value="<?= $result['dateviolation'] ?>" readonly>

            <label for="bookingReason"><b>You are booked under:</b></label>
            <input type="text" name="bookingReason" value="<?= $result['offence'] ?>" readonly>
            
            <label for="Fine"><b>Fine</b></label>
            <input type="int" name="fine"  value="<?= $result['fine'] ?>" readonly required>
            <label for="Carnumber"><b>Car number</b></label>

            <input type="text" name="cno"  value="<?= $result['carsnumber'] ?>" readonly required>


            
            
            <button type='submit'class='registerbtn'>Submit</button>
            

           
          
       
           
        </form>
        <?php
    } else {
        echo "No records found";
    }
    ?>
    </div>
        
        </div>
 
</body>
</html>
