<!doctype html>
<html lang=en>
<head>
<title>hostel detsils</title>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta charset=utf-8>
<style type="text/css">
	input{
		margin: 10px;
	}
	select{
		margin: 10px;
	}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body>
<aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		  <tr>
    <th scope="row"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="home.php">Home</a>        </li>
      <li><a href="Studend2.php">Register</a></li>
      <li><a class="MenuBarItemSubmenu" href="#">Login</a>
        <ul>
          <li><a href="login.php">student login</a></li>
          <li><a href="Admin_login.php">Admin</a></li>
          <li><a href="#">Login as guest</a></li>
        </ul>
      </li>
      <li><a href="dashboard.php">Clearence</a></li>
      <li><a href="email.php">contact us</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul></th>
  </tr>
  <tr style="background-color:#003; color:#FFF;">
    <th scope="row"><img src="logo.png" width="70" height="70" align="right" /><h2 >KIBABII HOSTEL</h2>
    <h1 style="text-align:justify;"> </h1></th>
  </tr>
</table>
    	</header>
        <div class="content">
        <section style="text-align:center">
         <img src="image.jpeg" width="190px" height="190px" />  
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
        <img src="download (3).jfif" width="190px" height="190px" />
        </section>
        
        
<h2 style="text-align:center; text-transform:capitalize; ">students details<br >Enter Your hostel Details as stated</h2>
	
        <section class="login">


<?php
require ('mysqli_connect.php'); // Connect to the database
// This code inserts a record into the users table
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Start an array named errors 

// Check for a membership hostel
	if (empty($_POST['hostel'])) {
		$errors[] = 'You forgot to choose your hostel.';
	} else {
		$hostel = trim($_POST['hostel']);
	}

// Trim the home address
// Check for gender
	if (empty($_POST['year'])) {
		$errors[] = 'You forgot to choose your gender.';
	} else {
		$year = trim($_POST['year']);
	}
	
// Check for a membership hostel
	if (empty($_POST['sem'])) {
		$errors[] = 'You forgot to choose your hostel.';
	} else {
		$sem = trim($_POST['sem']);
	}
// Trim the course
if (empty($_POST['roomno'])){
$ph=($_POST['roomno']);
}
elseif (!empty($_POST['roomno'])) {			
//Strip out everything tha is not a number
$roomno = preg_replace('/\D+/', '', ($_POST['roomno']));
$ph=$roomno;
}
if (empty($errors)) { // If there were no errors
//Determine whether the email address has already been registered	
$q = "SELECT user_id FROM hostels WHERE roomno = '$roomno' AND hostel= '$hostel' ";
$result=mysqli_query ($dbcon, $q) ; 	
if (mysqli_num_rows($result) == 0){//The mail address was not already registered therefore register the user in the users table
// Make the query:		
$q = "INSERT INTO hostels (user_id, hostel, year, sem, roomno) VALUES (' ', '$hostel', '$year', '$sem', '$ph')";		
		$result = @mysqli_query ($dbcon, $q); // Run the query
		if ($result) { // If the query ran OK
		header ("location: account.php"); 
		exit();
		} else { // If the query did not run OK
		// Message
			echo '<h2>System Error</h2>
			<p class="error">You could not be registered due to a system error. We apologize for the inconvenience.</p>'; 
			// Debugging message:
			echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
		} // End of if ($result)
		mysqli_close($dbcon); // Close the database connection
		// Include the footer and stop the script
		include ('includes/footer.php'); 
		exit();
	} else {//The email address is already registered 
	echo '<p class="error">The that room has been booked/p>';
	}
	}else{ // Display the errors
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Display each error
			echo " - $msg<br>\n";
		}
		echo '</p><h3>Please try again.</h3><p><br></p>';
		}// End of if (empty($errors))
} // End of the main Submit conditionals
?>

<form action="hostel.php" method="post">
<fieldset style="background-color:transparent; border-color:#FFF;">
<legend style="text-transform: capitalize;
  text-decoration:none;
  padding-left:5px;
  height: 10px;
  padding: 5px 10px 7px 8px;
  background: #0043A8;
  background: -moz-linear-gradient(#43A9FF, #0043A8);
  background: -o-linear-gradient(#43A9FF, #0043A8);
  background: -webkit-linear-gradient(#43A9FF, #0043A8);
  border-radius: 15px 15px 15px 15px;
  -moz-border-radius: 15px 15px 15px 15px;
  -webkit-border: 15px 15px 15px 15px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  -moz-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;">areas marked with an asterisk * are essential</legend>
	<br><label style="padding-left:49px;" class="label" for="hostel">select your hostel*</label>
	<select name="hostel">
	<option value="">- Select Hostel -</option>
	<option value="30"<?php if (isset($_POST['hostel']) AND ($_POST['hostel'] == '30')) echo ' selected="selected"'; ?>>hostel 1</option>
	<option value="125"<?php if (isset($_POST['hostel']) AND ($_POST['hostel'] == '125')) echo ' selected="selected"'; ?>>hostel 2</option>
	<option value="5"<?php if (isset($_POST['hostel']) AND ($_POST['hostel'] == '5')) echo ' selected="selected"'; ?>>hostel 3</option>
	<option value="2"<?php if (isset($_POST['hostel']) AND ($_POST['hostel'] == '2')) echo ' selected="selected"'; ?>>hostel 4</option>
	<option value="15"<?php if (isset($_POST['hostel']) AND ($_POST['hostel'] == '15')) echo ' selected="selected"'; ?>>hostel 5</option>
	</select>
<br><label style="padding-left:4px;" class="label" for="hostel">select your year of study*</label>
     <select name="year">
	<option value="">- Select  Year -</option>
	<option value="1"<?php if (isset($_POST['year']) AND ($_POST['year'] == '1')) echo ' selected="selected"'; ?>>1</option>
	<option value="2"<?php if (isset($_POST['year']) AND ($_POST['year'] == '2')) echo ' selected="selected"'; ?>>2 </option>
    <option value="3"<?php if (isset($_POST['year']) AND ($_POST['year'] == '3')) echo ' selected="selected"'; ?>>3 </option>
    <option value="4"<?php if (isset($_POST['year']) AND ($_POST['year'] == '4')) echo ' selected="selected"'; ?>>4 </option>
    <option value="5"<?php if (isset($_POST['year']) AND ($_POST['year'] == '5')) echo ' selected="selected"'; ?>>5 </option>
	</select>
    <br><label style="padding-left:38px;" class="label" for="hostel">select the Semester*</label>
<select name="sem">
	<option value="">- Select -</option>
	<option value="1"<?php if (isset($_POST['sem']) AND ($_POST['year'] == '1')) echo ' selected="selected"'; ?>> 1</option>
	<option value="2"<?php if (isset($_POST['sem']) AND ($_POST['year'] == '2')) echo ' selected="selected"'; ?>>2 </option>
    </select>
	<br><label style="padding-left:0;" class="label" for="roomno">Enter Your Room Number*</label><input id="roomno" type="text" name="roomno" size="30" maxlength="30" value="<?php if (isset($_POST['roomno'])) echo $_POST['roomno']; ?>" required>
	<p style="text-align: center; width: 40px; float: right;"><input class="button_small" id="submit" type="submit" name="submit" value="next"></p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
</body>
</html>