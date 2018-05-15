<?php

$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis_name = 'miaosha';
//$redis->flushAll();die;

/*$uid = $_GET['id'];
if(empty($uid)){
	echo "参数不合法";exit;
}
*/

//模拟用户抢购
for($i=0; $i < 100; $i++){
	$uid = rand(1000,9999);

	$num = 10; //库存
	if($redis->get('goods_num') < $num){
		echo $uid.'用户-秒杀成功'."<br/>";
		$redis->rPush($redis_name,$uid.'%'.microtime());
		$redis->incr('goods_num');
		//echo $redis->get('goods_num');
	}else{
		echo '抱歉，秒杀已结束!'."<br/>";
	}
}


