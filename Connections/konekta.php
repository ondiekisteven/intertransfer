<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_konekta = "localhost";
$database_konekta = "intertransfer";
$username_konekta = "root";
$password_konekta = "";
$konekta = mysqli_connect($hostname_konekta, $username_konekta, $password_konekta) or trigger_error(mysql_error(),E_USER_ERROR); 
?>