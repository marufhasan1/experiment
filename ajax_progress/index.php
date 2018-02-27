<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery-3.3.1.min.js"></script>
</head>
	<body>
		<progress id="progress" value="0"></progress>
		<button id="button">Start uploading</button>
		<span id="display"></span>
	</body>
	<script>
	$(document).ready(function(){
		$.ajax({
			url: 'action.php',
			type: 'POST',
			//data: {param1: 'value1'},
		})
		.done(function(response) {
			console.log(response);
		});
		
	});
	</script>
</html>