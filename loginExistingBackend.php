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

$user = $_POST["username"];
$pass = $_POST["password"];
$userInfo = mysqli_query($connect,"SELECT * FROM usernames WHERE username = '$user'");
$row = mysqli_fetch_array($userInfo);
if($user == $row['username']){
  if($pass = $row['password']){
      header('Location: profile.html'); //redirect to profile page after successful account creation
      exit;
  }
}
$connect->close();

 ?>
