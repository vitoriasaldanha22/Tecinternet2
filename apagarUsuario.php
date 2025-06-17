<?php
include("conexao.php");

$cpf = $_POST["cpf"];

$sql = "delete from usuarios where cpf = ? ";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $cpf);
    if(!$stmt->execute()){
        die("erro ao apagar: " . $stmt->error); // Adicionado $stmt->error para melhor depuração
    }
}else{
    die("Erro ao preparar a declaração: " . $conn->error); // Adicionado $conn->error para depuração
}
header("Location: cadastrarUsuario.php"); // <--- Ponto e vírgula adicionado aqui
exit(); // É uma boa prática adicionar exit() após um header location
?>