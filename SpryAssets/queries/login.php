<!doctype html>
<html lang=en>
<head>
<title>Login page</title>
<meta charset=utf-8>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>
<body>
<aside id="contact">contact</aside>
<header id="head"><hgroup id="hed">
	<hgroup id="hed">
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
      <li><a href="contactus.php">contact us</a></li>
      <li><a href="#">Logout</a></li>
    </ul></th>
  </tr>
  <tr style="background-color:#003; color:#FFF;">
    <th scope="row"><img src="logo.png" width="70" height="70" align="right" /><h2 >KIBABII HOSTEL</h2>
    <h1 style="text-align:justify;"> </h1></th>
  </tr>
</table>  
    	</hgroup>
    	</header>
        <div class="content">
        <section style="text-align:center">
       <img src="image.jpeg" width="190px" height="190px" />  
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
        <img src="download (3).jfif" width="190px" height="190px" />
        </section>
        <section class="login">
<?php
//include ( 'includes/header_login.php' ) ;
// Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">A problem occurred:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="safer-register-page.php">Register</a></p>' ;
}
?>
<!-- Display the login form fields -->
<h2>Login: <span style="color:#F00;">make sure your register to use this portal use ur admision or worker id to register</h2>
<form action="process_login.php" method="post">
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
<p><label class="label" for="uname">admission number/worker id*:</label><input id="uname" type="text" 
name="uname" size="16" maxlength="16" value="<?php if (isset($_POST['uname']))
echo $_POST['uname']; ?>"></p>
<p><label style="padding-left:125px;" class="label" for="psword">Password*:</label><input id="psword" 
type="password" name="psword" size="16" maxlength="16" value="<?php if
(isset($_POST['psword'])) echo $_POST['psword']; ?>" ></p>
<p ><input  class="button_small" type="submit" value="Login" > <a class="button_small" style="float:right; text-decoration:none; height:30px; color:#FFF;" href="safer-register-page.php">register</a></p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

</body>
</html>