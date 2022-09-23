<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_DairyFarm = "localhost";
$database_DairyFarm = "dfsms";
$username_DairyFarm = "root";
$password_DairyFarm = "123";
$DairyFarm = mysql_pconnect($hostname_DairyFarm, $username_DairyFarm, $password_DairyFarm) or trigger_error(mysql_error(),E_USER_ERROR); 
?>