<?php
include("valida.php"); // Inclui o arquivo de validação de sessão
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Filmes</title>
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
        .content select {
            width: calc(100% - 20px); /* Ajuste para padding */
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .content input[type="text"]:focus,
        .content select:focus {
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
            overflow: hidden; /* Para bordas arredondadas da tabela */
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

        table td input[type="text"],
        table td select {
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
            width: auto; /* Para os botões dentro da tabela */
        }

        table td .btn-alterar {
            background-color: #007bff; /* Azul para alterar */
            color: white;
            border: none;
        }
        table td .btn-alterar:hover {
            background-color: #0056b3;
        }

        table td .btn-apagar {
            background-color: #dc3545; /* Vermelho para apagar */
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
            table td:nth-of-type(1):before { content: "ID:"; }
            table td:nth-of-type(2):before { content: "Nome:"; }
            table td:nth-of-type(3):before { content: "Ano:"; }
            table td:nth-of-type(4):before { content: "Gênero:"; }
            table td:nth-of-type(5):before { content: "Alterar:"; }
            table td:nth-of-type(6):before { content: "Apagar:"; }
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
            <h2>Manutenção de filmes</h2>
            <h3>Criar novo filme</h3>
            <form method="post" action="inserirFilme.php">
                <label for="nome">NOME:</label>
                <input type="text" name="nome" id="nome" required><br>

                <label for="ano">ANO:</label>
                <input type="text" name="ano" id="ano" required><br>

                <label for="genero">GENERO:</label>
                <select name="genero" required>
                    <option value="">Selecione um Gênero</option>
                    <?php
                    include("conexao.php"); // Inclui a conexão para buscar os gêneros

                    $sql_generos = "SELECT genero_id, descricao FROM generos WHERE status=1";
                    if (!($resultado_generos = $conn->query($sql_generos))) {
                        die("Erro ao buscar gêneros: " . $conn->error);
                    }
                    while ($row_genero = $resultado_generos->fetch_assoc()) {
                    ?>
                        <option value="<?= $row_genero['genero_id']; ?>"><?= htmlspecialchars($row_genero['descricao']); ?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <input type="submit" value="Inserir">
            </form>

            <h3>Filmes Cadastrados</h3>
            <?php
            // Re-estabelece a conexão ou garante que esteja aberta
            include("conexao.php"); 

            $sql = "SELECT f.filme, f.nome, f.ano, f.genero, g.descricao AS desc_genero
                    FROM filmes f
                    INNER JOIN generos g ON (g.genero_id = f.genero)"; // Assumindo genero_id como a chave na tabela generos

            if(!$resultado = $conn->query($sql)){
                die("Erro ao buscar filmes: " . $conn->error);
            }
            ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Gênero</th>
                        <th>Alterar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($row['filme']); ?></td>
                        <td>
                            <form method="post" action="alterarFilme.php" style="display:inline;">
                                <input type="hidden" name="filme_id" value="<?= $row['filme']; ?>">
                                <input type="text" name="nome" value="<?= htmlspecialchars($row['nome']); ?>">
                        </td>
                        <td><input type="text" name="ano" value="<?= htmlspecialchars($row['ano']); ?>"></td>
                        <td>
                            <select name="genero">
                                <option value="">Selecione um Gênero</option>
                                <?php
                                // Busca os gêneros novamente para cada linha
                                // Cuidado: Se você tiver muitos filmes e gêneros, isso pode ser ineficiente.
                                // Uma alternativa seria carregar todos os gêneros uma vez e usá-los aqui.
                                $sqlGeneros = "SELECT genero_id, descricao FROM generos WHERE status=1"; 
                                if(!$resultadoGeneros = $conn->query($sqlGeneros)){
                                    die("Erro ao buscar gêneros para alteração: " . $conn->error);
                                }
                                while($rowGeneros = $resultadoGeneros->fetch_assoc()){
                                ?>
                                    <option value="<?= $rowGeneros['genero_id'];?>" <?=($rowGeneros['genero_id'] == $row['genero'])?'selected':'';?> >
                                        <?= htmlspecialchars($rowGeneros['descricao']); ?>
                                    </option>
                                <?php
                                }
                                // Volta o ponteiro do resultado dos gêneros para o início para o próximo loop
                                if ($resultadoGeneros) {
                                    $resultadoGeneros->data_seek(0);
                                }
                                ?>
                            </select>
                        </td>
                        <td><input type="submit" value="Alterar" class="btn-alterar"></td>
                        </form>
                        <td>
                            <form method="post" action="apagarFilme.php" style="display:inline;">
                                <input type="hidden" name="filme_id" value="<?= $row['filme']; ?>">
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