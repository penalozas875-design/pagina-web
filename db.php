<?php
$conexion = new mysqli("localhost", "root", "NuevaContraseñaSegura123!", "crud_php");
if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

