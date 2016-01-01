<?php 
//change the values with your own hosting setting
 $mysql_host = "suyashgargcom.fatcowmysql.com";
 $mysql_database = "wcd_rating";
 $mysql_user = "suyash";
 $mysql_password = "Password@1993";

 $db = mysql_connect($mysql_host,$mysql_user,$mysql_password);
 mysql_connect($mysql_host,$mysql_user,$mysql_password);
 mysql_select_db($mysql_database);
?>