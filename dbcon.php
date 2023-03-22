<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbcon = "localhost";
$database_dbcon = "students";
$username_dbcon = "root";
$password_dbcon = "";
$dbcon = new mysqli($hostname_dbcon, $username_dbcon, $password_dbcon, $database_dbcon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>