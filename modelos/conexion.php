<?php

class Conexion {
    static public function conectar() {
        try {
            $link = new PDO("mysql:host=34.45.227.76;dbname=pos",
                            "root",
                            "1234",
                            array(PDO::ATTR_TIMEOUT => 10)); // 10 segundos de timeout
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
