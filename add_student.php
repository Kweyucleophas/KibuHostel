
<!doctype html>
<html lang=en>
<head>
<title>Admin page</title>
<style type="text/css">
  .container {
  position: relative;
  z-index: 1;
  overflow-y: auto;
  height: calc(100vh - {height of the header});
}
</style>
<meta charset=utf-8>
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
            <li><a href="admin-page.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="hosteldetails.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Block</a></span></li>
            <li><a href="Add_room.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Room</a></span></li>
             <li><a href="Add_Item.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Items</a></span></li>
             <li><a href="Add_Student.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>Student</a></span>
             </li>
            <li><a href="edit_record.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Update/Edit</a></span></li>
            <li><a href="indexhostel.php" style="text-decoration: none;"><img src="icon/logout.png" style="width: 30px; height: 30px; margin: 2px"><span>Logout</a></span></li>
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
      <a href="admin_view_users.php" class="btn">Generate Report</a>
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
   
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Register A student</title>
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">User_id:</td>
      <td><input type="text" name="user_id" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fname:</td>
      <td><input type="text" name="fname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Lname:</td>
      <td><input type="text" name="lname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="email" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Admmision:</td>
      <td><input type="text" name="admmision" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Registration_date:</td>
      <td><input type="text" name="registration_date" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">School:</td>
      <td><input type="text" name="school" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Sex:</td>
      <td><input type="text" name="sex" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Course:</td>
      <td><input type="text" name="course" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Phone:</td>
      <td><input type="text" name="phone" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Check_in:</td>
      <td><input type="text" name="check_in" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Save">
      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
  
<!-- End of the members page content. -->
</div>
</div>
</body>
</html>