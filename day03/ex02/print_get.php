<?php
foreach ($_GET as $key => $elem)
{
	//$_GET array of variables passed to the current script via the URL parameters 
	//seperate variables using key value pairs us $key => $elem
	echo "$key: $elem\n";
}
?>
