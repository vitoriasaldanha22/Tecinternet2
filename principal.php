<?php
include("autenticacao.php");
// As linhas abaixo são para depuração, você pode removê-las em produção
// echo "cpf: ".$_SESSION['cpf'].'<br>';
// echo "nome: ".$_SESSION['nome'].'<br>';
// echo "senha: ".$_SESSION['senha'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa; /* Cinza claro */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header-top {
            background-color: #6a11cb; /* Roxo principal */
            color: #ffffff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky; /* Cabeçalho fixo */
            top: 0;
            z-index: 1000;
        }

        .header-top span {
            font-size: 20px;
            font-weight: 400;
        }

        .header-top a {
            background-color: #2575fc; /* Azul mais vibrante */
            color: white;
            padding: 8px 18px;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .header-top a:hover {
            background-color: #1a5bbd;
        }

        .main-content {
            display: flex;
            flex-grow: 1; /* Faz o conteúdo principal ocupar o espaço restante */
            padding: 20px;
            gap: 20px;
            max-width: 1200px;
            margin: 20px auto; /* Centraliza o conteúdo principal */
            width: 100%;
            box-sizing: border-box;
        }

        .menu {
            width: 250px;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            flex-shrink: 0; /* Impede que o menu encolha */
        }

        .menu h2 {
            margin-top: 0;
            font-size: 22px;
            color: #4a0986; /* Roxo escuro */
            margin-bottom: 25px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .menu p {
            margin: 15px 0;
        }

        .menu a {
            color: #555;
            text-decoration: none;
            font-size: 17px;
            display: block;
            padding: 10px 0;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        .menu a:hover {
            color: #6a11cb; /* Roxo principal */
            transform: translateX(5px);
        }

        .content {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .content h2 {
            color: #4a0986;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 700;
        }

        /* Responsividade básica */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                padding: 15px;
            }

            .menu {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="header-top">
        <span>Olá <?php echo isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : 'Visitante'; ?></span> 
        <a href="sair.php">Sair</a>
    </div>

    <div class="main-content">
        <div class="menu">
            <h2>Menu</h2>
            <p><a href="cadastrarUsuario.php">Cadastrar Usuários</a></p>
            <p><a href="cadastrarFilmes.php">Cadastrar Filmes</a></p>
            <p><a href="item.php">Item 1</a></p>
            <p><a href="#">Item 2</a></p>
            <p><a href="#">Item 3</a></p>
        </div>

        <div class="content">
            <h2>Bem-vindo ao Painel!</h2>
            <p>Use o menu lateral para navegar entre as opções do sistema.</p>
            </div>
    </div>

</body>
</html>