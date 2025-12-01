<?php
include("../db.php");
$id = $_GET['id'];

$conexion->query("DELETE FROM tipos WHERE id = $id");

header("Location: listar.php");
?>
