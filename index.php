<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="index.php" method="post">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Conectar">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtenha os dados do formulário
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Credenciais de exemplo (em um sistema real, você deve obter essas informações de um banco de dados)
            $valid_username = "admin";
            $valid_password = "12345";

            // Verifique se o nome de usuário e a senha são válidos
            if ($username === $valid_username && $password === $valid_password) {
                echo "<p class='success'>Login bem-sucedido! Bem-vindo, " . htmlspecialchars($username) . ".</p>";
            } else {
                echo "<p class='error'>Nome de usuário ou senha incorretos.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
