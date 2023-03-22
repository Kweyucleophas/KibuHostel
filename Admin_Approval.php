<?php
require_once "dbcon.php";

function sendNotificationEmail($to, $subject, $message) {
	$headers = "From: admin@example.com\r\n";
	$headers .= "Reply-To: admin@example.com\r\n";
	$headers .= "Content-Type: text/html\r\n";

	$mail_sent = mail($to, $subject, $message, $headers);
	if (!$mail_sent) {
		echo "Error sending notification email to " . $to;
	}
}

if (isset($_POST['action']) && isset($_POST['id'])) {
	$action = $_POST['action'];
	$id = $_POST['id'];

	$q = "UPDATE students SET cleared = " . ($action == 'approve' ? 'TRUE' : 'FALSE') . " WHERE id = " . $id;
	$result = $dbcon->query($q);

	if ($result) {
		$q = "SELECT * FROM students WHERE id = " . $id;
		$result = $dbcon->query($q);

		if ($result && $result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$name = $row['name'];
			$email = $row['Email'];

			if ($action == 'approve') {
				$message = "Dear " . $name . ",<br><br>Your clearance request has been approved. You are now cleared to proceed with your studies.<br><br>Thank you,<br>The Admin";
				$subject = "Clearance Request Approved";
			} else {
				$message = "Dear " . $name . ",<br><br>Your clearance request has been rejected. Please see the admin for more information.<br><br>Thank you,<br>The Admin";
				$subject = "Clearance Request Rejected";
			}

			sendNotificationEmail($email, $subject, $message);
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Approval</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		th {
			background-color:darkblue;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			cursor: pointer;
		}

		button.approve {
			background-color: gold;
		}

		button.reject {
			background-color: darkred;
		}
		img{
			width: 160px;
			height: 160px;
		}
	</style>
</head>
<body>
	<center>
	<img src="logo.png">
</center>
<table>
	<thead>
	<tr>
		<th>Name</th>
		<th>Admission Number</th>
		<th>Email</th>
		<th>Year</th>
		<th>Semester</th>
		<th>Hostel</th>
	<th>Room Number</th>
		<th>Reason</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
	$q ="SELECT * FROM students WHERE cleared = FALSE";
	$result = $dbcon->query($q);
	if ($result->num_rows>0) {
		while ($row=$result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["name"]. "</td>";
			echo "<td>".$row["Admision"]. "</td>";
			echo "<td>".$row["Email"]. "</td>";
			echo "<td>".$row["Year"]. "</td>";
			echo "<td>".$row["Sem"]. "</td>";
			echo "<td>".$row["hostel"]. "</td>";
			echo "<td>".$row["roomno"]. "</td>";
			echo "<td>".$row["reason"]. "</td>";
			echo "<td><button onclick=\"approveClearance(".$row["id"].")\">Approve</button><button onclick=\"rejectClearance(".$row["id"].")\">Reject</button></td>";
			echo "</tr>";
		}
	} else {
		echo "<tr><td colspan=\"9\">No pending clearance requests</td></tr>";
	}
	?>
</tbody>
</table>

<script>
function approveClearance(id) {
  // Perform the approve clearance action using AJAX or other methods
  console.log("Approved clearance for id " + id);
}

function rejectClearance(id) {
  // Perform the reject clearance action using AJAX or other methods
  console.log("Rejected clearance for id " + id);
}
function approveClearance(id) {
  $.post("admin_approval.php", { action: "approve", id: id })
   .done(function(data) {
     alert(data);
     location.reload();
   })
   .fail(function() {
     alert("Error approving clearance request");
   });
}

function rejectClearance(id) {
  $.post("admin_approval.php", { action: "reject", id: id })
   .done(function(data) {
     alert(data);
     location.reload();
   })
   .fail(function() {
     alert("Error rejecting clearance request");
   });
}

</script>

</body>
</html>
