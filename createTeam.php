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

echo "<html><head>";
echo'<link rel="stylesheet" href="styles.css">';
echo '<title> Your Team </title>';
echo "</head>";
$teamName = $_POST["teamName"]; //team name given by user
//should add team to SQL database table using name given by html
//and assign it a team ID for other people to use to join team
echo $teamName;
$sql = "INSERT INTO teams (teamName) VALUES ('$teamName')";
if($connect->query($sql) === true)
  {
    echo "<h2> Team created, redirecting to profile page </h2>";
    sleep(3);
    header('Location: profile.php');
  }
else {
  echo "Could not insert " . $connect->error;
}

echo "</html>";
$connect->close();
 ?>
