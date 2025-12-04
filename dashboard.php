<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<lang html>
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Dashboard</title>
</head>
<body>

<nav class="menu">
    <h2>Panel Administrador</h2>
    <a href="productos/listar.php">📦 Productos</a>
    <a href="tipos/listar.php">📂 Tipos de Productos</a>
    <a href="index.php">🚪 Cerrar sesión</a>
</nav>

</body>
</html>
