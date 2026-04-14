<?php
session_start();
include "config.php";
include "sidebar.php";

if(!isset($_SESSION['user']) || $_SESSION['role'] != 'admin'){
    header("Location: index.php");
    exit();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="content">

<div class="container mt-4">

<h2>Payroll Records (Admin)</h2>

<table class="table table-bordered table-striped">

<tr class="table-dark">
    <th>Employee ID</th>
    <th>Name</th>
    <th>Pay Period</th>
    <th>Total Salary (Net Pay)</th>
    <th>Date</th>
</tr>

<?php
$res = $conn->query("
SELECT p.*, e.first_name, e.last_name
FROM payroll p
LEFT JOIN employees e ON p.employee_id = e.id
ORDER BY p.id DESC
");

if($res && $res->num_rows > 0){

    while($row = $res->fetch_assoc()){

        $name = $row['first_name'].' '.$row['last_name'];

        echo "<tr>
            <td>{$row['employee_id']}</td>
            <td>$name</td>
            <td>{$row['pay_period_start']} - {$row['pay_period_end']}</td>
            <td><b>₱{$row['net_pay']}</b></td>
            <td>{$row['pay_date']}</td>
        </tr>";
    }

} else {
    echo "<tr><td colspan='5' class='text-center'>No payroll records found</td></tr>";
}
?>

</table>

</div>
</div>