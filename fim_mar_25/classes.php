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