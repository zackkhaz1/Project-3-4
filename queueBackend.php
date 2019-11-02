<?php
session_start();
$servername = "mysql.eecs.ku.edu";
$username = "zack_khaz";
$password = "jo9aiyaa";
$dbName = "zack_khaz";

$connect = new mysqli($servername, $username, $password, $dbName);
if($connect->connect_error)
  {
    die("Connection failed: " . $connect->connect_error);
  }
  echo "<html><head>";
  echo'<link rel="stylesheet" href="styles.css">';
  echo '<title> Your Local Queue </title>';
echo "</head>";

//should add team to queue table in SQL database
//Should generate a html table of all teams in queue from SQL queue table
echo "</html>";
$connect->close();

 ?>
