<?php


	$db_host = 'localhost';
	$username = 'root';
	$password = 'rootroot';
	$db_database = 'test';

	$db = new mysqli($db_host,$username,$password,$db_database);
	if(mysqli_connect_error()){
		echo 'could not connect to database';
		exit;
	}

	$result = $db->query("select id,name from message");
	$rows = $result->fetch_row();
	print_r($rows);


?>