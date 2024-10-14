<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Cadastro</title>
</head>
<body>
  
<div class="login-box">
  <h1>Cadastro do Usuário</h1>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Insira seu email:</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Crie uma Senha:</label>
    </div>

    <div class="mb-3">
                        <label for="date" class="user-box">Data de nascimento: </label>
                        <input type="date" class="user-box" id="date" name="date" required><br>
                    </div>

                    <div class="mb-3">
                        <label for="vacina">Já atingiu a maioridade?</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Sim
                                </label>
                                </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Não
                            </label>
                            </div>

                            </div>
                    
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Pronto
    </a>
  </form>
</div>

</body>
</html>
