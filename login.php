<?php

include("conexao.php");

$cpf=$_POST["cpf"];
$senha=$_POST["senha"];

if(!isset($_POST['cpf']) || $_POST['cpf'] == ''){
    die("Insira um CPF");
}

if(!isset($_POST['senha']) || $_POST['senha'] == ''){
    die("Favor informar a senha");
}


/*
$sql = "select nome from usuarios where cpf='$cpf' and senha='$senha'";
    
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

if(isset($row) && $row['nome'] != ''){
    session_start();
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome']= $row['nome'];
    header("Location: principal.php");
}else{
    die("senha incorreta");
}
*/

$sql = "select nome from usuarios where cpf= ? and senha= ? ";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if($row['nome'] != ''){
            session_start();
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $row['nome'];

            header("Location: principal.php");
        }else{
            die("Senha Incorreta");
        }
    }else{
        die("Nenhum Usuário Encontrado!");
    }
}













?> 