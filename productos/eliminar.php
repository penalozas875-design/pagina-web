<?php
include_once("../db.php");
$id = $_GET['id'];
$conexion->query("DELETE FROM productos WHERE id=$id");
header("Location: listar.php");
?>
