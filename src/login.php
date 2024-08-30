<?php
// Datos de conexión a la base de datos
$servername = "127.0.0.1";
$username = "pma";
$password = "";
$dbname = "user_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$error = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    body {
            background-color: #989da6; /* color zinc-300 de Tailwind */
        }
</style>
</head>

<body class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h2>
        <form action="loginn.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Iniciar sesión</button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-600">¿Olvidaste tu contraseña? <a href="recuperarcontraseña.php" class="text-green-500 hover:underline">Recuperar contraseña</a></p>
        <p class="mt-4 text-center text-gray-600">¿No tienes una cuenta? <a href="register.php" class="text-green-500 hover:underline">Regístrate aquí</a></p>
    </div>
</body>
</html>
