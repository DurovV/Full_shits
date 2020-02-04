<?php

class Cat{

public $legs = 4;
public $cute = 10;
public $heat = 1;
public $steps = 0;
public $speat = 3;

public function run(){
	echo $this->speat+1;
	echo '<br>';
}
public function rann(){
	if ($this->steps==0){
		print ($this->steps+2);
	}
	else{
		echo $this->steps+1;
	}
	echo '<br>';
}
public function stop(){
	if ($this->speat>0){
		echo '<ol>';
		echo '1. '.$this->speat;
		while($this->speat>0){
			echo '<li>';
				echo $this->speat = $this->speat-1;
			echo '</li>';
		}
		echo '</ol>';
	}
	else{
		echo 'speat=0'.'<br>';
	}
}
public function  
}

 $cat = new Cat();
  $cat->run();
  $cat->rann();
  $cat->stop();

?>