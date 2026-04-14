<?php
include "config.php";
include "navbar.php";

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $conn->query("INSERT INTO users (username,password,role)
    VALUES ('$username','$password','$role')");

    header("Location: index.php");
    exit();
}
?>

<form method="POST">
<input name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">

<select name="role">
   <option value="user">User</option>
   <option value="admin">Admin</option>
</select>

<button name="register">Register</button>
</form>