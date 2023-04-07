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

<!doctype html>
<html lang=en>
<head>
<title>Admin page</title>
<meta charset=utf-8>
<style>
        .container{
              display: block;
  margin-top: 20px;
   overflow-y: scroll;
    top: 46px;
   
        }
        .content{
           display: block;
  
   overflow-y: scroll;
    top: 20px;
        }
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
    <link rel="stylesheet" href="style.css" />
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
             <li><a href="dashboard.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="Student_Clearance.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Clearence</a></span></li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Status</a></span></li>
             <li><a href="payment.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Payments</a></span></li>
             <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>ConductUs</a></span>
             </li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Help</a></span></li>
        </ul>
        </div>
        <div class="container">
  <div class="header">
    <div class="nav">
    <div class="search">
<input type="text" placehold="search" style="width:400px;">
<button type="submit"><img src="icon/search-512 (1) (1).webp" style="width: 30px; height: 30px;"></button>
    </div>
    <div class="user">
      
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
     <div style="width: 900px; height: 550px; overflow-x: scroll; margin: auto; margin-top: 50px; display: fixed; overflow-y: scroll;
   ">
    <div class="">
     <form action="" method="post">
        <center><img style="width:80px; height: 70px; text-align: center;" src="logo.png"></center>
        <h1>Hostel Clearance Form</h1>
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
  </div>
</div>
</div>
</body>
</html>









