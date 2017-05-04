<?php
class Database{
	public static function Conexion(){
	    try {
	      $pdo =new PDO('mysql:host=localhost;dbname=prueba;charset=utf8','root','');
	      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	      return $pdo;
	    }
	    catch (Exception $e) {
	      die($e->getMessage());
	    }
	}
}

