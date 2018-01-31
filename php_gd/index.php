<?php

ini_set('memory_limit', '-1');
/*
function compressImage($source_url, $destination_url, $quality) {
    $info = getimagesize($source_url);

    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);

    //save file
    imagejpeg($image, $destination_url, $quality);

    //return destination file
    return $destination_url;
}*/

// Set the content type header - in this case image/jpeg
//header('Content-Type: image/jpeg');

// Output the image
//imagejpeg($im,"image.jpg",100);

// Free up memory
//imagedestroy($im);
function opt_img($source_url, $destination_url,$target_kb) {
    $info = getimagesize($source_url);

    //Getting The Quality Start here
	$kb = filesize($source_url)/1024; //Getting Kilo byte of Images
	$kb = round($kb); 
	//echo "KB ".$kb;
	$quality = 80;
	if($kb>200){
		$quality = (($target_kb*100)/$kb); //Getting The Quality Percentage
		$quality = round($quality);
	}
	//echo "Quality ". $quality;
    //Getting The Quality End here

    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/jpg') $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
    //elseif ($info['mime'] == 'image/x-ms-bmp') $image = imagecreatefromwbmp($source_url); //PHP 7 Required

    //save file
    if(imagejpeg($image, $destination_url, $quality)){
    	return true;
    }
    return false;
}

	echo opt_img("des_image/img1.jpg", "des_image/img1.jpg",200);

	// $target_kb = 200;
    // $info = getimagesize("src_image/img2.jpeg");

 //    $kb = filesize("src_image/img3.bmp")/1024; //Getting Kilo byte of Images
 //    $kb = round($kb);   
 //    $quality = (($target_kb*100)/$kb); //Getting The Quality Percentage

 //    print_r($kb);echo PHP_EOL;
     //print_r($info);
   
?>
