<?php

	$mysql_server = 'localhost';
	$mysql_username = 'root';
	$mysql_password = 'rootroot';
	$mysql_database = 'test';

	$conn = mysql_connect($mysql_server,$mysql_username,$mysql_password) or die("数据库连接失败");
	mysql_select_db($mysql_database,$conn);
	mysql_query("set names 'utf8'");

	$result = mysql_query("SELECT * from message");
	$row = mysql_fetch_row($result);
	$rows = mysql_fetch_array($result);
	print_r($rows);

?>