<?php
session_start();
if (!isset($_SESSION['username'])) {
    // user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];

    $stmt = $pdo->prepare("UPDATE trips SET destination = :destination, date = :date, notes = :notes WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':destination', $destination);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':notes', $notes);
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM trips WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $trip = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$trip) {
        // trip not found, redirect to dashboard
        header("Location: dashboard.php");
        exit;
    }
} else {
    // id parameter not provided, redirect to dashboard
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Trip - Trip Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Trip</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $trip['id']; ?>">
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination"
                    value="<?php echo $trip['destination']; ?>" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $trip['date']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="notes">Services</label>
                <textarea class="form-control" id="notes" name="notes" rows="3">
            <?php echo $trip['notes']; ?></textarea>
                <div>
                    <button type=" submit" class="btn btn-primary">Save Changes</button>
                    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>