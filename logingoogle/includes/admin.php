<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olá</title>
</head>
<style>
*{
  font-family: helvetica;
}
.container{
  display: flex; /* Ativa o flexbox no contêiner */
            flex-direction: column; /* Define a direção do flexbox como coluna */
            align-items: center; /* Centraliza os itens horizontalmente */
            text-align: center; /* Centraliza o texto */
            height: 100vh; /* Define a altura do contêiner para ocupar toda a altura da viewport */
            justify-content: center; /* Centraliza os itens verticalmente */
        
}
#g_id_onload{
  text-align: center;
}
.btngoogle{
  margin: 0 auto;
}
</style>
<?php
// retorna as informações da sessao do usuario
  $info = \App\Session\User::getInfo();


?>
<body>
  <div class="container">
      <h2>Admin Nipo</h2>
      <p>Olá, <b><?=$info['name']?>.</b> seja muito bem vindo.</p>
      <!-- botao do goole -->
      
  <a href="logout.php">
    <button>Sair</button>
  </a>

  </div>
</body>
</html>