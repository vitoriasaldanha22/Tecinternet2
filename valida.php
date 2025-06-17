<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if(!isset($_SESSION['cpf']) || $_SESSION['cpf'] == ''){
    header("Location: index.php"); // Redireciona para a página de login se não houver CPF na sessão
    exit(); // É importante usar exit() após header()
}

if(!isset($_SESSION['senha']) || $_SESSION['senha'] == ''){
    header("Location: index.php"); // Redireciona se não houver senha na sessão
    exit();
}
// Opcional: Você pode adicionar mais validações aqui, como verificar se o nome existe, etc.
?>