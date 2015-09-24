<?php 
set_time_limit(0);
//设置php.ini中output_buffering=0
ob_end_flush();//关闭缓存

$i = 0;
while($i < 10) {
	flush();
	sleep(1);
	echo "data chunk $i\r\n";
    $i++;
}