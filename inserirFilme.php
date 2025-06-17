<?php
include("conexao.php");

$ano = $_POST["ano"];
$nome = $_POST["nome"];
$genero = $_POST["genero"];

if (empty($genero)) {
    die("Insira um gênero");
}

$stmt = $conn->prepare("INSERT INTO filmes (nome, ano, genero) VALUES (?, ?, ?)");

if ($stmt) {
    $stmt->bind_param("sis", $nome, $ano, $genero);
    if ($stmt->execute()) {
        header("Location: cadastroFilmes.php");
        exit();
    } else {
        die("Erro ao inserir filme");
    }
} else {
    die("Erro na preparação da query");
}
?>