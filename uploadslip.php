<?php
// set the maximum upload size in bytes
$max = 900000008240;
if (isset($_POST['upload'])) {
  // define the path to the upload folder
  $destination = 'C:/xampp/htdocs/code/uploads';
  require_once('Upload.php');
  try {
	$upload = new Ps2_Upload($destination);
	$upload->move();
	$result = $upload->getMessages();
  } catch (Exception $e) {
	echo $e->getMessage();
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="hostel.css" type="text/css" />
<title>Upload Backslip</title>
</head>

<body><aside id="contact">contact</aside>

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
        </section>
        
        <h2 style="text-align:center; text-transform:capitalize; ">students details<br >Upload your backslip </h2>
	
        <section class="login">
<?php
if (isset($result)) {
  echo '<ul>';
  foreach ($result as $message) {
	echo "<li>$message</li>";
  }
  echo '</ul>';
}
?>
<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
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
    <label for="image">Upload image:</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max; ?>">
    <input type="file" name="image" id="image">
  </p>
  <p style="text-align: center; width: 40px; float: right;">
    <input class="button_small" type="submit" name="upload" id="upload" value="Finish">
    <a href="indexhostel.php">log in</a>
  </p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
</body>
</html>