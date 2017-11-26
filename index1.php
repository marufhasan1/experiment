
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery-3.1.0.min.js"></script>
</head>
	<body>
		<?php echo"Index page"?>
	</body>
	<script>
	$(document).ready(function(){
		$(window).unload(function(){
		    $.ajax({
				url:"action.php",
			});
		});


	});
	</script>
</html>
