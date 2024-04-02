<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "person_details";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(!$conn)
{
    echo "not connected";
}
else{
  //  echo "connected";
}

?>