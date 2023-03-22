<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Collect form data
  $admission_no = $_POST["admission_no"];
  $hostel_name = $_POST["hostel_name"];
  $room_no = $_POST["room_no"];
  $clearance_date = $_POST["clearance_date"];

  // Perform validation
  $errors = array();

  // Check if admission number is valid
  if (!preg_match("/^[A-Z]{2}\d{4}$/", $admission_no)) {
    $errors[] = "Admission number is invalid";
  }

  // Check if hostel name is not empty
  if (empty($hostel_name)) {
    $errors[] = "Hostel name is required";
  }

  // Check if room number is not empty
  if (empty($room_no)) {
    $errors[] = "Room number is required";
  }

  // Check if clearance date is not in the past
  if (strtotime($clearance_date) < time()) {
    $errors[] = "Clearance date cannot be in the past";
  }

  // If there are no errors, process the clearance
  if (empty($errors)) {
    // Process the clearance and display success message
    echo "Clearance processed successfully";
  } else {
    // Display error messages
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
  }
}
?>
