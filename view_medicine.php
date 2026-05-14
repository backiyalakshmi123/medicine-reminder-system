<?php
include "db.php";

$result=mysqli_query($conn,"SELECT * FROM medicines");
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="table-container">

<h2>💊 My Medicines</h2>

<table>
<tr>
<th>Name</th>
<th>Dosage</th>
<th>Time</th>
<th>Notes</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['medicine_name']; ?></td>
<td><?php echo $row['dosage']; ?></td>
<td class="reminder"><?php echo $row['time']; ?></td>
<td><?php echo $row['notes']; ?></td>
</tr>

<?php } ?>

</table>

</div>

<script src="js/reminder.js"></script>

</body>
</html>
