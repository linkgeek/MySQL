<?php

include '../include/db.php';

$db = DB::getIntance();

$waiting = array('status'=>0);
$lock = array('status'=>2);
$res_lock = $db->update('order_queue',$lock,$waiting,2);
if($res_lock){
	$res = $db->selectAll('order_queue',$lock);
	$success = array('status'=>1,'updated_at'=>date('Y-m-d H:i:s',time()));
	$res_last = $db->update('order_queue',$success,$lock);
	if($res_last){
		echo "success:" . $res_last;
	}else{
		echo "fail:" . $res_last;
	}
}else{
	echo "all finished";
}