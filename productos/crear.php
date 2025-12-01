<?php
include("../db.php");

if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];

    $conexion->query("INSERT INTO productos (nombre, precio, id_tipo)
                      VALUES ('$nombre', '$precio', '$tipo')");

    header("Location: listar.php");
}
$tipos = $conexion->query("SELECT * FROM tipos");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
<title>Crear Producto</title>
</head>
<body>

<h2>Crear Producto</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>

    <select name="tipo">
        <?php while($t = $tipos->fetch_assoc()) { ?>
            <option value="<?=$t['id']?>"><?=$t['nombre']?></option>
        <?php } ?>
    </select>

    <button>Guardar</button>
</form>

</body>
</html>
