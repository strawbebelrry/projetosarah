<?php
// conexão com o banco de dados.
$hostname = "localhost";
$bancodedados = "prototipo";
$usuario =  "root";
$senha = "";

$conn = new mysqli ($hostname, $usuario, $senha, $bancodedados);
if ($conn->connect_errno) {
    echo "falha ao conectar:(", $conn->connect_errno .")" . $conn->connect_error;
}

?>
