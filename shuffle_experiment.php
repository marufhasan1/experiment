<?php
	$str = "Hello";
	$container = array();
	$shuffle = str_shuffle($str);

	while($shuffle != $str){
		$container[] = $shuffle;
		$shuffle = str_shuffle($str);
	}
	print_r($container);
?>
