<?php
$config = require 'config.php';

$conexión = new mysqli(
    $config["host"],
    $config["user"],
    $config["pass"],
    $config["db"]
);

if ($conexión->connect_error) {
    die("Error de conexión: " . $conexión->connect_error);
}
