#!/usr/bin/php
<?php
	include './class/dice.class.php';
	include './class/ship.class.php';
	$dice = new Dice();

	echo "Dice result: ".$dice->rolldice();
?>
