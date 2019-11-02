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
echo "<html><head>";
echo'<link rel="stylesheet" href="styles.css">';
echo '<title> Your Local Queue </title>';
echo "</head>";
$teamName = $_GET['teamName']; //team name given by user
//should add team to SQL database table using name given by html
//and assign it a team ID for other people to use to join team
echo "</html>";
$connect->close();
 ?>
