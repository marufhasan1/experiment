<?php
	$d = new DateTime();
	$d->modify("+1year");
	//echo $d->format("Y-m-d");
	echo date('Y')."-01-01";
?>