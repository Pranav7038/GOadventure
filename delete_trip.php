<?php
session_start();
if(!isset($_SESSION['username'])) {
  // user is not logged in, redirect to login page
  header("Location: login.php");
  exit;
}

require_once('config.php');

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $stmt = $pdo->prepare("DELETE FROM trips WHERE id = :id");
  $stmt->bindValue(':id', $id);
  $stmt->execute();
}

header("Location: dashboard.php");
exit;
?>