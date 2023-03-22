<!DOCTYPE html>
<html>
<head>
	<title>Clearence Approval</title>
</head>
<body>
<h1>Clearence Approval</h1>
<form method="post" action="approve.php">
	<table>
		<tr>
			<th>Student Id</th>
			<th>Student Name</th>
			<th>email address</th>
			<th>Room No</th>
			<th>Room Damages</th>
			<th>Clearence status</th>
			<th>approve</th>
		</tr>
	</table>
</form>

</body>
</html>
<?php 
require ('Connections/dbcon.php'); 
$q = "SELECT * FROM clearence_form WHERE status ='cleared'";
$result=mysqli_query ($dbcon, $q) ; 
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$row['Id']."</td>";
echo "<td>".$row['Id']."</td>";
echo "<td>".$row['Fname']."</td>";
echo "<td>".$row['email']."</td>";	
echo "<td>".$row['roomno']."</td>";
echo "<td>".$row['RoomDamages']."</td>";
echo "<td>".$row['status']."</td>";
echo "<td><input type='checkbox' name='approve[]' value='".$row['Id']."'></td>";
}
?>