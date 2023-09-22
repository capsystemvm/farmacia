<?php
$conn = new mysqli("localhost", "id21289706_root", "Capsysten123_", "id21289706_bd_farmacia");

if ($conn->connect_error) {
    die('Error de conexión'.$conn->connect_error);
    # code...
}
?>