<?php
    //The header() function sends a raw HTTP header to a client.
    //security funciton. Check the contents of a html file before attempting to execute
	header("Content-Type: image/png");
	readfile("../img/42.png");
?>
