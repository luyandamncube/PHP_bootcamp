<?php
/*
	ABSTRACT
	A class and its attributes/methods can be defined as abstract
	all methods marked abstract in the parent's class declaration must be defined by the child
	additionally, these methods must be define with the same viisbility (priaet, protected, public)
 */
	abstract class House{
		public function introduce(){
			print('House '.$this->getHouseName()
			.' of '.$this->getHouseSeat()
			.' : "'. $this->getHouseMotto())
			.'"'.PHP_EOL;	
		}
		abstract function getHouseName();
		abstract function getHouseMotto();
		abstract function getHouseSeat();
	}
?>
