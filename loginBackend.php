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


$user = $_POST["username"];
$pass = $_POST["password"];
$_SESSION['username'] = $user;
$_SESSION['password'] = $pass;
$sql = "INSERT INTO usernames (username, password) VALUES ('$user', '$pass')";
if($connect->query($sql) === true)
  {
      header('Location: profile.php');
  }
else {
  echo "Could not insert " . $connect->error;
}

$connect->close();

 ?>
