<?php 
	$mysql_hostname = "localhost" ; 
	$mysql_user		= "root";
	$mysql_password = "";
	$mysql_database = "vt_ornegi" ; 
	
	$db = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Bi�iler yanl�� gitti");

	mysql_select_db($mysql_database,$db) or die ("database de bi�iler yanl�� gitti");
	
	
?>