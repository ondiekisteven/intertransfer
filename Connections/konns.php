<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_konns = "localhost";
$database_konns = "transfer";
$username_konns = "root";
$password_konns = "";
$konns = mysql_pconnect($hostname_konns, $username_konns, $password_konns) or trigger_error(mysql_error(),E_USER_ERROR); 
?>