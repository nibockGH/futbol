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
        <h2 class="text-2xl font-bold mb-1 text-center">Recuperar contraseña</h2>
        <p class="text-gray-500 text-sm mb-4 text-center">Enviaremos un código de verificación a su mail.</p>
        <form action="recuperarcontraseña.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
        <p class="mt-4 text-center text-gray-600">¿Tienes una cuenta? <a href="login.php" class="text-green-500 hover:underline">Inicia sesión</a></p>

            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Enviar</button>
        </form>
    </div>
</body>
</html>
