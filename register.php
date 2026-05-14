<?php
include "db.php";

if(isset($_POST['register'])){

$user=$_POST['username'];
$pass=$_POST['password'];

mysqli_query($conn,"INSERT INTO users(username,password)
VALUES('$user','$pass')");

echo "Registration Successful. <a href='login.php'>Login</a>";

}
?>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

body>

<div class="floating-shape shape1"></div>
<div class="floating-shape shape2"></div>
<div class="floating-shape shape3"></div>

<div class="login-container">

<div class="left-panel">
<h1>Create Account ✨</h1>
<p>
Join MedReminder and manage medicines professionally.
</p>
<img src="https://cdn-icons-png.flaticon.com/512/2966/2966486.png" width="220">
</div>

<div class="right-panel">

<h2>Register Here</h2>

<form method="POST">

<div class="input-box">
<i class="fa-solid fa-user"></i>
<input type="text" name="username" placeholder="Username">
</div>

<div class="input-box">
<i class="fa-solid fa-lock"></i>
<input type="password" name="password" placeholder="Password">
</div>

<button name="register">Create Account</button>

</form>

</div>

</div>

</body>

</html>
