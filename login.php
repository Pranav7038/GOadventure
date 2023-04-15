<?php
session_start();
if(isset($_SESSION['username'])) {
  // user is already logged in, redirect to dashboard
  header("Location: dashboard.php");
  exit;
}

require_once('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
  $stmt->bindValue(':username', $username);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if($user && $password === $user['password']) {
    // login successful, store user information in session and redirect to dashboard
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Invalid username or password.";
  }
}
?>

<html lang="en" style>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2><span style="color: rgb(35, 49, 174);">LOGIN</span></h2>
                <p>Login to Website</p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div>
                                <img class="rounded-circle mb-3 mt-4" src="images/Login.jpg" width="90" height="90" />
                            </div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="username"
                                        placeholder="username" /></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password"
                                        placeholder="Password" /></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100"
                                        type="submit">Login</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>