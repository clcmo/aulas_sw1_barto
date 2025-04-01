<?php
// Classe para gerenciar o login
class Login {
    public $emailTeste = "calecmo@gmail.com";
    public $senhaTeste = "123456";

    // Função para validar o login
    public function verificaDados($email, $senha) {
        if ($email === $this->emailTeste && $senha === $this->senhaTeste) {
            return "Login realizado com sucesso! Bem-vindo de volta!";
        } else {
            return "E-mail ou senha incorretos. Tente novamente.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aula SW I</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <div class="w3-container header">
        <h1>Página de Login</h1>
        <p>Acesse sua conta utilizando e-mail e senha</p>
    </div>

    <!-- Formulário de Login -->
    <div class="w3-container form-container">
        <h2 class="w3-center">Login</h2>
        <form action="index.php" method="post">
            <!-- Campo oculto para diferenciar o formulário -->
            <input type="hidden" name="form_tipo" value="login">

            <!-- Campo E-mail -->
            <label for="email" class="w3-text-grey">E-mail:</label>
            <input type="email" id="email" name="email" class="w3-input w3-border w3-round" required>
            <p></p>

            <!-- Campo Senha -->
            <label for="senha" class="w3-text-grey">Senha:</label>
            <input type="password" id="senha" name="senha" class="w3-input w3-border w3-round" required>
            <p></p>

            <!-- Botões -->
            <button type="submit" class="w3-button w3-blue w3-round w3-large">Entrar</button>
            <button type="reset" class="w3-button w3-red w3-round w3-large">Cancelar</button>
        </form>
    </div>

    <!-- Rodapé -->
    <div class="w3-container footer">
        <p>Desenvolvido para Aula SW I - Exemplo de Login com PHP e W3.CSS</p>
    </div>
</body>
</html>