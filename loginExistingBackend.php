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
$userInfo = mysqli_query($connect,"SELECT * FROM usernames WHERE username = '$user'");
$row = mysqli_fetch_array($userInfo);
if($user == $row['username']){
  if($pass == $row['password']){
      header('Location: profile.php');
  }
}
else if($user != $row['username'] || $pass != $row['password']) {
  header('Location: frontPage.html');
}
$connect->close();

 ?>
