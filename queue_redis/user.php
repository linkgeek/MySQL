<?php

$redis = new Redis();
$redis->connect('127.0.0.1',6379);

$redis_name = 'miaosha';

for ($i=0; $i < 100; $i++) { 
	$uid = rand(10000,99999);

	$num = 10;
	if($redis->lLen($redis_name) < 10){
		$redis->rPush($redis_name,$uid.'%'.microtime());
		echo $uid.'秒杀成功';
	}else{
		echo '秒杀已结束';
	}
}
$redis->close();