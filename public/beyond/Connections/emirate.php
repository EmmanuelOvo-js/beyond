<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_emirate = "localhost";
$database_emirate = "buygrowe_property";
$username_emirate = "buygrowe_data";
$password_emirate = "display:none;@123";
$emirate = mysql_pconnect($hostname_emirate, $username_emirate, $password_emirate) or trigger_error(mysql_error(),E_USER_ERROR); 
?>