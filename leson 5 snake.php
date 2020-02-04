<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include 'WarDumper.php';
class snake{
		
	public $inn='-----------------';

	public function snk(){
		$s=$this->inn;
		$arr=str_split($s);
		//$arr[0] = '>';
		foreach ($arr as $key=>$x){
			$arr[$key] = '*';
			$key++;
			$arr[$key] = '>';
			 
			echo implode($arr). '<br>';
		}
	}
}
$nuw= new snake();
$nuw->snk();
	
?>
</body>
</html>
