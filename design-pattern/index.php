<?php 

class database {

	private $db; // $hostname, $username, $password, $dbname;
	private static $instance = null;
	
	private function __construct($emit) {
		$this->db['hostname'] 	= $emit['hostname'];
		$this->db['username'] 	= $emit['username'];
		$this->db['password'] 	= $emit['password'];
		$this->db['dbname'] 	= $emit['dbname'];

		// return $this->db;
	}

	public static function connection($emit) {
		if(self::$instance == null) {
			self::$instance = new database($emit);
		}	
		
		return self::$instance;
	}




	private function __clone() {}

	private function __wakeup() {}

}






$data = array(
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'database'
);

$db1 = database::connection($data);
echo "<pre>";
var_dump($db1);
echo "</pre>";

echo "<pre>";
$db2 = database::connection($data);
var_dump($db2);
echo "</pre>";

echo "<pre>";
$db3 = database::connection($data);
var_dump($db3);
echo "</pre>";

echo "<pre>";
$db4 = database::connection($data);
var_dump($db4);
echo "</pre>";

echo "<pre>";
$db5 = database::connection($data);
var_dump($db5);
echo "</pre>";

var_dump(new database()); // error

?>