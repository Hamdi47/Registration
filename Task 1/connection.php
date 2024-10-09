<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
  echo "Connected";
} else {
  echo "Unable to connect";
}




?>