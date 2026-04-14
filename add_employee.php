<?php
include "config.php";

if(isset($_POST['add'])){
    $conn->query("INSERT INTO employees (first_name,last_name,position,department,salary)
    VALUES ('$_POST[fname]','$_POST[lname]','$_POST[position]','$_POST[department]','$_POST[salary]')");

    header("Location: employees.php");
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
<div class="card p-4">
<h3>Add Employee</h3>

<form method="POST">
<input class="form-control mb-2" name="fname" placeholder="First Name">
<input class="form-control mb-2" name="lname" placeholder="Last Name">
<input class="form-control mb-2" name="position" placeholder="Position">
<input class="form-control mb-2" name="department" placeholder="Department">
<input class="form-control mb-2" name="salary" placeholder="Salary">

<button class="btn btn-primary" name="add">Save</button>
</form>
</div>
</div>