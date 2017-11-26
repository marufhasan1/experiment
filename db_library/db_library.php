<?php
/*
	* This is a basic database library, created for the developer
	  who want to develope by using prodecural php.
	
	* Its Fully Free and user friendly

Developed by: Maruf hasan
email: emarufhasan@gmail.com
fb: facebook.com/emarufhasan
	
*/

//Use this "db_add()" function to add data into database
/* Description
	db_add(connection string,table_name string type, data array)
*/
function db_add($con,$table,$data){
	$fild_value = array();
	foreach ($data as $field => $value) {
		$fild_value[] = "`".$field."` = '".$value."'";
	}
	$data_string = implode(",", $fild_value);

	$sql = "INSERT INTO `$table` SET ".$data_string;
	
	$query = mysqli_query($con,$sql);
	if($query){
		return true;
	}else{
		return mysqli_error($con);
	}
}


//Use this "db_add()" function to read data from database
/* Description
	db_read(connection string,table_name string type, where array)
*/
function db_read($con,$table,$where = 1){

	if(is_array($where)){
		$fild_value = array();
		foreach ($where as $field => $value) {
			$fild_value[] = "`".$field."` = '".$value."'";
		}
		$where_string = implode(" and ", $fild_value);
	}else{
		$where_string = $where;
	}


	$sql = "SELECT * FROM `$table` WHERE ".$where_string;
	
	$query = mysqli_query($con,$sql);
	if($query){
		$datas = array();
		while($data = mysqli_fetch_assoc($query)){
			$datas[] = (object)$data;
		}
		return $datas;
	}else{
		return mysqli_error($con);
	}
	return $sql;
}