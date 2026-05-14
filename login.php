<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$user = $_POST['username'];
$pass = $_POST['password'];

$q = mysqli_query($conn,"SELECT * FROM users WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($q) > 0){

$_SESSION['user']=$user;

header("Location: dashboard.php");
exit();

}else{

echo "Invalid Username or Password";

}

}
?>


<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="floating-shape shape1"></div>
<div class="floating-shape shape2"></div>
<div class="floating-shape shape3"></div>

<div class="login-container">

<div class="left-panel">
<h1>💊 MedReminder</h1>
<p>
Smart Medicine Tracking System with modern dashboard.
</p>
<img src="https://cdn-icons-png.flaticon.com/512/4320/4320371.png" width="220">
</div>

<div class="right-panel">

<h2>Welcome Back 👋</h2>

<form method="POST">

<div class="input-box">
<i class="fa-solid fa-user"></i>
<input type="text" name="username" placeholder="Username">
</div>

<div class="input-box">
<i class="fa-solid fa-lock"></i>
<input type="password" name="password" placeholder="Password">
</div>

<button name="login">Login Now</button>

</form>

</div>

</div>

</body>

</html>
