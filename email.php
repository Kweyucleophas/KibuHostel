<?php
$errors = array();
$missing = array();
// check if the form has been submitted
if (isset($_POST['send'])) {
  // email processing script
  $to = 'kweyucleophas6@gmail.com';
  $subject = 'Query from Hostel Management';
  // list expected fields
  $expected = array('name', 'email', 'comments');
  // set required fields
  $required = array('name', 'comments', 'email');
  // create additional headers
  $headers = "From: Hostel Management<feedback@example.com>\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  require('processmail.inc.php');
  if ($mailSent) {
	header('Location: http://www.example.com/thank_you.php');
	exit;
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8">
<title>query email</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="hostel.css">
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
      <li><a href="contactus.php">contact us</a></li>
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
        </section><section class="login" style="width:auto;">
    <h1 style="text-align:center; text-transform:capitalize; >Hostel Query<BR>Contact Us </h2>
        <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
          <p class="warning">Sorry, your mail could not be sent. Please try later.</p>
        <?php } elseif ($missing || $errors) { ?>
           <p class="warning">Please fix the item(s) indicated.</p>
        <?php } ?>
        <form id="send" method="post" action="email.php">
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
            <p>
                <label for="name">Name:*
                <?php if ($missing && in_array('name', $missing)) { ?>
                  <span class="warning">Please enter your name</span>
                <?php } ?>
                </label>
                <input name="name" id="name" type="text" class="formbox"
                <?php if ($missing || $errors) { 
                 echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';
                } ?>>
            </p>
            <p>
                <label for="email">Email:*
                <?php if ($missing && in_array('email', $missing)) { ?>
                  <span class="warning">Please enter your email address</span>
                <?php } elseif (isset($errors['email'])) { ?>
                  <span class="warning">Invalid email address</span>
                <?php } ?>
                </label>
                <input name="email" id="email" type="text" class="formbox"
                <?php if ($missing || $errors) { 
                 echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"';
                } ?>>
            </p>
            <p>
                <label for="comments">Comments:*
                <?php if ($missing && in_array('comments', $missing)) { ?>
                  <span class="warning">Please enter your comments</span>
                <?php } ?>
                </label>
                <textarea name="comments" id="comments" cols="60" rows="8"><?php
                if ($missing || $errors) {
                  echo htmlentities($comments, ENT_COMPAT, 'UTF-8');
                } ?></textarea>
            </p>
            
                <input  id="submit" type="submit" value="Send message">
            </p></fieldset>
        </form>
        <P> You can also send SMS to 0769414159 for quick assistance or whats app</P>
        </section></div>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
</body>
</html>
