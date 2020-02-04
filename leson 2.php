<?php

$y=0;
$arr = range(1,100);
foreach ($arr as $x){
	$y=$y+$x;
}
echo $y.'<br>';

echo array_sum(range(1,100)).'<br>';


$arr = ['a', 'b', 'c', 'd', 'e'];
print_r (array_map('strtoupper',$arr));
echo '<br>';
//1
$arr= range(0,50);
echo count($arr).'<br>';
//3
echo in_array(3,$arr).'<br>';
//4
$arr=[1, 2, 3, 4, 5];
echo array_sum($arr).'<br>';
//5
echo array_product($arr).'<br>';
//6
$sum=array_sum($arr);
$count = count($arr);
echo $sum/$count.'<br>';
//7



?>