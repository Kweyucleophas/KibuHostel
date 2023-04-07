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
<!doctype html>
<html lang=en>
<head>
<title>Admin page</title>
<meta charset=utf-8>
    <link rel="stylesheet" href="style.css" />
    <title>Unapproved Students</title>
	<style>
		.container{
			  display: block;
  margin-top: 20px;
   overflow-y: scroll;
    top: 46px;
   
		}
		table {
			border-collapse: collapse;
			width: 100%;
			text-align: center;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th {
			background-color: gold;
			color: white;
		}
		img{
			width: 70px;
			height: 50pxs;
		}
		button{
        margin-right: 20px;
        background-color: darkblue;
        height: 40px;
        border-radius: 5px;
        color: white;
        text-decoration: blink;}
         a{
        	text-decoration: none;
        	color: white;
        }
	</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>
<body>
   <div class="form2">
        
        </div>
        <div class="side-menu">
          <div class="brand-name">
             <h2 style="display: contents;color: black;"> <img src="logo.png" width="120px" style="width: 60px; height: 60px;">KIBABII HOSTEL</h2>
          </div>
          <ul>
            <li><a href="admin-page.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="hosteldetails.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Block</a></span></li>
            <li><a href="Admin_Approval.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Approve</a></span></li>
             <li><a href="Add_Item.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Items</a></span></li>
             <li><a href="Add_Student.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>Student</a></span>
             </li>
            <li><a href="edit_record.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Update/Edit</a></span></li>
            <li><a href="indexhostel.php" style="text-decoration: none;"><img src="icon/logout.png" style="width: 30px; height: 30px; margin: 2px"><span>Logout</a></span></li>
        </ul>
        </div>
        <div class="container">
  <div class="header">
    <div class="nav">
    <div class="search">
<input type="text" placehold="search">
<button type="submit"><img src="icon/search-512 (1) (1).webp" style="width: 30px; height: 30px;"></button>
    </div>
    <div class="user">
      <a href="Add_Student.php" class="btn">Add New</a>
       <img src="icon/notif.png" style="display: flex; width: 30px; height: 30px;">
      <div class="img-case">
       <img src="icon/icons8-username-50.png">
        <p style="margin-left:45px;0px;"><strong style="margin-top: 100px;">Hello,<br>
      </div>
    </div>
     </div>
</div>
    <div class="content">
        <div class="">
<div class="">
    <div class="">
    <div style="width: 900px; height: 1000px; overflow-x: scroll; margin: auto; margin-top: 50px; display: fixed; overflow-y: scroll;
   ">
	<center>
		<img src="logo.png">
		<h2>Approve the Following Students</h2>
	</center>
	<button><a href="approvedStudents.php">Show approved students</a></button>
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
				
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php require_once("dbcon.php")?>
			<?php
// ... code to check if the user is an admin ...

// Get all unapproved students
$sql = "SELECT * FROM students WHERE cleared = 0 AND approved = 0";

$result = $dbcon->query($sql);
// Check if any rows were returned
if ($result->num_rows > 0) {
    // Start the table and output the header row
    //echo '<table>';
   
    echo '<tbody>';

    // Loop through the rows of data and output each one in a table row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['Admision'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['Year'] . '</td>';
        echo '<td>' . $row['Sem'] . '</td>';
        echo '<td>' . $row['hostel'] . '</td>';
        echo '<td>' . $row['roomno'] . '</td>';
        echo '<td>' . $row['reason'] . '</td>';
        echo '<td>';
        if ($row['cleared'] == 0) {
            echo '<button><a href="approve.php?id=' . $row['id'] . '">Approve</a></button> |<button style="background-color: darkred;"><a href="reject.php?id=' . $row['id'] . '">Decline</a></button>';
        } else {
            echo 'Approved';
        }
        echo '</td>';
        echo '</tr>';
    }

    // End the table
    echo '</tbody></table>';
} else {
    echo 'No unapproved students found.';
}

// ... code to close the database connection ...
?>

		</tbody>
	</table>
</div>	
</div>
</div>
</body>
</html>








