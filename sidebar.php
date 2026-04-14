<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
    font-family: Arial;
}

/* SIDEBAR */
.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    top:0;
    left:0;
    background:#0d6efd;
    padding-top:20px;
    color:white;
}

.sidebar h3{
    text-align:center;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    padding:12px 20px;
    text-decoration:none;
    transition:0.2s;
}

.sidebar a:hover{
    background:rgba(255,255,255,0.2);
    padding-left:25px;
}

/* CONTENT */
.content{
    margin-left:260px;
    padding:20px;
}

/* CARDS */
.card{
    border:none;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

/* TABLE */
.table{
    background:white;
    border-radius:10px;
    overflow:hidden;
}

.table-dark{
    background:#0d6efd !important;
}
</style>

<div class="sidebar">
    <h3>💼Integrated Human Resource Information System (I HRIS)
</h3>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="employees.php">👨‍💼 Employees</a>
    <a href="attendance_admin.php">📝Attendance</a>
    <a href="payroll.php">💰 Payroll</a>
    <a href="logout.php">🚪 Logout</a>
</div>