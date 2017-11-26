<?php

	$js = '[{"icon":"","text":"Home","href":"http://google.com","target":"_blank","title":"Home","children":[{"icon":"","text":"Home1","href":"","target":"_self","title":""}]}]';
	$ar = json_decode($js,true);
	echo "<pre>";
	print_r($ar);
	echo "</pre>";