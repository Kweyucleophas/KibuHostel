<?php require_once("dbcon.php")?>
<?php
$student_id= $_GET['id'];
$q= "DELETE FROM students WHERE id= $student_id";
$result = $dbcon->query($q);
header("Location: Admin_Approval.php"); 

?>