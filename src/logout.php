<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la sesión completamente, también se debe borrar la cookie de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruye la sesión
session_destroy();

// Redirecciona al usuario a la página de inicio o login
header("Location: login.php");
exit;
?>
