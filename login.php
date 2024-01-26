<?php
// Inicia la sesión
session_start();

// Verifica si el usuario y la contraseña se han enviado desde el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí debes realizar la verificación de la base de datos o cualquier otro método de autenticación
    // Por razones de seguridad, debes usar consultas preparadas u otros métodos seguros para evitar la inyección de SQL

    // Ejemplo de autenticación básica (NO seguro, solo para demostración)
    if ($username === 'usuario' && $password === 'contraseña') {
        // Inicia la sesión y redirige al usuario a la página de inicio después del inicio de sesión exitoso
        $_SESSION['username'] = $username;
        header("location: home.php");
    } else {
        // Si el nombre de usuario o la contraseña son incorrectos, muestra un mensaje de error
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}
?>
