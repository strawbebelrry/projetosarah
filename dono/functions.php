<?php

include '../php/config.php'; 

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    if (isset($_POST['submit'])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];
    $endereço= $_POST["endereço"];
    }

    if(!$_POST["id"]){
      // Consulta SQL
      $sql = "INSERT INTO usuario (nome, email, telefone, senha, endereço) VALUES (\"$nome\", \"$email\", \"$telefone\ \"$senha\", \"$endereço\")";

      if ($conn->query($sql) === TRUE) {
          echo "Novo usuario cadastrado com sucesso";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error; 
        }
        header('Location: http://localhost/prototipo/projetosarah/index.php');

      }else{

        $id = $_POST["id"];

        $sql = "UPDATE animal SET nome = '".$_POST["nome"]."', tipo = '".$_POST["tipo"]."', dtNacimento = '".$_POST["dtNacimento"]."' WHERE id_animal = $id";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/ricardo/aula/cachorro/animal/');

      }
    }else{
  
        $id = $_POST["id"];

        $sql = "DELETE FROM animal WHERE id_animal = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Element deleted successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/ricardo/aula/cachorro/animal/');
      }
    
}