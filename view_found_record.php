
<!doctype html>
<html lang=en>
<head>
<title>View found record page</title>
<meta charset=utf-8>
   <link rel="stylesheet" href="style.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="hostel.css">

</head>
<style type="text/css">
	.p{
		text-align: center;
		color: darkgray;
	}
	.table{
		margin-top: 70px;
	}
</style>
<body><!-- Start of view-found-record content -->
<div class="form2">
        
        </div>
        <div class="side-menu">
          <div class="brand-name">
             <h2 style="display: contents;color: black;"> <img src="logo.png" width="120px" style="width: 60px; height: 60px;">KIBABII HOSTEL</h2>
          </div>
          <ul>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="Add_block.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Block</a></span></li>
            <li><a href="Add_room.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Room</span></li>
             <li><a href="Add_Item.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Items</a></span></li>
             <li><a href="Add_Student.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>Student</a></span>
             </li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Update/Edit</a></span></li>
            <li><a href="edit_record.php" style="text-decoration: none;"><img src="icon/logout.png" style="width: 30px; height: 30px; margin: 2px"><span>Logout</a></span></li>
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
        <div class="content">
        <section style="text-align:center">
       <img src="image.jpeg" width="190px" height="190px" />  
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
       <img src="download (3).jfif" width="190px" height="190px" />
        </section>
<h2 style="text-align:center; text-transform:capitalize; ">Search Result <a class="button_small" href="search.php" style="height: 40px; color:#FFF;">search for members</a> <a class="button_small" href="Generate_Report.php" style="height: 40px; color:#FFF; float:right;">View All Student</a></h2>
<section class="login" style="width:auto;">
<?php 
// This code retrieves records from the users table.
require ('mysqli_connect.php'); // Connect to the db.
echo '<p class="p">If no record is shown, this is because you had an incorrect in the search form.Click the search and try again</p>';
$admmision=$_POST['admmision'];
$admmision = mysqli_real_escape_string($dbcon, $admmision);
$lname=$_POST['lname'];
$lname = mysqli_real_escape_string($dbcon, $lname);
$q = "SELECT lname, admmision, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS regdat, school, check_in, user_id FROM users WHERE lname='$lname' AND admmision='$admmision' ORDER BY registration_date ASC ";		
$result = @mysqli_query ($dbcon, $q); // Run the query.
if ($result) { // If it ran, display the records.
// Table header.
echo '<table class="table">
<tr><td><b>Edit</b></td>
<td><b>Delete</b></td>
<td><b>Last Name</b></td>
<td><b>Admision</b></td>
<td><b>Email</b></td>
<td><b>Date Registered</b></td>
<td><b>School</b></td>
<td><b>Checked in</b></td>
</tr>';
// Fetch and display the records:
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<tr class="even">
	<td><a href="edit_record.php?id=' . $row['user_id'] . '">Edit</a></td>
	<td><a href="delete_record.php?id=' . $row['user_id'] . '">Delete</a></td>
	<td>' . $row['lname'] . '</td>
	<td>' . $row['admmision'] . '</td>
	<td>' . $row['email'] . '</td>
	<td>' . $row['regdat'] . '</td>
	<td>' . $row['school'] . '</td>
	<td>' . $row['check_in'] . '</td>
	</tr>';
	}
	echo '</table>'; // Close the table.
	mysqli_free_result ($result); // Free up the resources.	
} else { // If it did not run OK.
// Error message:
	echo '<p class="error">The current users could not be retrieved. We apologize for any inconvenience.</p>';
	// Debugging message:
	echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if ($result). Now display the total number of records/members.
$q = "SELECT COUNT(user_id) FROM users";
$result = @mysqli_query ($dbcon, $q);
$row = @mysqli_fetch_array ($result, MYSQLI_NUM);
$members = $row[0];
mysqli_close($dbcon); // Close the database connection.
echo "<p>Total students: $members</p>";
?>
<!-- End of view-found-record page content -->

</section></div>
<footer style=" text-align:center; margin-top: 100px;" class="foot">copy right Kibabii University &copy; 2022</footer>
</div>
</div>
</body>
</html>