<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KIBU HOSTEL MANAGEMENT</title>
</head>

<body>


	<header id="head"><hgroup id="hed">
		 <tr>
    <th scope="row"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="home.php">Home</a>        </li>
      <li><a href="Studend2.php">Join</a></li>
      <li><a href="#">About</a>
       
      </li>
      <li><a href="dashboard.php">Clearence</a></li>
      <li><a href="contactus.php">contact us</a></li>
      <li><a href="#">Logout</a></li>
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
        
        <!-- Start of the login page content. -->
<?php 
// This section processes submissions from the login form.
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//connect to database
	require ('mysqli_connect.php');
	// Validate the email address:
	if (!empty($_POST['email'])) {
			$e = mysqli_real_escape_string($dbcon, $_POST['email']);
	} else {
	$e = FALSE;
		echo '<section class="login"><p class="error">You forgot to enter your email address.</p></section>';
	}
	// Validate the password:
	if (!empty($_POST['psword'])) {
			$p = mysqli_real_escape_string($dbcon, $_POST['psword']);
	} else {
	$p = FALSE;
		echo '<section class="login"><p class="error">You forgot to enter your password.</p></section>';
	}
	if ($e && $p){//if no problems
// Retrieve the user_id, first_name and user_level for that email/password combination:
		$q = "SELECT user_id, fname, user_level FROM users WHERE (email='$e' AND psword=SHA1('$p'))";		
//run the query and assign it to the variable $result
		$result = mysqli_query ($dbcon, $q); 
// Count the number of rows that match the email/password combination
	if (@mysqli_num_rows($result) == true) {//The user input matched the database record
// Start the session, fetch the record and insert the three values in an array
		session_start();
		$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$_SESSION['user_level'] = (int) $_SESSION['user_level']; // Ensure that the user level is an integer
$url = ($_SESSION['user_level'] === 1) ? 'admin-page.php' : 'studentspro.php'; // Use a ternary operation to set the URL
header('Location: ' . $url); // Make  the browser load either the members� or the admin page
exit(); // Cancels the rest of the script.
	mysqli_free_result($result);
	mysqli_close($dbcon);
	} else { // No match was made.
	echo '<section class="login"><p class="error">The email address and password entered do not match our records.<br>Perhaps you need to register, click the Register button on the header menu</p></section>';
	}
	} else { // If there was a problem.
		echo '<section class="login"><p class="error">Please try again.</p></section>';
	}
	mysqli_close($dbcon);
	} // End of SUBMIT conditional.
?>
<!-- Display the form fields-->
<section class="login">
<?php include ('includes/login_page.inc.php'); ?>

</section>
<br />
         
        
</div>
<center><footer class="foot">copy right Kibabii University &copy; 2022</footer></center>
</body>
</html>
