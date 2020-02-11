<?php
echo "Inicio db.php"."<br>";

// Creación de una clase que nos permita conectarnos a la BD
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "rootroot", "musica");
	    return $conexion;
    }
}
echo "finaliza db.php"."<br>";
?>