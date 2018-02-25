<?php

include '../include/db.php';

if(!empty($_GET['mobile'])){
	$order_id = rand(10000,99999);
	$insert_data = [
		'order_id' => $order_id,
		'mobile' => $_GET['mobile'],
		'created_at' => date('Y-m-d H:i:s',time()),
		'status' => 0,
	];

	$db = DB::getIntance();
	$res = $db->insert('order_queue',$insert_data);
	if($res){
		echo $insert_data['order_id'].'保存成功';
	}else{
		echo $insert_data['order_id'].'保存失败';
	}
}