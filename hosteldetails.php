<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hostel details</title>
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>

<?php require_once('Connections/dbcon.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_dbcon, $dbcon);
$query_Recordset1 = "SELECT * FROM users";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $dbcon) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
  .form{
  background: whitesmoke;
  align-content: center;
  width: 1000px;
  margin-left: 10px;
  margin-top: 500spx;
   border: 1px solid #ccc;
  }
  content{
     top: 0;
    bottom:0;
    position:fixed;
    overflow-y:scroll;
    overflow-x:hidden;
  }
  .log{
    margin-top: 1px;
    margin-bottom: 0px;
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
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Dashboard</a></span></li>
            <li><a href="Add_block.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Block</a></span></li>
            <li><a href="Add_room.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Room</span></li>
             <li><a href="Add_Item.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Items</a></span></li>
             <li><a href="Add_Student.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>Student</a></span>
             </li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Help</a></span></li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/logout.png" style="width: 30px; height: 30px; margin: 2px"><span>Logout</a></span></li>
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
      <a href="Add_Student.php" class="btn">Add New Hostel</a>
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
       <body>

        </header>
        <div class="content">
        <section style="text-align:center">
   <img src="image.jpeg" width="190px" height="190px" />  
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
       <img src="download (3).jfif" width="190px" height="190px" />
       
<H2 style="text-align:center; text-transform:capitalize; "> HOSTELS DETAILS</H2>
<P>This is a brief information of our hostels; their location within moi university, the total number of students they can accommodate, the accommodation fee for each semester, the officials details of the hostel</P>

  <article>
      <table>
          <tr>
            <th>location</th>
            <th>official</th>
            <th>hostel hotline</th>
            <th>number of rooms</th>
            <th>accommodation fee</th>
            <th>occupants</th>
            </tr>
            <tr class="even">
            <td>gprs=1235,1452</td>
            <td>janitors:marry chebet<br /> &nbsp;&nbsp;&nbsp;&nbsp;mike sonko<br />
              warden: man power</td>
            <td>landline number:0704407117<br />
              mobile number:0704407117<br />
                email address:emailhostel@moi.mu.ac.ke</td>
            <td>total number of rooms:<?php
              $room=900;
        echo $room;
        ?><br />
              vacant rooms:540</td>
            <td>semester one: 3250<br />
              semester two: 2750</td>
            <td>male<br />
              <?php
        $students=$room*2;
                echo "total number of students=". $students;
        ?></td>
                </tr>
                <tr class="even">
            <td>gprs=1235,1452</td>
            <td>janitors:marry chebet<br /> &nbsp;&nbsp;&nbsp;&nbsp;mike sonko<br />
              warden: man power</td>
            <td>landline number:0704407117<br />
              mobile number:0704407117<br />
                email address:emailhostel@moi.mu.ac.ke</td>
            <td>total number of rooms:<?php
              $room=900;
        echo $room;
        ?><br />
              vacant rooms:540</td>
            <td>semester one: 3250<br />
              semester two: 2750</td>
            <td>male<br />
              <?php
        $students=$room*2;
                echo "total number of students=". $students;
        ?></td>
                </tr>
          </table>
            </section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

</div>
</div>
</body>
</html>

</body>
</html>