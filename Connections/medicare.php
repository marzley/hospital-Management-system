<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_medicare = "localhost";
$database_medicare = "appointments";
$username_medicare = "root";
$password_medicare = "";
$medicare = mysql_pconnect($hostname_medicare, $username_medicare, $password_medicare) or trigger_error(mysql_error(),E_USER_ERROR); 
?>