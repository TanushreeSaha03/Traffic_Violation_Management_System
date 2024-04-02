<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "person_details";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$ID = $_POST["Caseid"];
$date = $_POST["date"];
$bookingReason = $_POST["bookingReason"];

$sql = "INSERT INTO `bookcase_id`(`Caseid`, `dateviolation`, `reason`) VALUES ('$ID','$date','$bookingReason')";

$result = mysqli_query($conn,$sql);



            ?>

<?php
include("importantconnect.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Report Generation </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
  <?php
    $query = "SELECT * FROM bookcase_id ORDER BY dateviolation DESC LIMIT 1";
    $data = mysqli_query($conn, $query);

    if (mysqli_num_rows($data) == 1) {
        $result = mysqli_fetch_assoc($data);
        ?>
    <div class="title">Create a new Offence Record</div>
    <div class="content">
      <form action="connect1.php" method="post">
      <div class="offence-details">
            <div class="input-box">
                <span class="details">Date of Violation</span>
                <input type="date"  name="date"  value="<?= $result['dateviolation'] ?>" readonly>
              </div>
              <div class="input-box">
                <span class="details">Case ID</span>
                <input type="id"  name ="Caseid" value="<?= $result['Caseid'] ?>" readonly>
              </div>
          <div class="input-box">
            <span class="details"> Offence Area</span>
            <input type="text" name ="offencearea" placeholder="Enter the area of offence" required>
          </div>
          <div class="input-box">
            <span class="details">Offence Time</span>
            <input type="time" name ="offencetime" placeholder="Enter the time of Offence" required>
          </div>
          
          <div class="input-box">
            <span class="details">Offence</span>
           
            <input type="bookingReason" name="bookingReason" value="<?= $result['reason'] ?>" readonly>
              
          </div>
          <div class="input-box">
            <span class="details">Fine Charged</span>
            <input type="number" name="fine" placeholder="Amount Charged" required>
          </div>
        
          <div class="input-box">
            <span class="details">Driver's Lisence</span>
            <input type="id"  name="dlisence" required>
          </div>
          <div class="input-box">
            <span class="details">Gmail</span>
            <input type="text" name="dphno" required>
          </div>
        
          <div class="input-box">
            <span class="details">Car's Number</span>
            <input type="id" name="cno" required>
          </div>
          <div class="input-box">
            <span class="details">Officer's Name</span>
            <input type="text" name="offname" required>
          </div>
          <div class="input-box">
            <span class="details">Officer ID</span>
            <input type="id" name="ofid" required>
          </div>
        
        </div>
        
        <div class="button">
          <input type="submit" value="Submit">
        </div>
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
            border: 2px solid rgb(20, 20, 19);
            border-radius: 5px;
            font-size: 18px;
        }

        /* Style the dropdown options */
        select option {
            font-size: 16px;
            background-color: #f4f4f4; /* Background color of options */
            color: rgb(20, 19, 19); /* Text color of options */
            padding: 5px 10px;
        }

        select option:hover {
            background-color: rgb(12, 12, 12); /* Hover background color */
            color: #fff; /* Hover text color */
            border: 2px solid rgb(18, 18, 18);
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



        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
 
}
.container{
  max-width: 1000px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin-top: 30px;
  margin-bottom: 30px;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
 
}
.content form .offence-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .offence-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 3 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 450;
  margin-bottom: 5px;
}
.offence-details .input-box input{
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 15px;
  border-radius: 5px;
  padding-left: 10px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  
}

.offence-details .input-box input:focus,
.offence-details .input-box input:valid{
  border-color: #0d0d0e;
}

 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 80%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #252525, #121112);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #9a9797, #979797);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .offence-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .offence-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .offence-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
    
        

    </style>


    

</html>

