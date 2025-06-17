<?php
include("valida.php"); // Inclui o arquivo de validação de sessão
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa; /* Cinza claro */
            margin: 0;
            padding: 0;
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
            position: sticky;
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
            flex-grow: 1;
            padding: 20px;
            gap: 20px;
            max-width: 1200px;
            margin: 20px auto;
            width: 100%;
            box-sizing: border-box;
        }

        .menu {
            width: 250px;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            flex-shrink: 0;
        }

        .menu h2 {
            margin-top: 0;
            font-size: 22px;
            color: #4a0986;
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
            color: #6a11cb;
            transform: translateX(5px);
        }

        .content {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .content h2, .content h3 {
            color: #4a0986;
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 700;
        }
        .content h3 {
            font-size: 22px;
            font-weight: 500;
            margin-top: 30px;
        }

        .content form {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #fcfcfc;
        }

        .content label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 400;
        }

        .content input[type="text"],
        .content input[type="password"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .content input[type="text"]:focus,
        .content input[type="password"]:focus {
            border-color: #6a11cb;
            outline: none;
        }

        .content input[type="submit"] {
            padding: 12px 25px;
            background-color: #28a745; /* Verde para inserção */
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .content input[type="submit"]:hover {
            background-color: #218838;
            transform: translateY(-1px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            border: 1px solid #e0e0e0;
            padding: 12px 15px;
            text-align: left;
            font-size: 15px;
        }

        table th {
            background-color: #f2f2f2;
            color: #4a0986;
            font-weight: 700;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f0f0f0;
        }

        table td input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        table td input[type="submit"] {
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: auto;
        }

        table td .btn-alterar {
            background-color: #007bff;
            color: white;
            border: none;
        }
        table td .btn-alterar:hover {
            background-color: #0056b3;
        }

        table td .btn-apagar {
            background-color: #dc3545;
            color: white;
            border: none;
        }
        table td .btn-apagar:hover {
            background-color: #c82333;
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
            table, thead, tbody, th, td, tr {
                display: block;
            }
            table thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            table tr {
                border: 1px solid #ccc;
                margin-bottom: 10px;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            }
            table td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                text-align: right;
            }
            table td:before {
                position: absolute;
                top: 0;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
                color: #4a0986;
            }
            /* Labels para modo responsivo */
            table td:nth-of-type(1):before { content: "Nome:"; }
            table td:nth-of-type(2):before { content: "CPF:"; }
            table td:nth-of-type(3):before { content: "Senha:"; }
            table td:nth-of-type(4):before { content: "Alterar:"; }
            table td:nth-of-type(5):before { content: "Apagar:"; }
        }
    </style>
</head>
<body>
    <div class="header-top">
        <span>Olá <?php echo isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : 'Visitante'; ?></span> 
        <a href="sair.php">SAIR</a>
    </div>

    <div class="main-content">
        <div class="menu">
            <h2>Menu</h2>
            <p><a href="cadastrarUsuario.php">Cadastrar Usuários</a></p>
            <p><a href="cadastrarFilmes.php">Cadastrar Filmes</a></p>
            <p><a href="#">Item 3</a></p>
        </div>

        <div class="content">
            <h2>Manutenção de Usuários</h2>
            <h3>Cadastrar Novo Usuário</h3>
            <form method="post" action="salvarUsuario.php">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required><br>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br>
                <input type="submit" value="Cadastrar">
            </form>

            <h3>Usuários Cadastrados</h3>
            <?php
                include("conexao.php"); 

                $sql = "SELECT nome, cpf, senha FROM usuarios"; 
                if(!$resultado = $conn->query($sql)){
                    die("Erro ao buscar usuários: " . $conn->error);
                }
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Senha</th>
                        <th>Alterar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td>
                            <form method="post" action="alterarUsuario.php" style="display:inline;">
                                <input type="hidden" name="cpfAnterior" value="<?= htmlspecialchars($row['cpf']); ?>"> 
                                <input type="text" name="nome" value="<?= htmlspecialchars($row['nome']); ?>"> 
                        </td>
                        <td> <input type="text" name="cpf" value="<?= htmlspecialchars($row['cpf']); ?>"> </td> 
                        <td> <input type="password" name="senha" value="<?= htmlspecialchars($row['senha']); ?>"> </td> 
                        <td> <input type="submit" value="Alterar" class="btn-alterar"> </td>
                        </form> 
                        <td> 
                            <form method="post" action="apagarUsuario.php" style="display:inline;">
                                <input type="hidden" name="cpf" value="<?= htmlspecialchars($row['cpf']); ?>">
                                <input type="submit" value="Apagar" class="btn-apagar"> 
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?> 
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>