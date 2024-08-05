<?php
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
        echo "Inicio de sesión exitoso";
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "No se encontró una cuenta con ese correo electrónico";
}

// Cerrar la conexión
$conn->close();
?>
