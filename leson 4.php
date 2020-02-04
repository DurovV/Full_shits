<?php
echo '<ol>';
$arr = [1,2,3,[333,44],4];
foreach ($arr as $x){
	echo '<li>';
	if ($x == is_array($x)){
		echo '<ol>';
		foreach($x as $y){
			echo '<li>';
				print($y);
			echo '</li>';
		}
		echo '</ol>';
	}
	else{
		print($x);
	}
	echo '</li>';
}	
echo '</ol>';
?>