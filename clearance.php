<?php require ('mysqli_connect.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $Fname = $_POST["Fname"];
  $Lname = $_POST["Lname"];
  $Email = $_POST["email"];
  $Age = $_POST["age"];
  $Location = $_POST["Location"];
  $Admmision = $_POST["admmision"];
  $Hostel = $_POST["hostel"];
  $Roomno = $_POST["roomno"];
  $Year = $_POST["year"];
  $Sem = $_POST["sem"];
  $Letter = $_POST["Letter"];

   $q = "INSERT INTO clearence_form (Fname, Lname, email, age, Location, admmision, hostel, roomno, year, sem, Letter) 
          VALUES ('$Fname', '$Lname', '$Email', '$Age', '$Location', '$Admmision', '$Hostel', '$Roomno ', '$Year', '$Sem', '$Letter')";
           if (mysqli_query($dbcon, $q)) {
    echo "Record added successfully.";
  } else {
    echo "Error: " . $q . "<br>" . mysqli_error($dbcon);
  }
  
  
  // Send email to admin
  $to = "kweyucleophas6@gmail.com";
  $subject = "Clearance request from $Admmision";
  $message = "Admission Number: $Admmision\nHostel Name: $Hostel\nHostel Room Number: $Roomno\nYear: $Year\nSemester: $Sem";
  $headers = "From: noreply@example.com\r\n";
  $headers .= "Reply-To: noreply@example.com\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Clearance request sent to admin.";
  } else {
    echo "Failed to send clearance request.";
  }
}
?>
