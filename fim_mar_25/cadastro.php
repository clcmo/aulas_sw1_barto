<?php
// Classe para gerenciar o cadastro
class Cadastro {
    public $nome = "";
    public $email = "";
    public $senha = "";
    public $genero = "";
    public $descricao = "";
    public $website = "";

    // Função para verificar e limpar os dados do cadastro
    public function verificaPreCadastro($data) {
        if (!empty($data)) {
            return $this->verificaDados($data);
        } else {
            return "Campo obrigatório.";
        }
    }

    // Função para sanitizar os dados
    public function verificaDados($dado) {
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Aula SW I</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <div class="w3-container header w3-center">
        <h1>Cadastro de Usuário</h1>
        <p>Preencha os campos abaixo para se cadastrar</p>
    </div>

    <!-- Formulário de Cadastro -->
    <div class="w3-container form-container">
        <h2 class="w3-center">Formulário de Cadastro</h2>
        <form action="index.php" method="post">
            <!-- Campo oculto para diferenciar o formulário -->
            <input type="hidden" name="form_tipo" value="cadastro">

            <!-- Nome -->
            <label for="nome" class="w3-text-grey">Nome:</label>
            <input type="text" id="nome" name="nome" class="w3-input w3-border w3-round" required>
            <p></p>

            <!-- E-mail -->
            <label for="email" class="w3-text-grey">E-mail:</label>
            <input type="email" id="email" name="email" class="w3-input w3-border w3-round" required>
            <p></p>

            <!-- Senha -->
            <label for="senha" class="w3-text-grey">Senha:</label>
            <input type="password" id="senha" name="senha" class="w3-input w3-border w3-round" required>
            <p></p>

            <!-- Gênero -->
            <label class="w3-text-grey">Gênero:</label>
            <p>
                <input type="radio" name="genero" value="Feminino" class="w3-radio" required> Feminino
                <input type="radio" name="genero" value="Masculino" class="w3-radio" required> Masculino
                <input type="radio" name="genero" value="Outro" class="w3-radio" required> Outro
            </p>

            <!-- Website -->
            <label for="website" class="w3-text-grey">Website:</label>
            <input type="url" id="website" name="website" class="w3-input w3-border w3-round">
            <p></p>

            <!-- Descrição -->
            <label for="descricao" class="w3-text-grey">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4" class="w3-input w3-border w3-round"></textarea>
            <p></p>

            <!-- Botão de Enviar -->
            <button type="submit" class="w3-button w3-green w3-round w3-large">Enviar</button>
        </form>
    </div>

    <!-- Rodapé -->
    <div class="w3-container footer">
        <p>Aula SW I - Sistema de Cadastro com PHP e W3.CSS</p>
    </div>
</body>
</html>