<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_medi = "localhost";
$database_medi = "appointments";
$username_medi = "root";
$password_medi = "";
$medi = mysql_pconnect($hostname_medi, $username_medi, $password_medi) or trigger_error(mysql_error(),E_USER_ERROR); 
?>