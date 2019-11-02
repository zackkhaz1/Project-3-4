<?php
session_start();
echo "<html>";
$servername = "mysql.eecs.ku.edu";
$username = "zack_khaz";
$password = "jo9aiyaa";
$dbName = "zack_khaz";
$connect = new mysqli($servername, $username, $password, $dbName);
$user = $_SESSION["username"]; //<!-- should get username and password from last php page using session -->
echo "<head>";
  echo'<link rel="stylesheet" href="styles.css">';
  echo '<title> Your profile </title>';
echo "</head>";
echo "<body>";
  echo "<center>";
    echo "<h1> Welcome to your profile page, ";
    echo $user . "</h1>";
  echo "</center>";
  echo '<div class="topnav">';
  echo '<a href="profile.html"class="active">My Profile</a>';
  echo '<a href="joinTeam.html">Join a Team</a>'; // this should redirect to another html page with the appropriate info and JS functions to join team-->
  echo '<a href="userTeam.html">View your current team</a>'; // this should redirect to another html page with the appropriate info -->
  echo '<a href="joinQueue.html"> Join a queue </a>'; // this should redirect to another html page with the appropriate info and JS functions to join court queue -->
  echo "</div>";
  echo "<div>";
    echo "<h2> Your current record: </h2>";
    $userResult = mysqli_query($connect, "SELECT * FROM usernames WHERE username='$user'");
    $row = mysqli_fetch_array($userResult);
    $user_Wins = $row['wins'];
    $user_losses = $row['losses'];
    echo "<table border=\"1\">";
    echo "<tr><td> Wins </td><td> Losses </td></tr>";
    echo "<tr><td>0" . "</td><td>0" . "</td></tr>";
echo "</table>";

  echo '<p id="record"> </p>';

echo "</body>";

echo "</html>";
$connect->close();
?>
