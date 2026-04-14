<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$username' AND role='admin'");

    if($res->num_rows == 1){

        $user = $res->fetch_assoc();

        if(password_verify($password, $user['password'])){

            $_SESSION['user'] = $user['username'];
            $_SESSION['role'] = 'admin';

            header("Location: dashboard.php");
            exit();

        } else {
            $error = "Wrong password";
        }

    } else {
        $error = "Admin not found";
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5" style="max-width:400px;">

<div class="card p-4 shadow">

<h3 class="text-danger text-center">Admin Login</h3>

<?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">

<input class="form-control mb-2" name="username" placeholder="Username" required>
<input type="password" class="form-control mb-2" name="password" placeholder="Password" required>

<button class="btn btn-danger w-100" name="login">Login</button>

</form>

<a href="index.php" class="d-block text-center mt-2">Back</a>

</div>
</div>