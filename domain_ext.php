<?php
	
	function domain_ext($domain){
		preg_match('/(.*?)((?:\.co)?.[a-z]{2,4})$/i', $domain, $matches);
		return ($matches);
	}
	
	$res = domain_ext("eee.google.com");
	print_r($res);
?>