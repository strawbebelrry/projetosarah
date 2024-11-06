<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./dono/cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>
  
<div class="login-box">
  <h1>Login do Usuário</h1>
  <?php
    include './php/config.php';

    if (isset($_POST['submit'])){
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $sql = "SELECT * FROM usuario WHERE email='$email'";

      $result = $conn->query($sql);

    }
  ?>
  <form method="POST" action="login.php">
    <div class="user-box">
      <input type="email" name="email" required>
      <label>Insira seu email:</label>
    </div>
    <div class="user-box">
      <input type="password" name="senha" required>
      <label>Senha:</label>
    </div>
             
    <button type="submit" name="submit" class="btn btn-outline-dark">
      Pronto
    </button>
  </form>
</div>

</body>
</html>
