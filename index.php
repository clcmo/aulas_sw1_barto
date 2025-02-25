<!DOCTYPE html>
<html lang="en">
<?php
    if (isset($_POST['nome'])) {
      $nome = htmlspecialchars($_POST['nome']); // Proteção contra XSS 
    } else {
      $nome = "visitante!"; // Mensagem padrão caso o nome não seja fornecido
    }
  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Olá,<?=$nome?>!</h1>
</body>
</html>