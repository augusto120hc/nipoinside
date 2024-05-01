<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_logout.css">


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
                <li class="item"><a href="cards.php" class="nav-link">Cards</a></li>
                <li class="item"><a href="frases.php" class="nav-link">Frases</a></li>
                <li class="item"><a href="particulas.php" class="nav-link">Partículas</a></li>
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
                <li class="item"><a href="cards.php" class="nav-link">Cards</a></li>
                <li class="item"><a href="frases.php" class="nav-link">Frases</a></li>
                <li class="item"><a href="particulas.php" class="nav-link">Partículas</a></li>                
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
    <li class="item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="item"><a href="cards.php" class="nav-link">Cards</a></li>
        <li class="item"><a href="frases.php" class="nav-link">Frases</a></li>
        <li class="item"><a href="particulas.php" class="nav-link">Partículas</a></li>                 
    </ul>
    <div class="login-button">
        <button><a href="#">Login</a></button>
    </div>

 </nav>
</header>
    
    
<main class="container">
    <article>
        <div class="banner">
            <div>
            <figure>
                <img src="img/capaFull.jpg" id="banner-mobile" alt="Capa do site, garota com fone de ouvido">
            </figure>
            <figure>
                <img src="img/capaBanner.png" id="banner-pc" alt="Capa do banner, garota com fone de ouvido">
            </figure>
            </div>
    <h1 class="figura-banner">
        <figure>
        <img src="img/kanjijapan.png" alt="kanju que significa japão"></h1>
        </figure>

        <a href="kanji.html"><h1 class="texto-banner">日本語</a><br>
        <p>にほんご</p><br>

            <!-- CARDS transparentes--> 
            <h1 class="texto-banner frase-banner">Aprender Japonês</h1>          
        </div>
        
    </article>


    
        <aside class="cards-pagina">

            <section class="card-pagina">
                <!--Card 1-->        
               <div class="card-body-pagina">
               <img src="img/icone/iconeCards.png" alt="">
                        <h2>Cards com exemplos <br></h2>
                        <h2>例のあるカード
                           
                        </h2>                                          
                        <h2>Rei no aru kādo</h2>
                         <!--PLAY DO AUDIO-->                      
                </div>
                    <!---Card-footer-->       
                <!--Card 1-->
            </section>
        
        </aside>

   <!-- CARDS Página cards -->
   <section id="secao-index">
    <!--primeiro texto do corpo-->
    
            <!--primeiro texto do corpo-->    
        <div class="container-link">
            <hr>
            <p class="first-letter-styling">As <strong>cores</strong>  em japonês podem ser escritas em kanji, hiragana ou usando empréstimos 
            de palavras estrangeiras (como é o caso de "Laranja" e "Bege"). A pronúncia em
            hiragana é fornecida para auxiliar na leitura.
            </p>
        </div>          

     <!--segundo texto do corpo-->
    
     <div class="container-link">
        <hr>
        <p class="first-letter-styling">É importante notar que, em japonês, os <strong>meses</strong>  são geralmente seguidos pela 
        palavra "gatsu". Por exemplo, "Janeiro" é "Ichigatsu". No entanto, em contextos 
        informais, é comum usar apenas o número correspondente ao mês.
        Por exemplo, "Maio" pode ser simplesmente referido como "Gogatsu".
    </p>
    </div>
        
    <!--terceiro texto do corpo-->       
            <div class="container-link link-final">
                <hr>
                <!--segundo texto do corpo-->
                <p class="first-letter-styling">Cada <strong>dia da semana</strong> é escrito com o caractere correspondente ao elemento 
                (como "日" para "sol" em Domingo, "月" para "lua" em Segunda-feira, etc.), 
                seguido pela palavra "yōbi" que significa "dia". A pronúncia em hiragana 
                também é fornecida para facilitar a leitura. <br><br>
               
        </p>
        </div>
            </div>
</section>



<!-- Cores CARDS -->
    <div class="container-card-categoria">
        <div class="card-coluna01">
            <figure class="iconeCores">
                <img src="img/icone/iconeCores.png" alt="">
            </figure>
            <h2>Cores -色 Iro</h2><br> 
            <div class="card-linha">               
                    <p class="card-vermelho">
                        
                        Vermelho <br>
                        <span id="playCard" >
                            <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
                        </span>
                        赤 (aka)
                    </p>
                    <p class="card-preto">
                        Preto <br>
                        <span id="playCard">
                            <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                        </span>
                        黒 (kuro)
                    </p>                
            </div>

            <div class="card-linha">        
                <p class="card-azul">
                    Azul<br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    青 (ao)
                </p>
                <p class="card-branco">
                    Branco <br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    白 (shiro)
                </p>        
            </div>

            <div class="card-linha">        
                <p class="card-amarelo">
                    amarelo<br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    黄色 (kiiro)
                </p>
                <p class="card-marron">
                    Marron <br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    茶色 (chairo)
                </p>        
            </div>

            <div class="card-linha">        
                <p class="card-verde">
                    Verde<br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    緑 (midori)
                </p>
                <p class="card-cinza">
                    Cinza <br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    灰色 (haiiro)
                </p>        
            </div>

            <div class="card-linha">        
                <p class="card-laranja">
                    Laranja<br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    オレンジ (orenji)
                </p>
                <p class="card-dourado">
                    Dourado <br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    金色 (kiniro)
                </p>        
            </div>

            <div class="card-linha">        
                <p class="card-rosa">
                    Rosa<br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    ピンク (pinku)
                </p>
                <p class="card-prateado">
                    Prateado <br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    銀色 (gin'iro)
                </p>        
            </div>

            <div class="card-linha">        
                <p class="card-roxo">
                    Roxo<br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    紫 (murasaki)
                </p>
                <p class="card-bege">
                    Bege <br>
                    <span id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()">
                    </span>
                    ベージュ (bejyu)
                </p>        
            </div>

        </div>
</div>
<!-- Meses CARDS -->
        <div class="card-coluna02">
            <figure class="iconeCalendario">
                <img src="img/icone/iconeCalendario.png" alt="Calendário em japonês, meses em japonês">
            </figure>
            <h2  class="verde-fraco">Meses - 月 Tsuki</h2><br> 
            <div class="card-linha">               
                <p class="card-mes">
                    <span class="playCardMeses" id="playCard"  >
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
                    </span>
              
                    Janeiro <br>
                    
                    "一月" 
                    (いちがつ,<br> "ichigatsu")
                    
                                      
                </p>
                <p class="card-mes">
                    <span class="playCardMeses" id="playCard">
                        <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                    </span>
                    Fevereiro <br>
                    二月" (にがつ,<br> "nigatsu")
                </p>                 
        </div>
    
        <div class="card-linha">        
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Março <br>
                "三月" (さんがつ,<br> "sangatsu")
            </p>
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Abril <br>
                "四月" (しがつ,<br> "shigatsu")
            </p>        
        </div>
    
        <div class="card-linha">        
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Maio <br>
                "五月" (ごがつ,<br> "gogatsu")
            </p>
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Junho <br>
                "六月" (ろくがつ,<br> "rokugatsu").
            </p>        
        </div>
    
        <div class="card-linha">        
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Agosto <br>
                "八月" (はちがつ,<br> "hachigatsu")
            </p>
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Setembro <br>
                "九月" (くがつ,<br> "kugatsu")
            </p>        
        </div>
    
        <div class="card-linha">        
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Outubro <br>
                "十月" (じゅうがつ,<br> "jūgatsu")
            </p>
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Novembro <br>
                "十一月" (じゅういちがつ,<br> "jūichigatsu")
            </p>        
        </div>
    
        <div class="card-linha">        
            <p class="card-mes">
                <span class="playCardMeses" id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> <br>
                </span>
                Dezembro <br>
                "十二月" (じゅうにがつ,<br> "jūnigatsu")
            </p>          
        </div>   
        



</div>

<!-- CARDS semanas -->
<div class="card-coluna03 link-final">
    <figure class="iconeCalendario">
        <img src="img/icone/dias-da-semana.png" alt="Calendário em japonês, meses em japonês">
    </figure>
    <h2>Dias da semana
        曜日 - Yōbi</h2><br> 
    <div class="card-linha">               
            <p class="card-semana">
                Domingo <br>
                <span id="playCard">
                    <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
                </span>
                 日曜日 (にちようび, "nichiyoubi")
            </p>                              
    </div>

    <div class="card-linha">        
        <p class="card-semana">
            Segunda-feira <br>
            <span id="playCard">
                <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
            </span>
             月曜日 (げつようび, "getsuyoubi")
        </p>                
    </div>

    <div class="card-linha">        
        <p class="card-semana">
            Terça-feira <br>
            <span id="playCard">
                <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
            </span>
             火曜日 (かようび, "kayoubi")
        </p>                   
    </div>

    <div class="card-linha">        
        <p class="card-semana">
            Quarta-feira <br>
            <span id="playCard">
                <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
            </span>
             水曜日 (すいようび, "suiyoubi")
        </p>                 
    </div>

    <div class="card-linha">        
        <p class="card-semana">
            Quinta-feira <br>
            <span id="playCard">
                <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
            </span>
             木曜日 (もくようび, "mokuyoubi")
        </p>              
    </div>

    <div class="card-linha">        
        <p class="card-semana">
            Sexta-feira <br>
            <span id="playCard">
                <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
            </span>
             金曜日 (きんようび, "kinyoubi")
        </p>                 
    </div>

    <div class="card-linha">        
        <p class="card-semana">
            Sábado <br>
            <span id="playCard">
                <img src="icons/playbutton.png" class="iconeplay play-menor" alt="" onclick="playAudio()"> 
            </span>
             土曜日 (どようび, "doyoubi")
        </p>
              
    </div>
</div>

</div>


<!-- TESTE SEGUNDA COLUNA-->

<!-- cards Profissões -->
<div class="card-coluna03 link-final">
    <figure class="iconeCalendario">
        <img src="img/icone/iconeProfissoes.png" alt="Calendário em japonês, meses em japonês">
    </figure>
<h2>Profissões</h2>
<section class="secao-03-numeros  secao-profissao-cards" >
     
    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>


    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>

    <div class="secao-numero-index">
        <div class="player-verbos"  >
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playAudio04()">                  
        </div>
        <p><span class="verde-fraco" style="font-size: 22px;">教師</span></p>
        <p><strong><span class="verde">(きょうし)</span></strong>
        <p><span class="cinza-escuro">kyōshi</span></p>
        <p><strong><span class="azul">Professor(a)</span></strong> 
    </div>
</section>
</div>
</main>
          
<div class="seta-para-cima seta-para-cima-index">
    <a href="">
    <img src="icons/icone-seta-para-cima.png" alt="">
    </a>
</div>
          
<!--   FOOTER  -->
<footer class="footer-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="index.php">
                        <img src="icons/iconeAba.png" alt="logo nipoinside">
                    </a>
                </figure>
            </div>
            <div class="box">              
                 <!-- <h2>Sobre o Nipoinside</h2>  -->
                <p><span id="amarelo"> <strong> Nipoinside</strong></span></p>
                
                <p>Aprender o idioma</p>
                <p>Conhecendo a cultura do Japão</p>
            </div>
            <div class="box">
                <h2>Nassas redes</h2>
                <br>
                <div class="rede-social">
                    
                    <a href="#"><svg class="icone-face" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fa-brands fa-square-facebook"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>
                    </a>
                    <a href="#"><svg  class="icone-insta" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg></a>
                    <a href="#"><svg class="icone-x" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg></a>
                    <a href="#"><svg class="icone-you" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M282 256.2l-95.2-54.1V310.3L282 256.2zM384 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm14.4 136.1c7.6 28.6 7.6 88.2 7.6 88.2s0 59.6-7.6 88.1c-4.2 15.8-16.5 27.7-32.2 31.9C337.9 384 224 384 224 384s-113.9 0-142.2-7.6c-15.7-4.2-28-16.1-32.2-31.9C42 315.9 42 256.3 42 256.3s0-59.7 7.6-88.2c4.2-15.8 16.5-28.2 32.2-32.4C110.1 128 224 128 224 128s113.9 0 142.2 7.7c15.7 4.2 28 16.6 32.2 32.4z"/></svg></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Nipoinside</b> - Todos os direitos reservados. Desenvolvido po [Augusto Ramos]</small>
        </div>
    </footer>

  <!-- SCRIPT PARA EXIBIR OPÇÂO SAIR -->
<script>
    function exibirCaixa() {
        // Obtém a janela modal
        var modal = document.getElementById("avisoModal");
        // Exibe a janela modal
        modal.style.display = "block";
    }
    // Fecha a janela se clicar fora
    window.onclick = function(event) {
        var modal = document.getElementById("avisoModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    // FECHAR o modal
    function fecharModal(){
        var modal = document.getElementById("avisoModal");
        modal.style.display = "none";
    }
    </script>
  <div id="avisoModal" class="modal">
    <p class="close" onclick="fecharModal()">&times;</p>
    <div class="modal-content">
        <?php
        echo "<div class='userlogado'>";
        echo "<span>Olá, " . $_SESSION['nome'] . "</span><br>";
        echo "<span>" . $_SESSION['email'] . "</span>";
        echo "</div>";
        echo "<div class='btnsair'>";
        echo "<a href=\"logout.php\">Sair</a>";
        echo "</div>";
        ?>
    </div>
</div>

    <script src="js/script.js"></script>
    <script src="js/scriptEvangelion.js"></script>

</body>
</html>