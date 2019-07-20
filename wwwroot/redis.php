<?php

## redis 测试
$redis = new redis();
$redis->connect('dc_redis', '6379') || die("连接失败！");


$redis->set('mystring', 'str__' . __FILE__);



$mystr = $redis->get("mystring");
var_dump($mystr);


?>