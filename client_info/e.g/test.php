<?php 
	require('user_info.php');
	$c_info = new Users_info;
	//echo $ttt->c_ip();
	// echo $ttt->c_OS();
	// echo $ttt->c_Browser();
	//echo $c_info->c_Device();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<input type="text" name="" id="" value="<?php echo $c_info->c_Device(); ?>" />
	<input type="text" name="" id="" value="<?php echo $c_info->c_Browser(); ?>" />
	<input type="text" name="" id="" value="<?php echo $c_info->c_OS(); ?>" />
	<input type="text" name="" id="" value="<?php echo $c_info->c_ip(); ?>" />
</body>
</html>