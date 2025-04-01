<?php
if (basename($_SERVER['PHP_SELF']) === 'index.php') {
    include 'classes.php';
}

// Instanciando as classes
$cadastro = new Cadastro();
$login = new Login();

$mensagemCadastro = "";
$mensagemLogin = "";

// Verificando se o formulário de Cadastro foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_tipo"]) && $_POST["form_tipo"] == "cadastro") {
    $nome = $cadastro->verificaPreCadastro($_POST["nome"]);
    $email = $cadastro->verificaPreCadastro($_POST["email"]);
    $senha = $cadastro->verificaPreCadastro($_POST["senha"]);
    $genero = $cadastro->verificaPreCadastro($_POST["genero"]);
    $descricao = $cadastro->verificaDados($_POST["descricao"]);
    $website = $cadastro->verificaDados($_POST["website"]);

    $mensagemCadastro = "Cadastro realizado com sucesso!";
}

// Verificando se o formulário de Login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_tipo"]) && $_POST["form_tipo"] == "login") {
    $mensagemLogin = $login->verificaDados($_POST["email"], $_POST["senha"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Aulas SW I</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

    <!-- Cabeçalho -->
    <div class="w3-container header w3-center">
        <h1>Bem-vindo ao Sistema</h1>
        <p>Gerencie suas informações de cadastro e login</p>
    </div>

    <!-- Conteúdo Principal -->
    <div class="w3-container content">
        <!-- Caixa de dados cadastrados -->
        <div class="w3-card w3-padding w3-margin w3-white">
            <h2 class="w3-text-blue">Dados Cadastrados</h2>
            <?php if (!empty($nome)): ?>
                <p><b>Nome:</b> <?= htmlspecialchars($nome); ?></p>
                <p><b>E-mail:</b> <?= htmlspecialchars($email); ?></p>
                <p><b>Gênero:</b> <?= htmlspecialchars($genero); ?></p>
                <p><b>Descrição:</b> <?= htmlspecialchars($descricao); ?></p>
                <p><b>Website:</b> <a href="<?= htmlspecialchars($website); ?>" target="_blank"><?= htmlspecialchars($website); ?></a></p>
            <?php else: ?>
                <p class="w3-text-grey">Nenhum dado cadastrado ainda.</p>
            <?php endif; ?>
        </div>

        <!-- Exibir mensagens de feedback -->
        <?php if (!empty($mensagemCadastro)): ?>
            <div class="w3-panel w3-green w3-padding">
                <p><?= $mensagemCadastro; ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($mensagemLogin)): ?>
            <div class="w3-panel w3-blue w3-padding">
                <p><?= $mensagemLogin; ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Rodapé -->
    <div class="w3-container w3-center w3-light-grey w3-padding">
        <p>Desenvolvido para Aula SW I - Exemplo de Integração com PHP e W3.CSS</p>
    </div>
</body>
</html>