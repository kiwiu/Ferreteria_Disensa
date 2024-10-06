<?php

class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:unix_socket=/cloudsql/ricardo-435821:us-central1:root;dbname=pos",
                        "root",
                        "1234");

        $link->exec("set names utf8");

        return $link;
    }
}

