<?php
session_start();
include "sidebar.php";
include "navbar.php";
if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<p>Role: <?php echo $_SESSION['role']; ?></p>

<a href="logout.php">Logout</a>

<div class="content">

<h2 class="mb-4">Welcome, <?php echo $_SESSION['user']; ?></h2>

<div class="row g-3">

<div class="col-md-4">
<div class="card p-3">
<h5>Employees</h5>
<p>Manage employee records</p>
<a href="employees.php" class="btn btn-primary">Open</a>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h5>Attendance</h5>
<p>Time tracking system</p>
<a href="attendance.php" class="btn btn-success">Open</a>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h5>Payroll</h5>
<p>Salary computation</p>
<a href="payroll.php" class="btn btn-warning">Open</a>
</div>
</div>

</div>

</div>