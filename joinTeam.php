<?php
$servername = "mysql.eecs.ku.edu";
$username = "zack_khaz";
$password = "jo9aiyaa";
$dbName = "zack_khaz";

$connect = new mysqli($servername, $username, $password, $dbName);
if($connect->connect_error)
  {
    die("Connection failed: " . $connect->connect_error);
  }
else {
echo "Connected successfully <br>";
}
$teamId = $_GET['teamId'];
//should add player to team specified by team ID code in SQL database table
//should display team with members and their record
$connect->close();

 ?>
