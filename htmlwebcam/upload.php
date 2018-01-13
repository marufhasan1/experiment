<?php
$img = $_POST['image'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
//saving
$fileName = 'upload/'.rand(10000,99999).'.png';
file_put_contents($fileName, $fileData);