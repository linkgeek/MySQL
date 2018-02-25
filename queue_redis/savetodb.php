<?php
include '../include/db.php';

$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis_name = 'miaosha';

$db = DB::getIntance();

//死循环
while (1) {
	$user = $redis->lPop($redis_name);
	if (!$user || $user=='nil') {
		sleep(2);
		continue;
	}
	$user_arr = explode('%', $user);
	$insert_data = array(
		'uid' => $user_arr[0],
		'time_stamp' => $user_arr[1]
	);
	$res = $db->insert('redis_queue',$insert_data);
	
	if (!$res) {
		$redis->rPush($redis_name,$user);
	}

	sleep(2);
}

$redis->close();