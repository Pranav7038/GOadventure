<?php
session_start();
if (!isset($_SESSION['username'])) {
    // user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

require_once('config.php');

$stmt = $pdo->prepare("SELECT * FROM trips");
$stmt->execute();
$trips = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Trips - Trip Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Planned Trips</h1>
        <a href="Book_trip.php" class="btn btn-primary mb-2">Add Trip</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trips as $trip) : ?>
                    <tr>
                        <td><?php echo $trip['destination']; ?></td>
                        <td><?php echo $trip['date']; ?></td>
                        <td><?php echo $trip['notes']; ?></td>
                        <td>
                            <a href="edit_trip.php?id=<?php echo $trip['id']; ?>" class="btn btn-sm btn-outline-primary mr-2">Edit</a>
                            <a href="delete_trip.php?id=<?php echo $trip['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this trip?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</body>

</html>