<?php

	class Jaime extends Lannister{
		public function sleepWith($class){
			if ($class instanceof Tyrion)
				print("Not even if I'm drunk !". PHP_EOL);
			else if ($class instanceof Sansa)
				print("Let's do this.".PHP_EOL);
			else
				print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);

		}
	}
?>
