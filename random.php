<?php
for($i=0; $i<=10000; $i++){
	echo strtotime("now").rand(100000,999999)."<br/>";
}