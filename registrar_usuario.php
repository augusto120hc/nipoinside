
<?php
            session_start();
            include_once "conexao.php";
            ?>
<?php
$msg = "";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepara os dados do formulário para inserção no banco de dados
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $senha = $_POST['senha']; // Captura a senha inserida pelo usuário
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT); // Criptografa a senha antes de armazená-la no banco de dados
    
    // Captura o valor do campo de confirmação de senha
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verifica se as senhas são iguais
    if ($senha !== $confirmar_senha) {
        header('Location: index.php');
        exit();
    } elseif (strlen($senha) < 8) { // Verifica se a senha tem menos de 8 caracteres
        $msg = "A senha deve ter no mínimo 8 caracteres.";
    } else {
        $data_registro = date('Y-m-d H:i:s'); // Data e hora atual

        // Verifica se foi enviado um arquivo de imagem
      // Verifica se foi enviado um arquivo de imagem
if(isset($_FILES['img_perfil'])){
    $extensao = strtolower(substr($_FILES['img_perfil']['name'], -4));
    // Define um novo nome único para a imagem
    $novo_nome = md5(time() . $extensao); // Gera nomes diferentes
    // Define o diretório para salvar as imagens
    $pasta_img_perfil = "pasta_img_perfil/";

    // Move o arquivo temporário para o diretório de destino
    if(move_uploaded_file($_FILES['img_perfil']['tmp_name'], $pasta_img_perfil.$novo_nome)){
        // Insere o nome da imagem na sessão
        $_SESSION['img_perfil'] = $novo_nome;

        // Insere o nome da imagem e os dados do formulário na tabela de usuários
        $sql_code = "INSERT INTO usuarios (img_perfil, nome, email, senha, data_registro) 
                     VALUES ('$novo_nome', '$nome', '$email', '$senha_hash', '$data_registro')";
        if($pdo->query($sql_code)){
            header('Location: cadastrado-com-sucesso.php');
        } else {
            $msg = "Falha ao registrar a imagem e os dados no banco de dados: " . $pdo->errorInfo()[2];
        }
    } else {
        $msg = "Falha ao enviar a imagem";
    }
} else {
    $msg = "Nenhum arquivo de imagem enviado";
}

    }
}

echo "<p>$msg</p>";
?>


</body>

<script src="js/scriptlogin.js"></script>

</body>
</html>

<?php
session_start();
include_once "conexao.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verifique se as senhas coincidem
    if ($senha !== $confirmar_senha) {
        $msg = "As senhas não coincidem.";
    } else {
        // Verifique se um arquivo de imagem foi enviado
        if (isset($_FILES['img_perfil'])) {
            $img_perfil = $_FILES['img_perfil'];
            $img_nome = $img_perfil['name'];
            $img_tmp = $img_perfil['tmp_name'];

            // Diretório onde as imagens serão armazenadas
            $diretorio = "pasta_img_perfil/";

            // Move o arquivo para o diretório de destino
            if (move_uploaded_file($img_tmp, $diretorio . $img_nome)) {
                // Insira o nome da imagem no banco de dados
                // Aqui você deve adicionar o código para inserir os outros dados do usuário e o nome da imagem no banco de dados
                $_SESSION['img_perfil'] = $img_nome;
                $msg = "Usuário cadastrado com sucesso.";
            } else {
                $msg = "Falha ao enviar a imagem.";
            }
        } else {
            $msg = "Nenhuma imagem enviada.";
        }
    }
}

echo "<p>$msg</p>";
?>
