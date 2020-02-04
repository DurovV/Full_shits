<?php
//Задание №1
	$num1=4;
	$num2=5;

	echo $num1 + $num2;
	echo '<br>';	//ТОЧКИ С ЗАПЯТОЙ, ВОВАААААААААААААААААААА
//Задание 2


	$result = explode(" ", "Иванов Иван Иванович");
	$in = substr($result[1], 0,1);
	$res = substr($result[2], -8,1);
	
	echo $result[0].' '.$in.'. '.$res.'. '; 
	echo '<br>';
	
	echo mb_strtoupper('минск');
	echo '<br>';
	echo ucfirst(strtolower('minsk'));
	echo '<br>';
	$app = explode('-','31-12-2030');
	echo $app[2],'-',$app[1],'-',$app[0];
	echo '<br>','<br>';
	
	echo strtoupper('php');
	echo '<br>';
	
	echo strtolower('PHP');
	echo '<br>';
	
	echo lcfirst('London');
	echo '<br>';
	
	echo ucfirst('london');
	echo '<br>';
	
	$str = ucwords('london is the capital of great britain');
	echo $str;
	echo '<br>';
	
	echo ucfirst(strtolower('LONDON'));
	echo '<br>';
	
	echo strlen('html css php')+1;
	echo '<br>';
	
	$password = 'qwertyui';
	echo strlen($password)+1;
	echo '<br>';	
	
	echo substr('html css php', 0, 4),','.substr('html css php', 4, 4),','. substr('html css php', 8, 4);
	echo '<br>';
	
	echo substr('wsdefghjkl',-3,3);
	echo '<br>';
	
	$str = 'https://vk.com/im?peers=c1';
	if (substr($str,0,6) == 'http://')
	{
		print('да');
	}
	else
	{
		print('нет');
	}
	echo '<br>';
	
	$str = 'https://vk.com/im?peers=c1';
	if (substr($str,0,6) == 'http://' or 'https://')
	{
		print('да');
	}
	else
	{
		print('нет');
	}
	echo '<br>';
	
	$str = 'sdfgh.png';
	if (substr($str, -4,4) == '.png'){
		print('да');
	}
	else{
		print('нет');
	}
	echo '<br>';
	
	
	$str = 'sdfgh.jpg';
	if (substr($str, -4,4) == '.jpg' or '.png'){
		print('да');
	}
	else{
		print('нет');
	}
	echo '<br>';
	
	$str = 'sdfghj';
	$len = strlen($str)+1;
	if ($len >= 5){
		print(substr($str,0,5));
	}
	else{
		print(substr($str,0,$len));
	}
	echo '<br>';
	
	echo str_replace('.','-','31.12.2013');
	echo '<br>';
	
	$str = 'ahbdghecagfbavtr';
	$res = str_replace('a','1',$str);
	$res1 = str_replace('b','2',$str);
	$res2 = str_replace('c','3',$str1);
	
	echo $res2;
	echo '<br>';
	
	
	
	
	
?>

