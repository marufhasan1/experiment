<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="text" name="name" id="">
			<input type="submit" name="save" value="Submit">
		</form>
	</body>
</html>

<?php 

	if(isset($_POST["save"])){
		print_r($_POST["name"]);
		unset($_POST);
	}
	
?>