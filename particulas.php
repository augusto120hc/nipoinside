
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-particulas.css">
    <link rel="stylesheet" href="css/style_logout.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="icons/logologon.png" type="image/x-icon">


    <title>Partículas</title>
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
                <li class="item"><a href="cards.html" class="nav-link">Cards</a></li>
                <li class="item"><a href="frases.html" class="nav-link">Frases</a></li>
                <li class="item"><a href="particulas.html" class="nav-link">Partículas</a></li>                
            </ul>
            <div class="login-button">
                <button><a href="#">Login</a></button>
            </div>
        </div>
   
   
    
    
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
            <img src="img/kanjijapan.png" alt="kanju que significa japão">
        </figure>
            </h1>
    

    <h2 class="texto-banner">
    <a href="#">
      日本語
    </a>
      <p>にほんご</p>
      <br />
      </h2>
                <!-- CARDS transparentes--> 
                <h1 class="texto-banner frase-banner">Partículas e frases</h1>          
        </div>
        
    </article>

    <aside class="cards-katakana">
        <section class="card-katakana">
                    <div class="card-body">
          <!--Card 1-->
                        <h2>Partículas em frases</h2>
                        <h2>文中の助詞</h2>                        
                        <h2>Bunchū no joshi</h2>                      
                    </div>
        </section>
        
      </aside>
      <div class="img-frases">
        <img src="img/icone-particulas.png" alt="" >
      </div>
       

         <!--  Container -->
         <div class="container-anime">
             <div class="container-anime-titulo">
                 <h2>Principais partículas em japonês</h2>                
            <br>
                
             </div>      
         </div>

         <div id="particulas-grupo">
            <h3> <span id="verde-fraco">は</span><span id="azul-fraco"> (wa)</span> - <span id="verde-fraco">が</span> <span id="azul-fraco">(ga)</span> - <span id="verde-fraco">を</span> <span id="azul-fraco">(wo)</span> - 
                <span id="verde-fraco">で</span> <span id="azul-fraco">(de)</span>
                <span id="verde-fraco">に</span> <span id="azul-fraco">(ni)</span><br>
                <span id="verde-fraco">へ</span> <span id="azul-fraco">(e)</span> -<span id="verde-fraco">と</span> <span id="azul-fraco">(to)</span> - <span id="verde-fraco">から</span> <span id="azul-fraco">(kara)</span> - <span id="verde-fraco">まで</span> <span id="azul-fraco">(made)</span>
             </h3>
         </div>
         
         <style>

          </style>

         <div class="container-particulas">
            <div class="faixa-container-particulas">
                <p></p>
            </div>


            <div class="container-particulas-cards">
                <div class="card">
                    <div>
                        <p><strong><span id="azul">は </strong><span id="azul">(<strong>wa</strong>):</span></span> É usada para marcar o tópico da frase. Exemplo:</p>
                        <p><span id="roxo">私<strong><span id="azul">は</span></strong>学生です。</span></p>
                        <p><span class="verde-fraco"><strong>(Watashi</span> <span id="azul">wa</span> <span class="verde-fraco">gakusei desu.)</strong></span></p>
                        <p><span id="roxo">わたし<span id="azul"><b>は</b   ></span>がくせいです</span></p>
                        <p><span class="verde-lima">Eu sou estudante. </span></p>
                        
                            <div class="player-particulas">
                                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                            </div>
                    </div>
                </div>
          
                <div class="card">
                    <div>
                        <p><strong><span id="azul">が (ga):</strong> É usada para marcar o sujeito da frase. Exemplo:</p>
                            <p><span id="roxo">犬<strong><span id="azul">が</span></strong>走っています。</span></p>
                        <p><span class="verde-fraco"><strong>(Inu</span> <span id="azul">ga</span> <span class="verde-fraco">hashitte imasu)</strong></span></p>
                        <p><span id="roxo">いぬ<span id="azul"><b>が</b></span>はしっています</span></p>
                        <p><span class="verde-lima">O cachorro está correndo</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <p><strong><span id="azul">を (wo):</span></strong> É usada para marcar o objeto direto da frase. Exemplo:</p>
                        <p><span id="roxo">リンゴ<span id="azul"><b>を</b></span>食べます。</span></p>
                        <p><span class="verde-fraco"><strong>(Ringo <span id="azul"><b>o</b></span> tabemasu)</strong></span></p>
                        <p><span id="roxo">リンゴ<span id="azul"><b>を</b></span>たべます。</span></p>
                        <p><span class="verde-lima">Eu como maçãs</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div>
                        <p><strong><span id="azul">で (de):</span></strong> É usada para indicar o local onde uma ação ocorre ou o meio pelo qual algo é feito. Exemplo:</p>
                        <p><span id="roxo">レストラン<span id="azul"><b>で</b></span>>食事します。</span></p>
                        <p><span class="verde-fraco"><b>(Resutoran <span id="azul">de</span> shokuji shimasu)</b></span></p>
                        <p><span id="roxo">レストラン<span id="azul"><b>で</b></span>しょくじします</span></p>
                        <p><span class="verde-lima">Eu faço uma refeição no restaurante.</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <p><strong><span id="azul">に (ni):</span></strong>  Tem várias funções, incluindo indicar destino, tempo, localização e agente. Exemplo:</p>
                        <p><span id="roxo">学校<span id="azul"><b>に</b></span>行きます。</span></p>
                        <p><span class="verde-fraco"><b>(Gakkō <span id="azul">ni</span> ikimasu)</b></span></p>
                        <p><span id="roxo">がっこう<span id="azul"><b>に</b></span>いきます</span></p>
                        <p><span class="verde-lima">Eu vou para a escola</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <p><strong><span id="azul">へ (e):</span></strong>  É usada para indicar direção ou destino. Exemplo:</p>
                        <p><span id="roxo">公園<span id="azul"><b>へ</b></span>行きます。 </span></p>
                        <p><span class="verde-fraco"><b>(Kōen <span id="azul">e</span> ikimasu)</b></span></p>
                        <p><span id="roxo">こうえん<span id="azul"><b>へ</b></span>いきます</span></p>
                        <p><span class="verde-lima">Eu vou para o parque</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <p><strong><span id="azul">と (to):</span></strong>  É usada para indicar companhia, citação direta ou condição. Exemplo:</p>
                        <p><span id="roxo">友達<span id="azul">と</span>映画を見ます。</span></p>
                        <p><span class="verde-fraco"><b>(Tomodachi <span id="azul">to</span> eiga o mimasu)</b></span></p>
                        <p><span id="roxo">ともだち<span id="azul"><b>と</b></span>えいがをみます</span></p>
                        <p><span class="verde-lima">Eu assisto um filme com um amigo</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <p><strong><span id="azul">から (kara):</span></strong>  É usada para indicar origem ou ponto de partida. Exemplo:</p>
                        <p><span id="roxo">東京<span id="azul"><b>から</b></span>来ました。</span></p>
                        <p><span class="verde-fraco"><b>(Tōkyō <span id="azul">kara</span> kimashita)</b></span></p>
                        <p><span id="roxo">とうきょう<span id="azul"><b>から</b></span>きました</span></p>
                        <p><span class="verde-lima">Eu vim de Tóquio</span></p>
                        <div class="player-particulas">
                            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <p><strong><span id="azul">まで (made):</span></strong>  É usada para indicar limite ou alcance. Exemplo:</p>
                        <p><span id="roxo">公園<span id="azul"><b>まで</b></span>歩きます。</span></p>
                        <p><span class="verde-fraco"><b>(Kōen <span id="azul">made</span> arukimasu)</b></span></p>
                        <p><span id="roxo">こうえん<span id="azul"><b>まで</b></span>あるきます</span></p>
                        <p><span class="verde-lima">Eu ando até o parque</span></p>
                            <div class="player-particulas">
                                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                            </div>        
                    </div> 
                </div>

                
              </div>
         </div>

        <div id="particula-central">
         <div class="h2-particulas">
            <div class="frase-wa">
                <!-- <p><span id="vermelho"> Características</span> das <span id="verde">partículas</span> da <span id="azul">gramática</span></p> -->
                <p>" <span id="azul">文法</span>の <span id="verde"> 助詞</span>の <span id="vermelho">特徴</span> " </p>
                <p>(<span id="azul">Bunpou&nbsp; </span>  no&nbsp; <span id="verde">joshi &nbsp;</span> no &nbsp;<span id="vermelho">tokuchou</span>)</p>
                <p><span id="azul">ぶんぽう</span>の<span class="verde-lima">じょし</span>の<span id="vermelho">とくちょう</span></p>
                <p><span class="verde-fraco">As características da partícula gramatical"</span></p>
            </div> 
            
             </div>
            <div class="img-naruto-particulas">
            <img src="img/narutoSfundo01.png" alt="">
            </div>            
            <p>           
            As <strong> partículas</strong> desempenham um papel fundamental na gramática japonesa, 
            pois ajudam a indicar a<strong> função gramatical</strong> de cada palavra em uma frase 
            e a estabelecer as relações entre elas. Aqui estão alguns exemplos 
            adicionais sobre as partículas em japonês:
         </p> <br>
<!-- Particula 1-->


<div class="particula01">

         <p><span class="topico-particula"><span class="branco">1° Partícula (wa) - は - Exemplos de como usar a partícula (wa)</span></span></p>
    <div class="particula01-card">
         <p><strong>Marcando o Tópico:</strong></p> 
                  
        <p><span id="verde-fraco"><span id="vermelho">私</span><span id="verde"><strong><span id="verde">は</span></strong></span><span id="azul">学生です</span>
        </p>
       
        <p>(<span id="vermelho">Watashi</span> <span id="verde">wa</span><span id="azul"> gakusei <span id="laranja">desu</span>)</span></span>
            <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
            </div>

        </p>
        <!-- players -->
        <p>
            "<span id="vermelho">Eu</span> <span id="laranja">sou</span> um <span id="azul">estudante.</span>"
        </p>               
        
            <p>Neste exemplo, "は" (wa) é usado para marcar o tópico da frase, indicando que a declaração se aplica a "eu."</p>

         <p><spa id="vermelho">これ</spa><span id="verde"><strong>は </strong></span><span id="verde-fraco"><span id="azul">本</span><span id="laranja">です </span>
            (Kore <span id="verde">wa</span> hon <span id="laranja">desu</span>)</span>

            <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">
            </div>
           
            <p>"<span id="vermelho">Isto</span> <span id="laranja"> é</span> um <span id="azul">livro.</span>"</p>
        <br>
    </div>
    <!-- fim primeiro card -->
    <!-- Card 2 -->
    <div class="particula01-card">
         <p><strong>Contrastando com Outras Opções:</strong></p>
         <p><span id="verde-fraco">私<span id="vermelho">コーヒー</span><span id="verde"><strong>は</strong></span><span id="laranja">好き</span>ですが、<span id="azul">紅茶</span><span id="verde"><strong><span id="verde">は</span></strong></span><span id="roxo">嫌いです</span> 
            <br>(<span id="verde-fraco">わたし</span><span id="vermelho">Koohii</span> <span id="verde">wa</span> <span id="laranja">suki</span> desu ga, <span id="azul">koucha</span> <span id="verde"> wa</span> <span id="roxo">kirai desu</span>)</span>
            <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
            </div>
           
            
            <p>"<span id="verde-fraco">Eu</span><span id="laranja"> gosto</span> de <span id="vermelho">café,</span> mas<span id="roxo"> não gosto</span> de <span id="azul">chá.</span>"</p>
         <p>Aqui, "は" (wa) é usado para contrastar café e chá, destacando que a declaração sobre gostar se aplica ao café e não ao chá.</p>
         <br>
        </div>
        <!-- Fim card 2 -->
        <!-- card 3 -->
        <div class="particula01-card">
         <p><strong>Introduzindo um Tópico Específico:</strong></p>
         <p><span id="azul">この</span><span id="verde">映画</span><span id="verde"><strong>は</strong></span><span id="vermelho">面白い</span><span id="roxo">です</span> <br>
            (<span id="azul">Kono</span> <span id="verde">eiga</span> wa <span id="vermelho">omoshiroi</span> <span id="roxo">desu</span>)
            
                <div class="player-particulas">
                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">
                </div>

            <p>" A cópula "desu" deixa a frase afirmativa</p>
           <p><span id="azul">Este </span><span id="verde">filme</span> <span id="roxo">é</span> <span id="vermelho">interessante.</span>"</p>
           <p>A partícula "は" (wa) é usada para introduzir o tópico específico "este filme" e fazer uma declaração sobre ele.</p><br>
        </div>
        <!-- Fim card 3 -->
        <!-- card 4 -->

        <div class="particula01-card">
           <p><strong>Fazendo Perguntas Gerais:</strong></p>
           <p><span id="verde">今日</span><span id="verde"><strong>は</strong></span><span id="azul">何曜日</span><span id="roxo">ですか</span> <br>
            (<span id="verde">Kyou</span> wa nan <span id="azul">youbi</span> <span id="roxo">desu ka</span>)
        
                <div class="player-particulas">
                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                </div>
        <p>"A cópula "desuka" deixa a frase interrogativa</p>
            <p>"<span id="roxo">Que</span> <span id="azul">dia da semana</span> é <span id="verde">hoje?</span>"</p>
             <p>A partícula "は" (wa) é usada aqui para fazer uma pergunta sobre o dia da semana "hoje."</p><br>
         <p>
           <strong> Uso das partículas:</strong> As partículas são geralmente adicionadas após o 
            substantivo, pronome ou frase para modificar seu significado ou função.
             Elas não têm equivalentes exatos nas línguas ocidentais, o que pode 
             tornar sua compreensão e uso um desafio para os estudantes de japonês.
         </p> <br>
    </div>
         <!-- Particula 2-->
         
         <p><span class="topico-particula"><span class="branco">2° Partícula (ga) - が</span></span></p>

         <hr style="width: 80%; margin: 0 auto">

         <p>
            <span class="topico-particula"></span></p>
         <p>

<span class="branco">
            <strong>Funções gramaticais:</strong> As partículas em japonês podem ter várias funções gramaticais,
             incluindo marcar o sujeito, objeto, tópico, destino, direção, tempo, localização,
              entre outras. Cada partícula tem uma função específica e precisa ser usada corretamente
               para transmitir a mensagem desejada.
            </span></p><br>
        
         <p>
           
            <span class="topico-particula"><span class="branco">Exemplos de como usar a partícula (ga) - が</span></span>
        </p>
        <div class="particula01-card">
        <p>A partícula  <span class="topico-particula">"ga"</span> é uma partícula gramatical usada na língua japonesa para indicar a posse ou pertencimento de algo. Aqui estão quatro exemplos de como a partícula "ga" pode ser usada em frases japonesas:</p>
         

            <p><strong>Posse:</strong></p>
                    
           <p><span id="azul">私の本 </span><span id="verde"><strong>が</strong></span><span id="roxo">机</span>の<span id="vermelho">上</span><span id="laranja">にあります</span> <br>
            (<span id="azul">Watashi no hon </span><span id="verde">ga</span> <span id="roxo">tsukue</span> no <span id="vermelho">ue</span> ni <span id="laranja">arimasu.</span>) 
            
            <div class="player-particulas">
                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                </div>

             <p>"<span id="azul">Meu livro</span> <span id="laranja">está</span>  <span id="vermelho">em cima</span> da <span id="roxo">mesa</span>"</p>
             <p> Neste exemplo, "ga" é usado para indicar que o livro pertence a "mim" (私 - watashi).</p><br>
           </div>
           <div class="particula01-card">
             <p><strong>Sujeito da frase:</strong></p>
             <p>
                <span id="azul">犬</span><span id="verde">が</span><span id="roxo">庭</span>で<span id="vermelho">遊んでいます。</span> <br>
              (<span id="azul">Inu</span> <span id="verde">ga</span> <span id="roxo">niwa</span> de <span id="vermelho">asondeimasu.</span>)

              <div class="player-particulas">
                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                </div>

              <p><span id="azul"> O cachorro</span> <span id="vermelho">está brincando</span> no <span id="roxo">jardim.</span></p>
             <p>Aqui, "ga" é usado para indicar que o "cachorro" (犬 - inu) é o sujeito da frase.
            </p> <br>
            </div>
<!-- Particula 3-->
<hr style="width: 80%; margin: 0 auto">
            <p><span class="topico-particula"><span class="branco">3° Partícula (wo) - を</span></span></p>
            <p><span class="branco">A partícula <strong>"を"</strong> (wo ou o) em japonês é usada para marcar o objeto direto de uma ação em uma frase. Aqui estão dois exemplos de quando você deve usar a partícula "を":</p> <br>
            <p><span class="topico-particula">
                <span class="branco">Exemplos de como usar a partícula (wo) - を</span></span></span></p>

            <div class="particula01-card">
            <p><strong>Comer algo:</strong></p>
            <p><span id="azul">魚</span><span id="verde">を</span><span id="vermelho">食べます。</span><br> 
            (<span id="azul">Sakana</span> <span id="verde">wo</span> <span id="vermelho">tabemasu.</span>)

            <div class="player-particulas">
                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                </div>

            <p>Eu <span id="vermelho">como</span> <span id="azul">peixe.</span> - Na maioria das vezes a palavra watashi(eu) fica subentendido</p>
            </p> <br>
            <p>Neste exemplo, "魚" (sakana), que significa "peixe", é o objeto direto da ação "食べます" (tabemasu), que significa "comer". A partícula <strong>"を"</strong> marca o objeto direto, indicando o que está sendo comido.</p> <br>
             <p>               
            <strong>Combinando partículas:</strong> É comum combinar várias partículas em uma única frase para expressar 
            relações mais complexas. Por exemplo, a combinação das partículas に (ni) e へ (e) pode indicar
             movimento em direção a um destino específico.
         </p><br>
         </div>
         <div class="particula01-card">
        <p><strong>Ler algo:</strong></p>
        <p> <span id="azul">本</span><span id="verde">を</span><span id="laranja">読みます。</span><br>
         (<span id="azul">Hon</span> <span id="verde">wo</span> <span id="laranja">yomimasu.</span>) 

         <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
            </div>

        <p>Eu <span id="laranja">leio</span> um <span id="azul">livro.</span>
        </p>
       
         <p>
            <strong>Partículas de caso:</strong> Além das partículas mencionadas anteriormente, existem também
             partículas de caso em japonês, como が (ga) e の (no), que desempenham papéis semelhantes 
             às preposições em outras línguas.
         </p><br>
         </div>
<!-- Particula 4-->
<hr style="width: 80%; margin: 0 auto">
         <p><span class="topico-particula"><span class="branco">4° Partícula (ni) - に</span></span></p>
         <p><span class="branco">
         A partícula <strong>"に"</strong> (ni) em japonês é versátil e pode ter 
         várias funções em uma frase. Aqui estão dois exemplos de como usar a partícula <strong>"に":</strong>
        </span></p>
        <div class="particula01-card">
        <p>
            <span class="topico-particula">Exemplos de como usar a partícula (ni) - に</span>
        </p>
        <p><strong>Indicando um destino ou localização:</strong></p>
        <p>
            <span id="azul">学校</span><span id="verde">に</span><span id="laranja">行きます。</span> <br>
            ( <span id="azul">Gakkou</span> <span id="verde">ni</span> <span id="laranja">ikimasu.</span>) - A palavra watashi está subentendido 

            <div class="player-particulas">
                <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
                <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
                </div>

            <p>Eu <span id="laranja">vou</span> <span id="verde">para a</span> <span id="azul">escola.</span> <br>
            <p>Neste exemplo, <strong>"に"</strong> é usado para indicar o destino ou localização, que é a "escola" (学校 - gakkou).</p> <br>
        </p>
        </div>
        <div class="particula01-card">
        <p><strong>Indicando um ponto específico no tempo:</strong></p>
        <p><span id="azul">今日</span><span id="verde">に</span><span id="laranja">誕生日です。</span><br>
         (<span id="azul">Kyou</span><span id="verde"> ni</span> <span id="laranja">tanjoubi</span> <span id="roxo">desu.</span>)

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p><span id="azul">Hoje</span> <span id="roxo">é</span> o meu <span id="laranja">aniversário.</span></p>
        </p>
        <p>Aqui, <strong>"に"</strong> é usado para indicar um ponto específico no tempo, que é "hoje" (今日 - kyou).</p>
         <p>
            <strong>Uso contextual:</strong> O uso das partículas em japonês é altamente dependente do contexto 
            da frase e do significado pretendido. Portanto, é importante considerar o contexto
             geral, o tom da conversa e a intenção do falante ao escolher e usar as partículas apropriadas.
         </p><br>
        </div>
<!-- Particula 5-->
<hr style="width: 80%; margin: 0 auto">
         <p><span class="topico-particula"><span class="branco">5° Partícula (de) - で</span></span></p>
         <p><span class="branco">
            A partícula <strong>"で"</strong> (pronuncia-se "de") é frequentemente usada em japonês para indicar
             o local onde uma ação ocorre ou o meio pelo qual algo é feito. Aqui estão dois 
             exemplos de como usar a partícula <strong>"で"</strong>:
        </span></p>
        <div class="particula01-card">
        <p> <span class="topico-particula">Exemplos de como usar a partícula (de) - で</span></p>
        <p><strong>Local onde uma ação ocorre:</strong></p>
        <p>
        <span id="azul">私</span>は<span id="roxo">図書館</span><span id="verde">で</span><span id="laranja">勉強</span><span id="vermelho">します。</span>- (<span id="vermelho">します</span>) é uma forma do verbo "suru" (する), que significa "fazer" ou "realizar".

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p><span id="azul">Watashi</span> wa <span id="roxo">toshokan</span> <span id="verde">de</span> <span>id="laranja">benkyou</span> <span id="vermelho">shimasu.</span> <br>
        <span id="azul">Eu</span> <span id="laranja">estudo</span> <span id="verde">na</span> <span id="roxo">biblioteca.</span> <br>
        </p>
    

        <p>Neste exemplo, a partícula <strong>"で"</strong> é usada para indicar o local onde a ação de
             estudar ocorre, que é a biblioteca (図書館 - toshokan).</p>
            </div>

            <div class="particula01-card">
        <p><strong> Meio pelo qual algo é feito:</strong></p>
        <p>
        <span id="azul"> 私</span>は<span id="roxo">電車</span><span id="verde">で</span><span id="laranja">仕事</span>に<span id="vermelho">行きます。</span><br>
        <span id="azul">Watashi</span> wa <span id="roxo">densha</span> <span id="verde">de</span> <span id="laranja">shigoto</span> ni <span id="vermelho">ikimasu.</span>

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p><span id="azul">Eu</span> <span id="vermelho">vou</span> ao <span id="laranja">trabalho</span> <span id="verde">de</span> <span id="roxo">trem.</span> <br>
        </p>
        <p>
            Aqui, a partícula "で" é usada para indicar o meio de transporte (trem - 電車 - densha)
             pelo qual a ação de ir ao trabalho é realizada.
        </p>
    </div>
         <p> <br>
            <span class="branco">
            <strong>Estudo e prática:</strong> Devido à sua importância na gramática japonesa, é crucial estudar e 
            praticar o uso adequado das partículas. É recomendado o estudo sistemático das partículas, 
            bem como a exposição a exemplos autênticos de uso em diálogos e textos em japonês.
         </span></p><br>
<!-- Particula 6-->
<hr style="width: 80%; margin: 0 auto">
         <p><span class="topico-particula"><span class="branco">6° Partícula (he) - へ (pronuncia-se "e") </span></span></p>
         <p><span class="branco">
            A partícula "へ" (lê-se "e") em japonês é usada para indicar direção ou objetivo,
             similar à preposição "para" em português. Aqui estão dois exemplos de como usar a partícula "へ":
             A partícula (へ) é menos específica do que a partícula (に). へ (he): É usada para indicar direção geral ou destino de movimento.
         </span></p>
         <div class="particula01-card">
         <p> <span class="topico-particula">Exemplos de como usar a partícula (he) -  へ</span></p>

         <p><strong>Direção para um lugar:</strong></p>
         <p>
        <span id="azul">東京</span><span id="verde">へ</span><span id="laranja">行きます。</span> <br>
        <span id="azul">Tōkyō</span> <span id="verde">e</span> <span id="laranja">ikimasu.</span>

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p>Eu <span id="laranja">vou</span> <span id="verde">para</span> <span id="azul">Tóquio.</span></p>
         </p>
         <p>
            Neste exemplo, <strong>"へ"</strong> (e) indica a direção ou destino da ação de ir, que é Tóquio (東京 - Tōkyō). 
         </p> <br>
        </div>
        <div class="particula01-card">
         <p><strong>Objetivo ou propósito:</strong></p>
        <p><span id="azul">学校</span><span id="verde">へ</span><span id="laranja">勉強</span>しに<span id="roxo">行きます。</span> <br>
        <span id="azul">Gakkō</span> <span id="verde">e</span> <span id="laranja">benkyou</span> shi ni <span id="roxo">ikimasu.</span>

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p>Eu <span id="roxo">vou</span> <span id="verde">para a</span> <span id="azul">escola</span> para <span id="laranja">estudar.</span> <br>
        </p>
        <p>
        <span id="azul">"学校"</span> (Gakkō) significa "escola". É o local para onde a pessoa está indo. <br>
        <span id="verde"><strong>"へ"</strong></span> (e) é a partícula que indica a direção ou objetivo da ação, neste caso, "para" a escola. <br>
        <span id="laranja">"勉強"</span> (Benkyou) significa "estudar". <br>
        "し" (shi) é um conectivo que une as palavras <span id="laranja">"勉強"</span> (estudar) e <span id="roxo">"行きます"</span> (vou) e indica que a pessoa está indo para a escola com o propósito de estudar. <br>
        "に" (ni) é outra partícula que indica o propósito ou a finalidade da ação. <br>
        <span id="roxo">"行きます"</span> (Ikimasu) significa "vou" ou "irei". 
        </p><br>
    </div>
    <hr style="width: 80%; margin: 0 auto">
<!-- Particula 7-->
        <p><span class="topico-particula"><span class="branco">7° Partícula (to) - と </span></span></p>
        <p><span class="branco">
            A partícula "と" (lê-se "to") em japonês é versátil e pode ser usada em várias situações
             diferentes, mas uma das suas principais funções é indicar a companhia ou associação 
             entre elementos. Aqui estão dois exemplos de uso da partícula "と":
        </span></p>
        <div class="particula01-card">
        <p> <span class="topico-particula">Exemplos de como usar a partícula (he) -  へ</span></p>

        <p><strong>Indicando companhia:</strong></p>
        <p>
        <span id="azul">友達</span><span id="verde">と</span><span id="laranja">映画</span>を<span id="verde-fraco">見</span>に<span id="roxo">行きます。</span> <br>
        <span id="azul">Tomodachi</span> <span id="verde">to</span> <span id="laranja">eiga</span> o <span id="verde-fraco">mi</span> ni <span id="roxo">ikimasu.</span> 

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

       <p>Eu <span id="roxo">vou</span> <span id="verde-fraco">assistir</span> a um <span id="laranja">filme</span> com <span id="azul">amigos.</span> <br>
        </p> <br>
    </div>
    <div class="particula01-card">
        <p><strong>Indicando algo feito em conjunto:</strong></p>
        <p>
        <span id="azul">彼</span><span id="verde">と</span><sapan id="laranja">料理</sapan>を<span id="roxo">作りました。</span> <br>
        <span id="azul">Kare</span> to <span id="laranja">ryouri</span> o <span id="roxo">tsukurimashita.</span>
        
        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p>Eu <span id="roxo">fiz</span> <span id="laranja">comida</span> junto com <span id="azul">ele.</span> <br>
        </p> <br>
    </div>
<!--  Particula 8 から-->
        <p><span class="topico-particula"><span class="branco">8° Partícula (kara) - から </span></span></p>

        <p><span class="branco">
        A partícula "から" (kara) em japonês é frequentemente usada para indicar a origem 
        ou a causa de uma ação, entre outros usos. Aqui estão dois exemplos de como ela pode ser usada:
    </span></p>
    <div class="particula01-card">
        <p><strong>Origem:</strong></p>
        <p>
        <span id="azul">田中さん</span>は<span id="laranja">東京</span><span id="verde">から</span><span id="roxo">来ました。</span><br>
        (<span id="azul">Tanaka-san</span> wa <span id="laranja">Tokyo</span> <span id="verde">kara</span> <span id="roxo">kimashita.</span>)

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p><span id="azul">O Sr. Tanaka</span> <span id="roxo">veio</span> <span id="verde">de</span> <span id="laranja">Tóquio.</span> <br>
        </p> 
        <p>Neste exemplo, "から" indica a origem da ação de vir, ou seja, Tóquio.</p>
        <br>
    </div>
    <div class="particula01-card">
        <p><strong>Causa:</strong></p>
        <p>
        <span id="azul">寝不足</span><span id="verde">から、</span><span id="verde"></span><span id="vermelho">彼は</span><span id="roxo">疲れている。</span> <br>
        (<span id="azul">Nebusoku</span> <span id="verde">kara,</span> <span id="vermelho">kare wa</span> <span id="roxo">tsukareteiru.</span>)

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p><span id="verde">Devido à</span> <span id="azul">falta de sono,</span> <span id="vermelho">ele está</span> <span id="roxo">cansado.</span> <br>
        </p>
        <p>Aqui, "から" é usado para indicar a causa ou razão pela qual ele está cansado, que é a falta de sono.</p>
        <br>
    </div>
    <hr style="width: 80%; margin: 0 auto">
<!-- Particula 9  まで  -->
        <p><span class="topico-particula"><span class="branco">9° Partícula (made) - まで </span></span></p>
        <p><span class="branco">
        A partícula "まで" (made) em japonês é frequentemente usada para indicar um limite, alcance ou ponto final. 
        Aqui estão dois exemplos de como ela pode ser usada:
        </span></p>
        <div class="particula01-card">
        <p><strong> Limite de Tempo:</strong></p>
        <p>
        <span id="azul">仕事</span>は<span id="vermelho">午後５時</span><span id="verde">まで</span><span id="roxo">です。</span> <br>
        (<span id="azul">Shigoto</span> wa <span id="vermelho">gogo goji</span> <span id="verde">made</span> <span id="roxo">desu.</span>) 

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p><span id="azul">O trabalho</span> vai <span id="verde">até</span> às <span id="vermelho">17 horas.</span> <br>
        </p>
        <p>
        <span id="azul">"仕事"</span> (shigoto) significa "trabalho" ou "emprego".

        "は" (wa) é a partícula de tópico que marca o sujeito da frase, indicando que a informação a seguir se refere ao "trabalho". <br>

        <span id="vermelho">"午後"</span> (gogo) significa "tarde". Neste contexto, refere-se ao período da tarde. <br>

        <span id="vermelho">５時</span>(goji) significa "17 horas" ou "5 da tarde". Note que o sistema de contagem de horas no Japão é diferente do sistema de 12 horas usado em alguns outros países, e eles geralmente usam o sistema de 24 horas. <br>

        <span id="verde">"まで"</span> (made) é a partícula que indica um limite de tempo. Neste caso, está indicando que o limite de tempo para o trabalho é "até as 17 horas". <br>

        <span id="roxo">"です"</span> (desu) é uma partícula que indica uma declaração educada ou formal. <br>
        </p>
        <br>
    </div>
    <div class="particula01-card">
        <p><strong>Limite de Localização: </strong></p>
        <p>
        <span id="azul">学校</span><span id="verde">まで</span><span id="laranja">歩いて</span><span id="roxo">行く。</span>
        (<span id="azul">Gakkou</span> <span id="verde">made</span> <span id="laranja">aruite</span> <span id="roxo">iku.</span>)

        <div class="player-particulas">
            <img src="icons/plento.png" class="iconeplaylento-particulas" id="btn-verbos" alt="" onclick="playAudioLento04()">
            <img src="icons/playbutton.png" class="iconeplay-particulas" id="btn-verbos" alt="" onclick="playAudio04()">     
        </div>

        <p>Eu <span id="laranja">vou</span> <span id="roxo">a pé</span> <span id="verde">até a</span> <span id="azul">escola.</span>
        </p>
        

        <p>
            <strong>Dominar as partículas</strong> em japonês é essencial para construir frases gramaticalmente corretas
             e comunicar-se de maneira eficaz em japonês. À medida que você avança em seus estudos, é 
             recomendado consultar materiais de ensino de japonês, dicionários e praticar em situações de
              conversação para aprimorar seu domínio das partículas.
        </p>
    </div>
        </div>


        <div class="seta-para-cima seta-para-cima-index">
            <a href="">
            <img src="icons/icone-seta-para-cima.png" alt="">
            </a>
        </div> 

</main>

            <br><br><br>

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