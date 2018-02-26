<?php


	$db_host = 'localhost';
	$username = 'root';
	$password = 'rootroot';
	$db_database = 'test';
	
	$dsn='mysql:host='.$dbhost.';dbname='.$dbdatabase.';'
	$dbh=new PDO($dsn,$username,$userpass);
	 
	$stmt=$dbh->query('SELECT id,name FROM user');
	$row=$stmt->fetch();
	print_r($row);



?>