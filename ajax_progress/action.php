<?php 
	 if(!empty(file_get_contents("http://192.168.0.109/"))){
	 	echo "Action One";
	 };

	 if(!empty(file_get_contents("https://freelanceitlab.com/"))){
	 	echo "Action Two";
	 };
	 echo "Action Three";
?>