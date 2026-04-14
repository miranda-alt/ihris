<?php include "navbar.php"; ?>

<div class="container mt-5 text-center">

<h1>Welcome to HRIS System</h1>
<p>Easy Employee Management System</p>

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">

  <a class="navbar-brand" href="index.php">HRIS Home</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav">

    <ul class="navbar-nav ms-auto">

      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-warning" href="admin_login.php">Admin Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="user_login.php">User Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-success" href="register.php">Register</a>
      </li>

    </ul>

  </div>
</nav>