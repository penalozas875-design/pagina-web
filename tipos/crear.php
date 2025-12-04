<?php
use"../db.php";

if ($_POST) {
    $nombre = $_POST['nombre'];
    $conexion->query("INSERT INTO tipos (nombre) VALUES ('$nombre')");
    header("Location: listar.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
<title>Crear Tipo</title>
</head>
<body>

<h2>Crear Tipo</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre del tipo" required>
    <button>Guardar</button>
</form>

</body>
</html>

