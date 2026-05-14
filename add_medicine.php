<?php
include "db.php";

if(isset($_POST['add'])){

$name=$_POST['name'];
$dosage=$_POST['dosage'];
$time=$_POST['time'];
$notes=$_POST['notes'];

mysqli_query($conn,"INSERT INTO medicines(medicine_name,dosage,time,notes)
VALUES('$name','$dosage','$time','$notes')");

header("Location:view_medicine.php");
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Add Medicine</h2>

<form method="POST">

<input type="text" name="name" placeholder="Medicine Name">

<input type="text" name="dosage" placeholder="Dosage">

<input type="time" name="time">

<textarea name="notes" placeholder="Notes"></textarea>

<button name="add">Add Medicine</button>

</form>

</body>
</html>
