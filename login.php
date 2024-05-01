
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="icons/logologon.png" type="image/x-icon">
    <title>Login</title>
</head>

<body id="fundo-login">
<?php include_once "conexao.php" ?>;
<form action="" class="login" method="POST">
  <div>
    <label for=""><h2>Login</h2></label>
  </div>

  <div class="label-login">
    <input type="email" name="email" id="email" maxlength="150" placeholder="Email">
  </div>
  <div class="label-login">
    <input type="password" name="password" id="password" maxlength="150" placeholder="Senha">
  </div>
  <div class="label-login">
    <button type="submit" id="btn-entrar-login">Entrar</button>
  </div>

  <div class="btn-cadastrese">
    <a href="" class="esqueciasenha">Esqueci a senha</a>
  <a href="cadastro.php" id="btn-cadastre-se">Não tenho conta</a>
  </div>

  <?php
session_start(); // Inicie a sessão para poder utilizar as variáveis de sessão

include_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['password']; // Corrigido para 'password'

    $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $consulta->bindParam(':email', $email);
    $consulta->execute();

    if ($retorno = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $verificaSenha = password_verify($senha, $retorno['senha']);
        if ($verificaSenha) {
            $_SESSION['nome'] = $retorno['nome'];
            $_SESSION['email'] = $retorno['email'];
            $_SESSION['img_perfil'] = $retorno['img_perfil']; // Defina $_SESSION['img_perfil'] com o valor do banco de dados
            header('location: index.php');
            exit(); // Encerre o script após o redirecionamento
        } else {
            echo "Usuário ou senha incorretos!";
        }
    } else {
        echo "Usuário ou senha incorretos!"; // Adicione uma mensagem de erro para o caso em que o email não seja encontrado no banco de dados
    }
}
?>


</form>

</body>
<script src="js/scriptlogin.js"></script>
<script src="js/scriptEvangelion.js"></script>
</body>
</html>