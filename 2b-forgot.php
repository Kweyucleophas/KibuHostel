<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="hostel.css" type="text/css" />
<style type="text/css">
  form{
    margin: 30px;
    text-align: center;
  }
  #submit{
    background-color: darkblue;
    color: white;
    height: 30px;
    border-radius: 3px;
  }
</style>

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
        
        <!-- (A) PASSWORD RESET FORM -->
    <form method="post" target="_self">
      Email:
      <input type="email" name="email" required value="Lucky@.com"/>
      <input type="submit" id="submit" value="Reset Password"/>
    </form>
<?php
require "dbcon.php";

  
  $stmt = $dbcon->prepare("SELECT * FROM `users` WHERE `email`=?");
  $stmt->bind_param("s", $_POST["email"]);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $msg = is_array($user)
        ? ""
        : $_POST["email"] . " is not registered.";

  // (B3) CHECK PREVIOUS REQUEST (PREVENT SPAM)
  if ($msg == "") {
    $prvalid = 36000;
    $stmt = $dbcon->prepare("SELECT * FROM `password_reset` WHERE `user_id`=?");
    $stmt->bind_param("i", $user["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $request = $result->fetch_assoc();
    $now = strtotime("now");
    if (is_array($request)) {
      $expire = strtotime($request["reset_time"]) + $prvalid;
      if ($now < $expire) { $msg = "Please try again later"; }
    }
  }

  // (B4) CHECKS OK - CREATE NEW RESET REQUEST
  if ($msg == "") {
    // RANDOM HASH
    $hash = md5($user["email"] . $now);

    // DATABASE ENTRY
    $stmt = $dbcon->prepare("REPLACE INTO `password_reset` VALUES (?,?,?)");
    $stmt->bind_param("iss", $user["user_id"], $hash, date("Y-m-d H:i:s"));
    $stmt->execute();

    // SEND EMAIL - CHANGE TO YOUR OWN!
    $from = "admin <your@email.com>";
    $subject = "Password reset";
    $header = implode("\r\n", [
      "From: $from",
      "MIME-Version: 1.0",
      "Content-type: text/html; charset=utf-8"
    ]);
    $link = "http://localhost/2c-reset.php?i=".$user["user_id"]."&h=".$hash;
    $message = "<a href='$link'>Click here to reset password</a>";
    if (!@mail($user["user_email"], $subject, $message, $header)) {
      $msg = "Failed to send email!";
    }
  }

  // (B5) RESULTS
  if ($msg == "") { $msg = "Email has been sent - Please click on the link in the email to confirm."; }
  echo "<div>$msg</div>";

?>    
</div>
<center><footer class="foot">copy right Kibabii University &copy; 2022</footer></center>
</body>
</html>









