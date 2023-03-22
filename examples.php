<?php require_once('Connections/dbcon.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="hostel.css" type="text/css" />
    <link rel="stylesheet" href="style.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
  form{
  background: whitesmoke;
  align-content: center;
  width: 1000px;
  margin-left: 10px;
  margin-top: 60px;
   border: 1px solid #ccc;
  }
  
  }
    .container .content .cards .card .box{

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
            <li><a href="clearence_page.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Clearence</a></span></li>
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
<button type="submit"><img src="icon/search-512 (1) (1).webp" style="width: 30px; height: 30px;"></button>
    </div>
    <div class="user">
      <a href="Add_Student.php" class="btn">Add New</a>
       <img src="icon/notif.png" style="display: flex; width: 30px; height: 30px;">
      <div class="img-case">
       <img src="icon/icons8-username-50.png">
        <p style="margin-left:45px;0px;"><strong style="margin-top: 100px;">Hello,<br>user<br>
      </div>
    </div>
    </div>
</div>
    <div class="content">
        <div class="">
<div class="">
    <div class="">
      <div id="TabbedPanels1" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Enter Personal Details</li>
          <li class="TabbedPanelsTab" tabindex="0">School  Details</li>
          <li class="TabbedPanelsTab" tabindex="0">Hostell Details</li>
          <li class="TabbedPanelsTab" tabindex="0">tab 4</li>
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <h2 style="text-align:center; text-transform:capitalize; ">students details<br >Enter Your Personal Details as stated</h2>
          <center>
            <form  method="post" name="form1" action="clearance.php">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right">Fname:</td>
                  <td><input type="text" name="Fname" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Lname:</td>
                  <td><input type="text" name="Lname" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Email:</td>
                  <td><input type="text" name="email" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Age:</td>
                  <td><input type="text" name="age" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Year:</td>
                  <td><input type="text" name="year" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Location:</td>
                  <td><input type="text" name="Location" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td style="text-align: center; width: 40px; float: right;"><input class="button_small" type="submit" value="save"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form1">
            </center>
            <p>&nbsp;</p>
          </div>
          <div class="TabbedPanelsContent">
            <h2 style="text-align:center; text-transform:capitalize; ">school details<br >Enter Your School Details as stated</h2>
          <center>
            
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right">Admmision:</td>
                  <td><input type="text" name="admmision" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Year:</td>
                  <td><input type="text" name="year" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Sem:</td>
                  <td><input type="text" name="sem" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Roomno:</td>
                  <td><input type="text" name="roomno" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td style="text-align: center; width: 40px; float: right;"> <input class="button_small" type="submit" value="Save"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form2">
            
            </center>
            <p>&nbsp;</p>
          </div>
          <div class="TabbedPanelsContent">
            <h2 style="text-align:center; text-transform:capitalize; ">hostel details<br >Enter Your Hostel Details as stated</h2>
          <center>
            <form method="post" name="form3" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right">Hostel:</td>
                  <td><input type="text" name="hostel" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Roomno:</td>
                  <td><input type="text" name="roomno" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Upload Your Letter:</td>
                  <td><input type="file" name="Letter" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td style="text-align: center; width: 40px; float: right;"><input class="button_small" type="submit" value="save"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form3">
            </form>
            </center>
            <p>&nbsp;</p>
          </div>
          <div class="TabbedPanelsContent">Content 4</div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
<script type="text/javascript">
function validateForm() {
  var Admmision = document.forms["clearanceForm"]["$Admmision"].value;
  var Hostel = document.forms["clearanceForm"]["hostel"].value;
  var room_no = document.forms["clearanceForm"]["room_no"].value;
  var year = document.forms["clearanceForm"]["year"].value;
  var semester = document.forms["clearanceForm"]["semester"].value;
  var damages = document.forms["clearanceForm"]["damages"].value;

  if (admission_no == "" || hostel_name == "" || room_no == "" || year == "" || semester == "" || damages_letter == "") {
    alert("All fields are required.");
    return false;
  }
}

</script>
</body>
</html>


