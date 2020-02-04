<!DOCTYPE html>
<html>
	<head>
		<title>test</title>
	</head>
	<body>
		<form action="leson 7.php">
		<input type="text" name="name" size="25" maxlength="25" value="">
		<br>
		<input type ="text" name="second neme" size="25" maxlength="20" value="">
		<br>
		<input type="submit" name="enter" value="enter">
		<input type="reset" name="delete" value="delete">
		</form>
	</body>

</html>

<?php
class posList {
	
	public $money;
	public $money2=2;
	public $file;
	
	
	public function files1() {
		echo $this->money2; 
		
	}
	
}
$post=new posList();
echo $post->files1;
var_dump($_GET);


?>