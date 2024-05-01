<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style_cadastro.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="icons/logologon.png" type="image/x-icon">


    <title>Cadastro</title>
    <script>
       function previewImage(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }

    function confereSenha() {
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmar_senha").value;
    var mensagemSenha = document.getElementById("mensagem_senha");

    if (senha !== confirmarSenha) {
        mensagemSenha.textContent = "As senhas não coincidem";
    } else {
        mensagemSenha.textContent = "";
    }
}

    </script>
</head>
<body id="fundo-cadastro">
      
<form method="post" action="registrar_usuario.php" enctype="multipart/form-data" id="form_cadastro">
    <div class="label">
        <label><h2>Cadastro</h2></label>      
    </div>
    <div class="label">
    <label for="img_perfil">Foto de perfil:</label>
    <label class="file-upload">
        Escolher sua foto
        <input title="Escolha uma imgem" type="file" id="img_perfil" name="img_perfil" accept="image/*"  onchange="previewImage(event)">
    </label>
    </div>
    <div class="label">
        <img id="preview" src="#" alt="Preview da imagem de perfil" style="display: none; border-radius: 50%; width: 100px; height: 100px; object-fit: cover">
    </div>
    <div class="label">
        <label for="nome">Nome:</label>
        <input type="text" required id="nome" name="nome" maxlength="150" placeholder="Nome">
    </div>
    
    <div class="label">
        <label for="email">e-mail:</label>
        <input type="email" required id="email" name="email" maxlength="150" placeholder="Email">
    </div>
    <div class="label">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" minlength="8" placeholder="Senha" onchange="confereSenha()" oninput="confereSenha()">
    </div>

    <div class="label">
        <label for="confirmar_senha">Confirmar Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" minlength="8"  placeholder="Confirmar Senha" onchange="confereSenha()" oninput="confereSenha()">
        <span id="mensagem_senha" style="color: red;"></span>
    </div>
    
    <input type="hidden" name="escondido" value="Formulário de cadastro">
    
    <button type="submit" id="btn-registrar">Registrar</button>

<!--  LOGIN GOOGLE -->
    <div class="logingoogle">
        <span>
        <style>
*{
  font-family: helvetica;
}
.container{
  display: flex; /* Ativa o flexbox no contêiner */
            flex-direction: column; /* Define a direção do flexbox como coluna */
            align-items: center; /* Centraliza os itens horizontalmente */
            text-align: center; /* Centraliza o texto */
    
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
      <!-- <h2>Login com google</h2> -->
      <br><p>ou</p><br>
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
        </span>
    </div>
</form>
