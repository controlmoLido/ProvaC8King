<?php

$usuaris_valids = [
    "admin" => "1234",
    "root" => "abcd",
    "boss" => "ThisIsMyPass?"
];


$login = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Comprovació de credencials simulades
if (isset($usuaris_valids[$login]) && $usuaris_valids[$login] === $password) {
    session_start();
    $_SESSION['usuari'] = $login;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<p style='color:red; text-align:center;'>Usuari o contrasenya incorrectes.</p>";
    echo "<p style='text-align:center;'><a href='login.php'>Tornar</a></p>";
}
?>
