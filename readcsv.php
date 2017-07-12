<?php 
$file = fopen('test.csv','r'); 
while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
	//print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可
	$goods_list[] = $data;
 }
 //echo $goods_list[2][0]." ";//第三行第一列
 $line = count($goods_list,0);//获取总行数
 $list = (count($goods_list,1)-count($goods_list,0))/count($goods_list,0);//获取总列数
 echo $line." ".$list;//输出行数和列数
 fclose($file);
?> 