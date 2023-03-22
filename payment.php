
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
      
         <center>
         <form style="padding-top: 150px;" action="MpesaTest.php" method="POST">
            <fieldset style="width: 400px; height: 300px; background-color: white;">
               <label style="padding-top: 200px;color:red;">Lipa Online</label>
               <br>
               <input class="input2" type="number" name="amount" placeholder="Enter Amount" style="margin-top: 60px;">
               <br><br>
               <input type="number" type="number" name="telephone_number" placeholder="enter Phone number">
               <br><br>
               <button class="button" style="color: white; background-color: blue;">
               Make Payment Now
               </button>
            </fieldset>
         </form>
      </center>
      </div>
      </div>

     
</div>
</div>
</div>

   <div style="background-color: gold;"><footer style=" text-align:center; margin-top:135px; color:white;" class="foot">copy right Kibabii University &copy; 2022</footer></div>
</body>
</html>