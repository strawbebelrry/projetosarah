<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="animais.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Formulário em PHP</title>
</head>
<body>
  
<div class="login-box">
  <h1>Cadastro do Pet</h1>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Nome:</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Raça:</label>
    </div>

    <div class="mb-3">
                        <label for="date" class="user-box">Data de nascimento: </label>
                        <input type="date" class="user-box" id="date" name="date" required><br>
                    </div>

                    <div class="mb-3">
                        <label for="vacina">É vacinado?</label><br>
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
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Histórico do pet:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

</div>
          
<label>O quão dócil é seu pet?</label> <br>
                      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">30%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">50%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">70%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
  <label class="form-check-label" for="inlineCheckbox4">100%</label>
</div>
<br>
<label>O quão energético ele é?</label> 
<br>
                      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">30%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">50%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">70%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
  <label class="form-check-label" for="inlineCheckbox4">100%</label>
</div>

<label>O quão sociável ele é?</label> 
<br>
                      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">30%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">50%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">70%</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
  <label class="form-check-label" for="inlineCheckbox4">100%</label>
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
