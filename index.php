<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%); /* Gradiente de roxo para azul */
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .login-container {
            background-color: #ffffff;
            padding: 45px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
            box-sizing: border-box;
            text-align: center;
        }

        h2 {
            color: #4a0986; /* Roxo escuro */
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 700;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #555;
            font-weight: 400;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 25px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.2);
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #6a11cb; /* Roxo principal */
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #4f0a99; /* Roxo mais escuro no hover */
            transform: translateY(-2px);
        }

        /* Opcional: estilo para a mensagem de erro (se o PHP a exibir) */
        .error-message {
            color: red;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>