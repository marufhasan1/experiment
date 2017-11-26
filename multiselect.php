<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<select name="selectbox[]" id="" multiple>
			<option value="val1">Val1</option>
			<option value="val2">Val2</option>
			<option value="val3">Val3</option>
			<option value="val4">Val4</option>
		</select>
		<input type="submit" value="Submit" name="submit"/>
	</form>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		print_r($_POST['selectbox']);
	}
?>