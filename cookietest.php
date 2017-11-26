<?php 
	$cookie_name='user';
	$cookie_value="Maruf";
	setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Cookie</title>
</head>
	<body>
	<?php
		echo $_COOKIE['user'];
	?>	
	</body>
</html>
