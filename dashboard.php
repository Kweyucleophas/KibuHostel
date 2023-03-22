
<!DOCTYPE html>
<html>
<head>

    </style>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	.container{
	 background-image: url(image.jpeg);
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
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
        		 <li><a href="dashboard.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="Student_Clearance.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Clearence</a></span></li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Status</a></span></li>
             <li><a href="payment.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Payments</a></span></li>
             <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>ConductUs</a></span>
             </li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Help</a></span></li>
        	</ul>
        </div>
<div class="container">
	<div class="header">
		<div class="nav">
		<div class="search">
<input type="text" placehold="search">
<button type="submit"> <img src="icon/search-512 (1) (1).webp" style="width: 30px; height: 30px;"></button>
		</div>
		<div class="user">
			<a href="logout.php"><span style="color: blue;">Logout</a></span>
			 <img src="icon/notif.png" style="display: flex; width: 30px; height: 30px;">
			<div class="img-case">
				<img src="icon/icons8-username-50.png">
				<p style="margin-left:45px;0px;"><strong style="margin-top: 100px;">Hello,<br></strong>
			</div>
		</div>
		</div>
	</div>
	 <div class="content">
        <div class="">
<div class="">
    <div class="">
    	   <div class="content">
      
        <?php 
		if (isset($_SESSION['fname'])){?>
        <p style="padding:0px; border:#FFF 4px; margin-left:0"><figure><img width="150px" height="150px" src="carter.JPG" /><span>
        <figcaption> <?php 
		echo "{$_SESSION['fname']}" ?> </p></figcaption>
        <section class="login">
        
        <?php
			echo '<h2 style="text-align:center; text-transform:capitalize; ">Welcome to the Members\' Page ';
			
			echo "{$_SESSION['fname']}";
		}
			echo ' <br> </h2>';
			?>

					
				
                <section style="
position:absolute;
	margin-right:2;
	border: #FFF double 3px;
	top: 200px;
	opacity:1;
	left: 750px;
	height: auto;
	width: 200px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;"><h2 h2 style="text-align:center; text-transform:capitalize; "></h2>
    <P> </P><a class="button_small" href="queries/post.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;"></a><a class="button_small" href="logout.php" style="height: 25px; text-decoration:none; text-transform:none; :#FFF;"></a></section>


		
        
        

</section></div>

    	<h1></h1>
</div>
</div>
</div>
<center><h1 style="margin-top:150px; font-weight: 20px;">WELCOME TO KIBABII HOSTELS</h1><br><p style="color: gold; margin: 10px;">Follow Us on:</p> <img src="icon/facbk.png" style="width: 20px; height: 20px; margin: 7px;">
	 <img src="icon/imm.png" style="width: 20px; height: 20px; margin: 7px;">
	<img src="icon/myimg.png" style="width: 20px; height: 20px; margin: 7px;"></center>
	<div style="background-color: gold;"><footer style=" text-align:center; margin-top:250px; color:white;" class="foot">copy right Kibabii University &copy; 2022</footer></div>
</body>
</html>