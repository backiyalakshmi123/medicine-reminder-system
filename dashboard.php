<?php
session_start();
include "db.php";

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

$count=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM medicines"));
?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="css/dashboard.css">
</head>
<script>
const cards=document.querySelectorAll('.card');

cards.forEach(card=>{
card.addEventListener('mousemove',e=>{
card.style.transform='rotateY(10deg) rotateX(10deg)';
});

card.addEventListener('mouseleave',()=>{
card.style.transform='rotateY(0deg) rotateX(0deg)';
});
});
script>
function toggleTheme(){
document.body.classList.toggle('light-mode');
}
<script>
function updateClock(){
const now=new Date();
document.getElementById('clock').innerHTML=now.toLocaleTimeString();
}

setInterval(updateClock,1000);
updateClock();
</script>
</script>
<script>
setTimeout(()=>{
document.getElementById('toast').style.display='none';
},3000);
</script>
<body>
<div class="toast" id="toast">
<!-- ✅ Medicine Added Successfully -->
</div>
<div class="sidebar">

<h2>💊 MedReminder</h2>

<a href="dashboard.php">Dashboard</a>
<a href="add_medicine.php">Add Medicine</a>
<a href="view_medicine.php">View Medicines</a>
<a href="calendar.php">Calendar</a>
<a href="reports.php">Reports</a>
<a href="profile.php">Profile</a>
<a href="logout.php">Logout</a>

</div>
<div class="dashboard-grid">

    <div class="dashboard-card float-animation">
        <h3>Total Medicines</h3>
        <h2>15</h2>
    </div>

    <div class="dashboard-card">
        <h3>Today's Reminders</h3>
        <h2>8</h2>
    </div>

    <div class="dashboard-card float-animation">
        <h3>Completed</h3>
        <h2>20</h2>
    </div>

</div>
<section class="hero card">
    <div class="hero-content">
        <h1>Medicine Reminder System</h1>

        <p>
            Track medicines, reminders and health schedules easily.
        </p>

        <button class="hero-btn">
            Get Started
        </button>
    </div>
</section>
<div class="toast" id="toast">

</div>
<div class="theme-toggle" onclick="toggleTheme()">
🌙 Theme
</div>
<div class="main">

<h1>Dashboard</h1>

<div class="cards">

<div class="card glass-card">
<i class="fa-solid fa-pills"></i>
<h3>Total Medicines</h3>
<h2>12</h2>
</div>

<div class="card glass-card">
<i class="fa-solid fa-clock"></i>
<h3>Today's Reminders</h3>
<h2>5</h2>
</div>

<div class="card glass-card">
<i class="fa-solid fa-check"></i>
<h3>Completed</h3>
<h2>9</h2>
</div>

<div class="card glass-card">
<i class="fa-solid fa-heart-pulse"></i>
<h3>Health Score</h3>
<h2>95%</h2>
</div>

</div>
<div class="progress-circle">
75%
</div

<canvas id="chart"></canvas>

</div>
<div class="live-clock" id="clock"></div>
<div class="theme-toggle" onclick="toggleTheme()">
🌙 Theme
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/charts.js"></script>

</body>
</html>
