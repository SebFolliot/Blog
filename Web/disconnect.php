<?php

// On annule toutes les variables de session
$_SESSION = array();

// Suppression des cookies de session afin de détruire la session

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// On détruit la session
session_destroy();


header('Location: /');