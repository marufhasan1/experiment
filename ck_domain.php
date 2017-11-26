<?php
	if ( checkdnsrr('google.com.', 'ANY') ) {
		echo "DNS Record found <hr/>";
		echo checkdnsrr('exaddddmple.com.', 'ANY');
	}
	else {
		echo "NO DNS Record found <hr/>";
		echo checkdnsrr('exaddddmple.com.', 'ANY');
	}


?>

<?php
	$domain = 'example.com';
		if ( gethostbyname($domain) != $domain ) {
		echo "DNS Record found";
	}
	else {
		echo "NO DNS Record found";
	}
?>