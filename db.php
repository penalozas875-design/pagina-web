<?php
$conexion = new mysqli("localhost", "root", "nicolas2003605", "crud_php");
if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

