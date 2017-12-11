<?php
$files = glob("2017/*.*");
//print_r($files);
foreach ($files as $key => $name) {
	//echo $name . "<br/>";
	$des = str_shuffle("Student".rand(10000000,99999999).strtotime("now")).".jpg";
	if(copy($name, "new/".$des)){
		$file_name = pathinfo($name,PATHINFO_BASENAME);
		$file_name = explode(".", $file_name);
		$roll = $file_name[0];
		echo $roll.",".$des.PHP_EOL;
	};
}