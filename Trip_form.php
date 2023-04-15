<?php
session_start();
if (!isset($_SESSION['username'])) {
    // user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];

    $stmt = $pdo->prepare("INSERT INTO trips ( destination, date, notes) VALUES ( :destination, :date, :notes)");
    $stmt->bindValue(':destination', $destination);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':notes', $notes);
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Book Trip - GOadventure</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>GOadventure</h1>
        <form method="post">
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="notes">Services</label>
                <textarea class="form-control" id="notes" name="notes" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="Payment">Payment method</label><br>
                <input class="form-control" type="Radio" id="t1" name=" Cash"> Cash
                <input class="form-control" type="Radio" id="t1" name="Online payment"> Online payment
            </div>
            <img src="images/scan.jpg" style="width:200px"><br>
            <button type=" submit" class="btn btn-primary ">Add Trip</button> <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>