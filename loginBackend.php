<?php
$servername = "mysql.eecs.ku.edu";
$username = "z181k532";
$password = "jo9aiyaa";
$dbName = "z181k532"

$connect = new mysqli($servername, $username, $password, $dbName);
if($connect->connect_error)
  {
    die("Connection failed: " . $connect->connect_error);
  }
echo "Connected successfully";

$sql = "CREATE TABLE usernames
(
  ID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
)";

$webUser = $connect->mysqli_real_escape_string($_REQUEST['username'];
$webPass = $connect->mysqli_real_escape_string($_REQUEST['password'];

$sql = "INSERT INTO usernames (username, password) VALUES ('$webUser','$webPass')";
if($connect->query($sql) === true)
  {
    echo "Records inserted"
  }
else {
  echo "Could not insert " . $connect->error;
}

$connect->close();

 ?>
