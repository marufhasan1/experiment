<?php
	$domains = array("google.com", "google.in", "google.co.in", "google.info", "analytics.google.com");

	foreach($domains as $domain){
		preg_match('/(.*?)((?:\.co)?.[a-z]{2,4})$/i', $domain, $matches);
		print_r($matches);
	}
?>