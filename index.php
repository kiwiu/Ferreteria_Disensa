<?php

/*=============================================
Mostrar errores
=============================================*/

ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log",  "/var/www/html/php_error_log");

require_once __DIR__."/controladores/plantilla.controlador.php";
require_once __DIR__."/controladores/usuarios.controlador.php";
require_once __DIR__."/controladores/categorias.controlador.php";
require_once __DIR__."/controladores/productos.controlador.php";
require_once __DIR__."/controladores/clientes.controlador.php";
require_once __DIR__."/controladores/ventas.controlador.php";

require_once __DIR__."/modelos/usuarios.modelo.php";
require_once __DIR__."/modelos/categorias.modelo.php";
require_once __DIR__."/modelos/productos.modelo.php";
require_once __DIR__."/modelos/clientes.modelo.php";
require_once __DIR__."/modelos/ventas.modelo.php";
require_once __DIR__."/extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
