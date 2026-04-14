<?php
session_start();
include "config.php";
include "sidebar.php";

if(!isset($_SESSION['user']) || $_SESSION['role'] != 'admin'){
    header("Location: index.php");
    exit();
}

// ⏰ LATE CUT-OFF TIME
$late_time = "08:00:00";
?>

<div class="content">

<h2>Employee Attendance (Admin View)</h2>

<table class="table table-bordered table-striped">

<tr class="table-dark">
    <th>Employee ID</th>
    <th>Date</th>
    <th>Time In</th>
    <th>Time Out</th>
    <th>Status</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM attendance ORDER BY date DESC");

while($row = $result->fetch_assoc()){

    $time_in = $row['time_in'];

    // DEFAULT STATUS
    $status = "<span class='text-secondary'>NO TIME IN</span>";

    // CHECK IF MAY TIME IN
    if(!empty($time_in)){

        if($time_in > $late_time){
            $status = "<span class='text-danger fw-bold'>LATE</span>";
        } else {
            $status = "<span class='text-success fw-bold'>ON TIME</span>";
        }
    }

    echo "<tr>
        <td>{$row['employee_id']}</td>
        <td>{$row['date']}</td>
        <td>{$row['time_in']}</td>
        <td>{$row['time_out']}</td>
        <td>$status</td>
    </tr>";
}
?>

</table>

</div>