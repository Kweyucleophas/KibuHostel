<?php
require_once "dbcon.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']))  {

    $name = $_POST['name'];
    $Admision = $_POST['admision'];
    $Email = $_POST['Email'];
    $Year = $_POST['year'];
    $Sem = $_POST['sem'];
    $hostel = $_POST['hostel'];
    $roomno = $_POST['roomno'];
    $reason = $_POST['reason'];
    $q = "INSERT INTO students (`name`, `Admision`, `Email`, `Year`, `Sem`, `hostel`, `roomno`, `reason`) VALUES ('$name', '$Admision', '$Email', '$Year', '$Sem', '$hostel', '$roomno', '$reason')";

    if ($dbcon->query($q)===TRUE) {
        $id = $dbcon->insert_id;
        $checkout_date = date('Y-m-d');
        $update_query = "UPDATE students SET cleared = 0, checkout_date = '$checkout_date' WHERE id = $id";
        if ($dbcon->query($update_query) === TRUE) {
            echo "Clearance Request Submitted Successfully";
        } else {
            echo "Error updating record: " . $dbcon->error;
        }
    } else{
        echo "Error:".$q. "<br>" .$dbcon->error;
    }
    $dbcon->close();
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clearance Form</title>
    <style type="text/css" >
    	/* Style for form container */
form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

/* Style for form inputs and labels */
label, input, select, textarea {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

/* Style for submit button */
input[type=submit] {
  background-color: darkblue;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

/* Style for form header */
h1 {
  text-align: center;
  margin-bottom: 20px;
}

/* Style for form errors */
.error {
  color: red;
  font-weight: bold;
  margin-top: 10px;
}
body{
    background-color: whitesmoke;
}


    </style>
</head>
<body>
    <form action="" method="post">
        <center><img style="width:80px; height: 70px; text-align: center;" src="logo.png"></center>
        <h2 style="text-align: center;">Fill The Form</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="admision">Registration Number:</label>
        <input type="text" name="admision" id="admision" required>
        <label for="Email">Email:</label>
        <input type="Email" name="Email" id="Email" required>
        <label for="Year">Year:</label>
         <select name="year" id="year" required>
            <option value="">Select Year</option>
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
            <option value="3">Third Year</option>
            <option value="4">Fourth Year</option>
         </select>
         <label for="sem">Semester</label>
         <select name="sem" id="sem" required>
            <option value="">Select Semester</option>
            <option value="1">First Semester</option>
            <option value="2">Second Semeste</option>
         </select>
         <label for="hostel">Hostel:</label>
         <input type="text" name="hostel" id="hostel" required>
         <label for="hostel">Room Number</label>
         <input type="text" name="roomno" id="roomno" required>
         <label for="reason">Reason For Leaving</label>
         <textarea name="reason" id="reason"></textarea>
         <input type="submit" value="Request Clearance">
    </form>
    <div style="text-align: center;">
      <img src="copy.jpeg">
  </div>
</body>
</html>
