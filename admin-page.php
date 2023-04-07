
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
    top: 4px;
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
            <li><a href="admin-page.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="hosteldetails.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Block</a></span></li>
            <li><a href="Admin_Approval.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Approve</a></span></li>
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
       <section class="login" style="width:auto; top:300px;">
        <?php 
		if (isset($_SESSION['fname'])){?>
        <p style="padding:0px; border:#FFF 4px; margin-left:0"><figure><img width="150px" height="150px" src="carter.JPG" /><span>
        <figcaption> <?php 
		echo "{$_SESSION['fname']}" ?> </p>

<!-- Start of the member's page content. -->
<?php
echo '<h2>Welcome to the Admin Page ';

echo "{$_SESSION['fname']}";
}
echo '</h2>';
?>

	<h2 align="center">You have permission to view, edit and check out users from the system and resources click the link below:</h2>
    <h2 align="center"><a href="balance.php">view total vacant spaces</a></h2>
    <h2 align="center"><a href="admin_view_users.php">view members edit and delete </a></h2>
    
   
<h2 align="center"><a href="pdfhacked/print_pdf.php">view students and print pdf form</a></h2>
    <h2 align="center"><a href="finance.php">view total accommodation fee paid</a></h2>
 <h2 align="center"><a href="Admin_Approval.php">Approve cleared students and print pdf form</a></h2>
    </section></div>
<footer style=" text-align:center;" class="foot">copy right Kibabii University &copy; 2022</footer>
	
<!-- End of the members page content. -->
</div>
</div>
</body>
</html>