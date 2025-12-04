<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>

    <?php
    if ($_POST) {
        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        if ($user == "admin" && $pass == "12345") {
            $_SESSION['admin'] = true;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<p class='error'>Usuario o contraseña incorrectos</p>";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button>Entrar</button>
    </form>
</div>

</body>
</html>
