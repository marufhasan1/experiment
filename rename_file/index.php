<?php
//Student Array
$students = array(
"1"=>"180515",
	"2"=>"180516",
	"3"=>"180517",
	"4"=>"180518",
	"5"=>"180519",
	"6"=>"180520",
	"7"=>"180521",
	"8"=>"180522",
	"9"=>"180523",
	"10"=>"180524",
	"11"=>"180525",
	"12"=>"180526",
	"13"=>"180527",
	"14"=>"180528",
	"15"=>"180529",
	"16"=>"180530",
	"17"=>"180531",
	"18"=>"180532",
	"19"=>"180533",
	"20"=>"180534",
	"21"=>"180535",
	"22"=>"180536",
	"23"=>"180537",
	"24"=>"180538",
	"25"=>"180539",
	"26"=>"180540",
	"27"=>"180541",
	"28"=>"180542",
	"29"=>"180543",
	"30"=>"180544",
	"31"=>"180545",
	"32"=>"180546",
	"33"=>"180547",
	"34"=>"180548",
	"35"=>"180549",
	"36"=>"180550",
	"37"=>"180551",
	"38"=>"180552",
	"39"=>"180553",
	"40"=>"180554",
	"41"=>"180555",
	"42"=>"180556",
	"43"=>"180557",
	"44"=>"180558",
	"45"=>"180559",
	"46"=>"180560",
	"47"=>"180561",
	"48"=>"180562",
	"49"=>"180563",
	"50"=>"180564",
	"51"=>"180565",
	"52"=>"180566",
	"53"=>"180567",
	"54"=>"180568",
	"55"=>"180569",
	"56"=>"180570",
	"57"=>"180571",
	"58"=>"180572",
	"59"=>"180573",
	"60"=>"180574"
);

$files = glob("src/*.*");
//print_r($files);
foreach ($students as $roll => $id) {
//foreach($files as $key => $src){
	//$file_name = pathinfo($src,PATHINFO_BASENAME);
	//$extension = pathinfo($src,PATHINFO_EXTENSION);
	//$filename = str_replace("..",".",$file_name);
	//echo $extension . "<br/>";
	//$name = str_shuffle("Student".rand(10000000,99999999).strtotime("now")).".jpg";
	/*
	if(copy($name, "new/".$name)){
		$file_name = pathinfo($name,PATHINFO_BASENAME);
		$file_name = explode(".", $file_name);
		$roll = $file_name[0];
		echo $roll.",".$des.PHP_EOL;
	}*/
	
	
	//Main
	$src = "src/".$roll.".jpg";
	if(is_file($src)){
		if(copy($src,"des/".$id.".jpg")){
			unlink($src);
			echo $roll."\t".$id."<br/>";
		}		
	}
	//Main
	
	/*
	//Removing dot
	
	$file_name = pathinfo($src,PATHINFO_BASENAME);
	$extension = pathinfo($src,PATHINFO_EXTENSION);
	$filename = str_replace("6B-","",$file_name);
	if(copy($src, "des/".$filename)){
		unlink($src);
		echo "Renamed"."<br>";
	}else{
		echo "Not Working";
	}*/
	
}

