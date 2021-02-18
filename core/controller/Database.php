<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bb942bb8b9a7f4";$this->pass="61c97d10";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_d890a7d490a76d2";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="bb942bb8b9a7f4";$this->pass="61c97d10";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_d890a7d490a76d2";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
