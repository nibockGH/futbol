<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Rival</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Buscar Rival</h2>
        <form action="buscar_rival_action.php" method="POST">
            <!-- Aquí puedes agregar campos de búsqueda o filtros según sea necesario -->
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Buscar Rival</button>
        </form>
    </div>
</body>
</html>
