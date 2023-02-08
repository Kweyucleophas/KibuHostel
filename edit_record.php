<!doctype html>
<html lang=en>
<head>
<title>Edit a record</title>
<meta charset=utf-8>
 <link rel="stylesheet" href="style.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>
<style type="text/css">
  .form{
  background: whitesmoke;
  align-content: center;
  width: 1000px;
  margin-left: 10px;
  margin-top: 500spx;
   border: 1px solid #ccc;
  }
  .content{
    margin-top: 100px;
  }
  .formedit{
    align-content: center;
   margin-left: 70px;
   margin-top: 50px;
   margin-bottom: 50px;
  }
  input{
    margin: 5px;
  }
  }
    .container .content .cards .card .box{

    }
</style>

<body>
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
      </header>
        <div class="content">
        <section style="text-align:center">
       <img src="image.jpeg" width="190px" height="190px" />  
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
       <img src="download (3).jfif" width="190px" height="190px" />
        </section>
<!-- Start of the page-specific content. -->
<h2 style="text-align:center; text-transform:capitalize;">Edit a Record<a class="button_small" href="search.php" style="height: 40px; color:#FFF;">search for members</a> <a class="button_small" href="admin-page.php" style="height: 40px; color:#FFF; float:right;">View All Students</a></h2>
<?php 
// After clicking the Edit link in the register_found_record.php page. This editing interface appears 
// Look for a valid user ID, either through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
  $id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
  $id = $_POST['id'];
} else { // No valid ID? stop the script.
  echo '<p class="error">This page has been accessed in error.</p>';
  //include ('footer.php'); 
  exit();
}
require ('mysqli_connect.php'); 
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors = array();
  // Look for the first name:
  if (empty($_POST['fname'])) {
    $errors[] = 'You forgot to enter the first name.';
  } else {
    $fn = mysqli_real_escape_string($dbcon, trim($_POST['fname']));
  }
  // Look for the last name:
  if (empty($_POST['lname'])) {
    $errors[] = 'You forgot to enter the last name.';
  } else {
    $ln = mysqli_real_escape_string($dbcon, trim($_POST['lname']));
  }
  //xxxxxxx
  if (empty($_POST['matress'])) {
    $errors[] = 'You forgot to enter the first name.';
  } else {
    $matress = mysqli_real_escape_string($dbcon, trim($_POST['matress']));
  }
  //xx
  if (empty($_POST['curtain'])) {
    $errors[] = 'You forgot to enter the first name.';
  } else {
    $curtain = mysqli_real_escape_string($dbcon, trim($_POST['curtain']));
  }
  //xxxx
  if (empty($_POST['keyy'])) {
    $errors[] = 'You forgot to enter the first name.';
  } else {
    $keyy = mysqli_real_escape_string($dbcon, trim($_POST['keyy']));
  }
  
  // Look for the email address:
  if (empty($_POST['email'])) {
  $errors[] = 'You forgot to enter the email address.';
  } else {
  $e = mysqli_real_escape_string($dbcon, trim($_POST['email']));
  }
  // Look for the class of membership:
  if (!empty($_POST['school'])) {
    $school = mysqli_real_escape_string($dbcon, trim($_POST['school']));
  }else{
  $class = NULL;
  }
  // Look for the payment confirmation:
  if (!empty($_POST['check_in'])) {
    $check_in = mysqli_real_escape_string($dbcon, trim($_POST['check_in']));
  }else{
  $check_in = NULL;
  }
if (empty ($errors)) { // If no problems occurred
//determine whether the email address has already been registered for a user, 
//but ignore the email address of the user being updated, he may wish to keep his
//current email address
$q =@ "SELECT user_id FROM users WHERE email = '$e' AND user_id != $id";
$result = @mysqli_query($dbcon, $q);
if (mysqli_num_rows($result) == 0){//The email address is not already registered or it
//belongs to the user being updated, therefore, update the users table
@$q = @"UPDATE users SET fname='$fn', lname='$ln', matress='$matress', curtain='$curtain', keyy='$keyy', email='$e', school='$school', 
check_in='$check_in' WHERE user_id=$id LIMIT 1";
  $result = @mysqli_query ($dbcon, $q);
  if (mysqli_affected_rows($dbcon) == 1) { // If it ran OK
  // Echo a message confirming that the edit was satisfactory
  echo '<h3>The user has been edited.</h3>';  
  } else { // Echo a message if the query failed
  echo '<p class="error">The user was not edited due to a system error.
  We apologize for any inconvenience.</p>'; 
// Error message
  echo '<p>' .@ mysqli_error($dbcon). '</p>'; 
// Debugging message
  }
  }else{//The email address is already registered for another user
  echo '<p class="error">The email address is not acceptable because it is already registered for another member</p>';
  } 
  }else { // Display the errors
  echo '<p class="error">The  following error(s) occurred:<br />';
    echo '<p class="error">The following error(s) occurred:<br />';
    foreach ($errors as $msg) { // Echo each error.
      echo " - $msg<br />\n";
    }
    echo '</p><p>Please try again.</p>';
  } // End of if (empty($errors))section.
} // End of the conditionals
// Select the user's information:
$q = "SELECT fname, lname, matress, curtain, keyy, email, school, check_in FROM users WHERE user_id=$id";   
$result = @mysqli_query ($dbcon, $q);
if (mysqli_num_rows($result) == 1) { // Valid user ID, display the form.
  // Get the user's information:
  $row = mysqli_fetch_array ($result, MYSQLI_NUM);
  // Create the form:
  echo ' <section class="login">';
  echo '<form class="formedit" action="edit_record.php" method="post">
<p><label style="padding-left:4px; class="label" for="fname">First Name:</label><input class="fl-left" id="fname" type="text" name="fname" size="30" maxlength="30" value="' . $row[0] . '"><br>
<label class="label" style="padding-left:4px; for="lname">Last Name:</label><input class="fl-left" type="text" name="lname" size="30" maxlength="40" value="' . $row[1] . '"></p>
<p><label style="padding-left:23px; class="label" for="matress">matress:</label><input class="fl-left" id="matress" type="text" name="matress" size="30" maxlength="30" value="' . $row[2] . '"><br>
<label style="padding-left:29px; class="label" for="curtain">curtain:</label><input class="fl-left" id="curtain" type="text" name="curtain" size="30" maxlength="30" value="' . $row[3] . '"></p>
<p><label style="padding-left:56px; class="label" for="keyy">key:</label><input class="fl-left" id="keyy" type="text" name="keyy" size="30" maxlength="30" value="' . $row[4] . '"><br>
<label class="label" style="padding-left:1px; for="email">Email Address:</label><input class="fl-left" type="text" name="email" size="30" maxlength="50" value="' . $row[5] . '"></p>
<p><label class="label" style="padding-left:40px; for="school">hostel:</label><input class="fl-left" type="text" name="school" size="30" maxlength="50" value="' . $row[6] . '"><br><label style="padding-left:40px; class="label" for="check_in">check in?:</label><input class="fl-left" type="text" name="check_in" size="30" maxlength="50" value="' . $row[7] . '"></p>
<p style="text-align: center; width: 40px; float: right;"><input class="button_small" id="submit" type="submit" name="submit" value="update"></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';
} else { // The user could not be validated
  echo '<p class="error">This page has been accessed by an unauthorized person.</p></section>';
}
mysqli_close($dbcon);
?>
</section></div>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
</div>
</div>
</body>
</html>