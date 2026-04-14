<?php
session_start();
include "config.php";
include "navbar.php";

$role = $_GET['role'] ?? '';

if(isset($_POST['login'])){

    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    if(empty($username) || empty($password) || empty($role)){
        $error = "Fill all fields";
    } else {

        $res = $conn->query("SELECT * FROM users WHERE username='$username'");

        if($res && $res->num_rows == 1){

            $user = $res->fetch_assoc();

            // ✅ ROLE CHECK FIXED
            if($user['role'] !== $role){
                $error = "Wrong role selected! Your account is: ".$user['role'];
            }
            else if(password_verify($password, $user['password'])){

                $_SESSION['user'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header("Location: dashboard.php");
                exit();

            } else {
                $error = "Wrong password!";
            }

        } else {
            $error = "User not found!";
        }
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5" style="max-width:400px;">

<div class="card p-4 shadow">

<h3 class="text-center">Login</h3>

<p class="text-center text-muted">
Role: <b><?php echo htmlspecialchars($role); ?></b>
</p>

<?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">

<!-- FIX: keep role consistent -->
<input type="hidden" name="role" value="<?php echo htmlspecialchars($role); ?>">

<input class="form-control mb-2" name="username" placeholder="Username" required>

<input type="password" class="form-control mb-2" name="password" required>

<button class="btn btn-success w-100" name="login">Login</button>

</form>

<a href="index.php" class="d-block text-center mt-2">Back</a>

</div>
</div>