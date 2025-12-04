<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: ../index.php"); exit; }
include_once("../db.php");

$tipos = $conexion->query("SELECT * FROM tipos");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Tipos de Productos</title>
</head>
<body>

<h2>Tipos de Productos</h2>

<a class="btn" href="crear.php">➕ Crear Tipo</a>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Acciones</th>
</tr>

<?php while($t = $tipos->fetch_assoc()) { ?>
<tr>
    <td><?= $t['id'] ?></td>
    <td><?= $t['nombre'] ?></td>
    <td>
        <a class="editar" href="editar.php?id=<?= $t['id'] ?>">Editar</a>
        <a class="eliminar" href="eliminar.php?id=<?= $t['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
