<?php
session_start();
if (!isset($_SESSION['usuari'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Tauler de control</title>
</head>
<body>
  <h1>Benvingut, <?php echo htmlspecialchars($_SESSION['usuari']); ?>!</h1>
  <p>Aquest és el dashboard de l'empresa. En construcció!</p>
  <h4>Projecte 2027-2030</h4>
  <p><a href="logout.php">Tancar sessió</a></p>
</body>
</html>
