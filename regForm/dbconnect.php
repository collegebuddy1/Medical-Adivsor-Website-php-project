<?php
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
		die("unable to connect");
	else
		echo 'connected';

	$sel=mysql_select_db("medical",$conn);
	if(!$sel)
		die("unable to connect");
	else
		echo 'connected';
?>