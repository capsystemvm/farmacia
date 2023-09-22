<?php 
$contrasena="Capsysten123_";
$usuario="id21289706_root";
$nombre_bd="id21289706_bd_farmacia";
try{
    $bd= new PDO (
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
} catch (Exception $e){
    echo "Problema con la conexion: ".$e->getMessage();
}
?>