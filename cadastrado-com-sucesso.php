<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style_cadastro.css">
  <title>Cadastrado com sucesso</title>
</head>
<body>
<style>
  body {
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f0f0f0;
}
.cadastrado {
  text-align: center;
}
.container-cadastrado {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  line-height: 30px;
}

h2 {
  color: #333;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>
  <main class="cadastrado">
    <div class="container-cadastrado">
<h2>Cadastrado com sucesso!</h2>
<p>Seja bem vindo!</p>
<a href="login.php">Fazer login</a>
    </div>
  </main>
</body>
</html>