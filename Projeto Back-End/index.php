<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Cabeçalho Fixo</title>
    <style>
        /* Estilos para o cabeçalho */
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        /* Estilos para o conteúdo principal */
        .content {
            padding: 50px 0;
            /* Adicione margem superior para evitar que o conteúdo seja cortado sob o cabeçalho */
            margin-top: 60px;
	}
	.login-form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
        }
       
    </style>
</head>
<body>
    <div class="header">
        <h1>Cabeçalho Fixo</h1>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
        <!-- Seu conteúdo aqui -->
    </div>

    <div class="login-form">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required>
            <br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <button type="button" onclick="validateForm()">Login</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("Por favor, preencha todos os campos.");
            } else {
                // Coloque sua lógica de validação aqui, como enviar os dados para um servidor para autenticação.
                // Neste exemplo, estamos apenas mostrando um alerta de sucesso.
                alert("Login bem-sucedido!");
            }
        }
    </script>
</body>
</html>