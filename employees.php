<?php
session_start();
include "config.php";
include "sidebar.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<div class="content">

<h3 class="mb-3">Employees</h3>

<a href="add_employee.php" class="btn btn-primary mb-3">+ Add Employee</a>

<table class="table table-bordered shadow">

<tr class="table-dark">
<th>ID</th>
<th>Name</th>
<th>Position</th>
<th>Department</th>
<th>Salary</th>
<th>Action</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM employees");

while($row = $res->fetch_assoc()){
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['first_name']} {$row['last_name']}</td>
<td>{$row['position']}</td>
<td>{$row['department']}</td>
<td>₱{$row['salary']}</td>
<td>
<a href='edit_employee.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
<a href='delete_employee.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Delete this employee?')\">Delete</a>
</td>
</tr>";
}
?>

</table>

</div>