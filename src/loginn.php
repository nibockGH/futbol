<?php
session_start();
require '../vendor/autoload.php';

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$error = "";

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buscar el usuario en la base de datos
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Obtener el hash de la contraseña almacenada
        $row = $result->fetch_assoc();
        $hash = $row['password'];
        
        // Verificar la contraseña
        if (password_verify($password, $hash)) {
            // Redirigir al usuario a la página principal o a donde quieras
            header("Location: buscar_rival.php");
            exit();
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "No se encontró una cuenta con ese correo electrónico";
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h2>
        
        <!-- Mostrar mensaje de error si existe -->
        <?php if (!empty($error)): ?>
            <p class="mb-4 text-red-500"><?php echo $error; ?></p>
        <?php endif; ?>

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
        <p class="mt-4 text-center text-gray-600">¿No tienes una cuenta? <a href="register.php" class="text-green-500 hover:underline">Regístrate aquí</a></p>
    </div>
</body>
</html>
