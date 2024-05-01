<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="style_numeros.css">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style-particulas.css">
    

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="icons/logologon.png" type="image/x-icon">
    <title>Nipoinside</title>
</head>
<body>

    <header>
        <nav class="nav-bar">
            <a class="logo" href="index.php"><img src="img/logonome.png" alt="Logotipo do site" ></a>
           
            <div class="nav-list">
                <ul>
                    <li class="item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="item"><a href="cards.html" class="nav-link">Cards</a></li>
                    <li class="item"><a href="frases.html" class="nav-link">Frases</a></li>
                    <li class="item"><a href="particulas.html" class="nav-link">Partículas</a></li>
                </ul>
            </div>

            <?php
session_start();
include_once "conexao.php";

if (isset($_SESSION['nome'])) {
    
    // Verifica se a imagem do perfil está definida
    if(isset($_SESSION['img_perfil'])) {
        // Diretório onde as imagens estão armazenadas
        $pasta_img_perfil = "pasta_img_perfil/";
        // Constrói o caminho completo da imagem
        $caminho_imagem = $pasta_img_perfil . $_SESSION['img_perfil'];
        // Estilo CSS para tornar a imagem redonda
        echo "<style>
            .round-image {
                border-radius: 50%; /* Define o raio de borda para 50% para tornar a imagem redonda */
                width: 40px; /* Define a largura da imagem */
                height: 40px; /* Define a altura da imagem */
                object-fit: cover; /* Garante que a imagem cobrirá todo o espaço designado */
                cursor: pointer;
            }
        </style>";
        // Adiciona a classe de estilo à tag <img>
        echo "<img src='" . $caminho_imagem . "' class='round-image' onclick='exibirCaixa()'>";
    }
    
} else {
    // Se o usuário não estiver logado, o botão de login será exibido
    
}
?>
<?php
if (!isset($_SESSION['nome'])){
    echo '<div class="login-button">
    <button>
    <a href="login.php">Login</a>
    </button>
    </div>';

}
?>

            <span class="toggle" id="navHeader">
            </span>
            </nav>
          

            <div class="mobile-menu-icon">
                <button onclick="menushow()"><img src="icons/baricon.png" alt=""></button>
            </div>
        </nav>
      
        <div class="mobile-menu">
            <ul>
                <li class="item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="item"><a href="cards.html" class="nav-link">Cards</a></li>
                <li class="item"><a href="frases.html" class="nav-link">Frases</a></li>
                <li class="item"><a href="particulas.html" class="nav-link">Partículas</a></li>                
            </ul>
            <div class="login-button">
                <button><a href="#">Login</a></button>
            </div>
        </div>
       

 <!-- Menu de teste hamburger -->
 <input type="checkbox" id="menu-toggle" />
 <label for="menu-toggle" class="hamburger"><img src="icons/baricon.png" alt=""></label>

 <nav class="menu">
    <ul>
        <li class=""><a href="index.php" class="nav-link">Home</a></li>
        <li class=""><a href="cards.html" class="nav-link">Cards</a></li>
        <li class=""><a href="frases.html" class="nav-link">Frases</a></li>
        <li class=""><a href="particulas.html" class="nav-link">Partículas</a></li>                
    </ul>
    <div class="login-button">
        <button><a href="#">Login</a></button>
    </div>

 </nav>
</header>