<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conekted = "localhost";
$database_conekted = "transfer";
$username_conekted = "root";
$password_conekted = "";
$conekted = mysqli_connect($hostname_conekted, $username_conekted, $password_conekted) or trigger_error(mysql_error(),E_USER_ERROR); 
?>