<?php
include("../db.php");
$id = $_GET['id'];

$tipo = $conexion->query("SELECT * FROM tipos WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $conexion->query("UPDATE tipos SET nombre='$nombre' WHERE id=$id");
    header("Location: listar.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
<title>Editar Tipo</title>
</head>
<body>

<h2>Editar Tipo</h2>

<form method="POST">
    <input type="text" name="nombre" value="<?= $tipo['nombre'] ?>" required>
    <button>Actualizar</button>
</form>

</body>
</html>
