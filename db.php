<?php
$conexion = new mysqli("localhost", "root", "12345", "crud_php");
if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

