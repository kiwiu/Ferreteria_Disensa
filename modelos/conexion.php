<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=34.45.227.76;dbname=pos",
			            "root",
			            "1234");

		$link->exec("set names utf8");

		return $link;

	}

}