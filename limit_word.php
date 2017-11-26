<?php
$text = "";

function word_limit($text,$limit){
	$wa = explode(" ",$text);//Word Array
	$la = array(); //Limit word Array
	for($i=0; $i<=$limit; $i++){
		if(isset($wa[$i])){
			$la[]=$wa[$i];
		}
	}
	return implode(" ",$la);
}

echo word_limit($text,10);