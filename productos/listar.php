<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: ../index.php"); exit; }
include_once("../db.php");
$datos = $conexion->query("SELECT p.id, p.nombre, p.precio, t.nombre AS tipo
 FROM productos p LEFT JOIN tipos t ON p.id_tipo=t.id");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Productos</title>
</head>
<body>
<h2>Productos</h2>

<a class="btn" href="crear.php">➕ Agregar Producto</a>

<table>
<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Tipo</th><th>Acciones</th></tr>

<?php while($fila = $datos->fetch_assoc()) { ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td>$<?= $fila['precio'] ?></td>
    <td><?= $fila['tipo'] ?></td>
    <td>
        <a class="editar" href="editar.php?id=<?=$fila['id']?>">Editar</a>
        <a class="eliminar" href="eliminar.php?id=<?=$fila['id']?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
