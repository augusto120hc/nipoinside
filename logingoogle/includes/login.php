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
<body>
  <div class="container">
      <h2>Login com google</h2>
      <p>Utilize sua conta Google para fazer login</p>
      <!-- botao do goole -->
      <script src="https://accounts.google.com/gsi/client" async class="hlogin">
      </script>
      
          <div id="g_id_onload"
              data-client_id="571574723170-ie95viqtscgnr3raq6siu1ipao0fl0ji.apps.googleusercontent.com"
              data-login_uri="http://localhost/logingoogle/login.php"
              data-auto_prompt="false">
          </div>
          <div class="g_id_signin"
              data-type="standard"
              data-size="large"
              data-theme="outline"
              data-text="sign_in_with"
              data-shape="rectangular"
              data-logo_alignment="left">
          </div>
        

  </div>
</body>
</html>