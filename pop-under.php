<?php
	echo '<script>';
	echo "		var popup = window.open('http://google.com/', '','width=700,height=480,resizable=no');
				popup.blur();
				window.focus();
		";
	echo '</script>';
	//header("location: http://google.com");
?>