<?php
include "config.php";

$id = $_GET['id'];

$res = $conn->query("
SELECT p.*, e.first_name, e.last_name 
FROM payroll p
JOIN employees e ON p.employee_id = e.id
WHERE p.id='$id'
");

$data = $res->fetch_assoc();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
<div class="card p-4">

<h3>Payslip</h3>

<p><b>Name:</b> <?php echo $data['first_name']." ".$data['last_name']; ?></p>
<p><b>Period:</b> <?php echo $data['pay_period_start']." - ".$data['pay_period_end']; ?></p>
<p><b>Basic Salary:</b> ₱<?php echo $data['basic_salary']; ?></p>
<p><b>Overtime Pay:</b> ₱<?php echo $data['overtime_pay']; ?></p>
<p><b>Late Deduction:</b> ₱<?php echo $data['late_deduction']; ?></p>
<p><b>Other Deductions:</b> ₱<?php echo $data['deductions']; ?></p>

<h4>Net Pay: ₱<?php echo $data['net_pay']; ?></h4>

<button onclick="window.print()" class="btn btn-primary">Print</button>

</div>
</div>