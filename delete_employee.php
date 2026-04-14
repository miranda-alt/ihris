<?php
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // DELETE related records first
    $conn->query("DELETE FROM attendance WHERE employee_id='$id'");
    $conn->query("DELETE FROM payroll WHERE employee_id='$id'");

    // THEN delete employee
    $conn->query("DELETE FROM employees WHERE id='$id'");
}

header("Location: employees.php");
exit();
?>