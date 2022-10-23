<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10502622','sql10502622','9VqxnY3xIP',$pdo_options);
			return self::$conexion;
		}		
	} 
?>