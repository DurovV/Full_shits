<?php
$arr = [
		11,
		22,
		  [
			224,
				[
					11,
					4
				]
		],
		5656
		];
 
function recursive($arr, $continion = True){
	
	foreach ($arr as $items){
		print_r($items);
		if (is_array($items)){
			print_r($items);
			recursive($items);
		}
		else{
			recursive($items);
		}
	}
}

recursive($arr);

?>