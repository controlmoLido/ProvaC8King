<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Login - Part privada - QuantumSoft Technologies</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center">Inici de sessió</h2>
        <form action="login_process.php" method="POST">
          <div class="form-group">
            <label for="username">Usuari</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contrasenya</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Dependències Bootstrap 3 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>