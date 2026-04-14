<?php
include "config.php";

$id = $_GET['id'];

// FETCH DATA
$res = $conn->query("SELECT * FROM employees WHERE id='$id'");
$row = $res->fetch_assoc();

// UPDATE DATA
if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pos = $_POST['position'];
    $dept = $_POST['department'];
    $salary = $_POST['salary'];

    $conn->query("UPDATE employees SET
        first_name='$fname',
        last_name='$lname',
        position='$pos',
        department='$dept',
        salary='$salary'
        WHERE id='$id'
    ");

    header("Location: employees.php");
    exit();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

<div class="card p-4 shadow">

<h3>Edit Employee</h3>

<form method="POST">

<input class="form-control mb-2" name="fname" value="<?php echo $row['first_name']; ?>" required>
<input class="form-control mb-2" name="lname" value="<?php echo $row['last_name']; ?>" required>
<input class="form-control mb-2" name="position" value="<?php echo $row['position']; ?>" required>
<input class="form-control mb-2" name="department" value="<?php echo $row['department']; ?>" required>
<input class="form-control mb-2" name="salary" value="<?php echo $row['salary']; ?>" required>

<button class="btn btn-success" name="update">Update</button>
<a href="employees.php" class="btn btn-secondary">Cancel</a>

</form>

</div>
</div>