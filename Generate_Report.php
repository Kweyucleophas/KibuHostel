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
       <center><h2>View Students</h2></center>
       <table border="1" align="center">
         <tr>
           <td>No</td>
           <td>fname</td>
           <td>lname</td>
           <td>email</td>
           <td>admmision</td>
           <td>registration_date</td>
           <td>user_level</td>
           <td>school</td>
           <td>haddr</td>
           <td>sex</td>
           <td>course</td>
           <td>phone</td>
           <td>check_in</td>
           <td>matress</td>
           <td>curtain</td>
           <td>keyy</td>
         </tr>
         <?php do { ?>
           <tr>
             <td><a href="studentsregister.php?recordID=<?php echo $row_Recordset1['user_id']; ?>"> <?php echo $row_Recordset1['user_id']; ?>&nbsp; </a></td>
             <td><?php echo $row_Recordset1['fname']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['lname']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['email']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['admmision']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['registration_date']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['user_level']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['school']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['haddr']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['sex']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['course']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['phone']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['check_in']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['matress']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['curtain']; ?>&nbsp; </td>
             <td><?php echo $row_Recordset1['keyy']; ?>&nbsp; </td>
           </tr>
           <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
       </table>
       <br>
       <table border="0">
         <tr>
           <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
               <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a>
               <?php } // Show if not first page ?></td>
           <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
               <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Previous</a>
               <?php } // Show if not first page ?></td>
           <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
               <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a>
               <?php } // Show if not last page ?></td>
           <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
               <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Last</a>
               <?php } // Show if not last page ?></td>
         </tr>
       </table>
Records <?php echo ($startRow_Recordset1 + 1) ?> to <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> of <?php echo $totalRows_Recordset1 ?> </div>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
