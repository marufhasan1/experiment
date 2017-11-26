<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript">
		var all=navigator;
		
		console.log(navigator);
		var Browser=all.appCodeName;
		var os=all.oscpu;
		var platform=all.platform;
		document.write(Browser+"<br/>"+os+"<br/>"+platform);
		
	</script>
</head>
<body>
	<p style="color: red">
	<?php
	$system_info=$_SERVER['HTTP_USER_AGENT'];
	$content= ' Maruf hasan is trying to access to your application system information is : '.$system_info;
		echo $system_info;
	?>								
	</p>
	<?php echo strlen($content)?>
</body>
</html>