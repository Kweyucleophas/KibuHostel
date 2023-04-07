<?php require_once("dbcon.php")?>
<?php
// ... code to connect to the database ...

// Get the ID of the student to approve
$id = $_GET['id'];

// Update the database to mark the student as approved
// Update the database to mark the student as approved and cleared
$q = "UPDATE students SET approved = 1, cleared = 1 WHERE id = $id";
$result = $dbcon->query($q);



// ... code to close the database connection ...

// Redirect back to the list of unapproved students
header("Location: Admin_Approval.php");
?>
