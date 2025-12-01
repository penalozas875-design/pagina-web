<?php
include("../db.php");
$id = $_GET['id'];

$producto = $conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();
$tipos = $conexion->query("SELECT * FROM tipos");

if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];

    $conexion->query("UPDATE productos SET nombre='$nombre', precio='$precio',
                      id_tipo='$tipo' WHERE id=$id");

    header("Location: listar.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
<title>Editar Producto</title>
</head>
<body>

<h2>Editar Producto</h2>

<form method="POST">
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required>
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required>

    <select name="tipo">
        <?php while($t = $tipos->fetch_assoc()) { ?>
            <option value="<?=$t['id']?>" <?=($t['id']==$producto['id_tipo'])?"selected":""?>>
                <?=$t['nombre']?>
            </option>
        <?php } ?>
    </select>

    <button>Actualizar</button>
</form>

</body>
</html>
