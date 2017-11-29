<?php
	$xml = file_get_contents("https://api.namecheap.com/xml.response?ApiUser=mrskuet08&ApiKey=3eafaf89a4e94fb6bd0e061a6523fdd9&UserName=mrskuet08&Command=namecheap.domains.check&ClientIp=118.179.62.246&DomainList=alifenterprise.com");
	$res_obj = simplexml_load_string($xml);
	print_r($res_obj);
?>
