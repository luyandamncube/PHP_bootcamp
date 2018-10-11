<?php
	class Tyrion extends Lannister{
		public function sleepWith($class){

			if ($class instanceof Sansa)
				print("Let's do this.".PHP_EOL);
			else
				print("Not even if I'm drunk !".PHP_EOL);
		}
	}
?>
