
<!doctype html>
<html lang=en>
<head>
<title>Search page</title>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta charset=utf-8>
 <link rel="stylesheet" href="style.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
h3.red { color:red; font-size:105%; font-weight:bold; text-align:center;}
form{
    margin-left: 200px;
    margin-top: 30px;
}
input{
    margin: 3px;
}
</style>
</head>
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
	<header id="head">
    	</header>
        <div class="content">
        <section style="text-align:center">
         <img src="image.jpeg" width="190px" height="190px" />  
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
       <img src="download (3).jfif" width="190px" height="190px" />
        </section>
<!-- Start of search page content. -->
<h2><center>Search for a Record</center>  <a class="button_small" href="admin-page.php" style="height: 40px; color:#FFF; float:right;">Exit</a></h2>
<h3 class="red" style="margin-top: 0;">Both are required items</h3>
  <section class="login">
<form action="view_found_record.php" method="post">
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
	<p><label class="label" for="admmision">Admision:</label><input id="admmision" type="text" name="admmision" size="30" maxlength="30" value="<?php if (isset($_POST['admmision'])) echo $_POST['admmision']; ?>"></p>
	<p><label class="label" for="lname">Last Name:</label><input id="lname" type="text" name="lname" size="30" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
	<p style="text-align: center; width: 40px; float: right;"><input class="button_small" id="submit" type="submit" name="submit" value="Search"></p></fieldset>
</form>
<h2> <a class="button_small" style="float:right; height:20px; color:#FFF;" href="admin_view_users.php"> to view members</a> </h2></section></div>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
</div>
</div>
<!-- End of the search page content. -->

	
</body>
</html>