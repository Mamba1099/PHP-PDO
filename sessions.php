<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params(); // Change $param to $params
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP session Demo</title>
</head>

<body>
    <h1>PHP session Demo</h1>

    <p>Current Session ID: <?php session_id(); ?></p>
</body>