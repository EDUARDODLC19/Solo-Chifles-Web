<?php
session_start();

// Simulación de credenciales
$usuarios_validos = [
    "admin@solochifles.com" => "12345"
];

$usuario = $_POST['username'] ?? '';
$contrasena = $_POST['password'] ?? '';

// Validación
if (isset($usuarios_validos[$usuario]) && $usuarios_validos[$usuario] === $contrasena) {
    $_SESSION['usuario'] = $usuario;
    header("Location: Administrador\index.php");
    exit();
} else {
    echo "<script>
        alert('Credenciales incorrectas. Intenta nuevamente.');
        window.location.href = 'login.php';
    </script>";
    exit();
}
?>