<?php
session_start();
if (isset($_SESSION['username'])) {
  // user is already logged in, redirect to dashboard
  header("Location: Dashboard.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trip Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Trip Book</h1>
        <p>Plan and book your next adventure!</p>
        <img src="images\booktrip.jpg" width="70%"><br><br>
        <a href="login.php" class="btn btn-primary btn-lg">Login</a>
        <a href="register.php" class="btn btn-primary btn-lg">Register</a>
    </div><?php
$host = 'localhost'; // database host
$username = 'root'; // database username
$password = ''; // database password
$dbname = 'tripbook'; // database name

// create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if(mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

</body>

</html>