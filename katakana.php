<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="stylesheet" href="css/styleindex.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style_logout.css.css">

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
            <h1 class="texto-banner frase-banner">Alfabeto Katakana</h1>      
        </div>
    </article>

    <aside class="cards-katakana ">
    <section class="card-katakana">
        <!--Card 1-->        
       <div class="card-body"></div>
       <h2>Alfabeto Katakana</h2>                  
                <div class="hiragana">
                <p class="a">ア</p>
                <p class="i">イ</p>
                <p class="u">ウ</p>
                <p class="e">エ</p>
                <p class="o">オ</p>
                </div>
                <div class="hiragana">
                    <p class="a ahira">a</p>
                    <p class="i ihira">i</p>
                    <p class="u uhira">u</p>
                    <p class="e ehira">e</p>
                    <p class="o ohira">o</p>
                    </div> 
                <h2>カタカナ</h2> 
    </section>
    </aside>
    <!--  -->
</main>
                <div class="container-conteudo">
                <div class="container-titulo">
                <h2>Alfabeto Katakana</h2>
                <h2>ア  イ ウ  エ  オ</h2>
                <h2>a &nbsp; i&nbsp; u&nbsp; e&nbsp; o</h2>
                </div>
             </div>
                
                <div class="container-katakana-p">
                    <p>O <strong>Katakana</strong> 
                        é um dos sistemas de escrita japoneses, ao lado do Hiragana e do Kanji. É composto por um conjunto de caracteres que representam sílabas, e é usado principalmente para escrever palavras estrangeiras, nomes próprios, termos técnicos e onomatopeias na língua japonesa.
                    </p><br>
                    <p>
                        Os caracteres do Katakana são mais angulares e simplificados em comparação com os caracteres do Hiragana, o que os torna facilmente distinguíveis. O <strong>Katakana</strong> é composto por 46 caracteres básicos, cada um representando uma sílaba, além de caracteres adicionais usados para representar sons estendidos ou estrangeiros. <mark>"palavras estrangeiras são sempre escritas com esse alfabeto"</mark>
                    </p>
                    <div class="card-topo-katakana">
                        <p class="katakana1">Por exemplo, se quisermos escrever "internet" em japonês usando Katakana, escreveríamos "<strong>インターネット</strong>" (pronunciado <strong>"intānetto"</strong>), onde cada caractere representa uma sílaba: イ (i), ン (n), タ (ta), ー (extensão), ネ (ne), ッ (sinal de pequeno tsu), ト (to).</p>

                        <p class="katakana1">Outro exemplo do uso desse alfabeto é na frase <strong>テクノロジー</strong>が進歩しています。 (Tecnologia está avançando.)
                            Nesta frase, cada caractere Katakana representa uma sílaba de palavras em japonês, e a frase significa "Tecnologia está avançando."                            
                            <strong>テクノロジー (Tekunorojī)</strong>: Esta parte da frase significa "tecnologia" em japonês. É uma palavra emprestada do inglês "technology", que foi adaptada para o alfabeto Katakana.</p>
                    </div><br>
                    <p>
                        Aqui estão os caracteres hiragana e sua pronúncia:
                    </p>
                </div>

                <img src="arquivos/tabela-katakana.jpg" class="img-tabela-kata" alt="">
            <button class="download-button">
                <a href="arquivos/tabela-hiragana.pdf" download target="_blank">Baixar tabela completa .pdf</a>
              </button>

                <div class="tab-hira">
                <table class="tabela-hiragana">
                    <tr>
                        <th colspan="5">Alfabeto do Hiragana principais letras</th>
                    </tr>
                    <tr>
                        <td>あ (a)</td>
                        <td>い (i)</td>
                        <td>う (u)</td>
                        <td>え (e) </td>
                        <td>お (o)</td>
                    </tr>
                    <tr>
                        <td>か (ka)</td>
                        <td>き (ki)</td>
                        <td>く (ku)</td>
                        <td>け (ke)</td>
                        <td>こ (ko)</td>
                    </tr>
                    <tr>
                        <td>さ (sa)</td>
                        <td>し (shi)</td>
                        <td>す (su) </td>
                        <td>せ (se)</td>
                        <td>そ (so)</td>
                    </tr>
                    <tr>
                        <td>た (ta) </td>
                        <td>ち (chi)</td>
                        <td>つ (tsu)</td>
                        <td>て (te)</td>
                        <td>と (to) 
                        </td>
                    </tr>
                    <tr>
                        <td>な (na)</td>
                        <td>に (ni)</td>
                        <td>ぬ (nu)</td>
                        <td>ね (ne)</td>
                        <td>の (no) </td>
                    </tr>
                    <tr>
                        <td>は (ha)</td>
                        <td>ひ (hi)</td>
                        <td>ふ (fu) </td>
                        <td>へ (he)</td>
                        <td>ほ (ho)</td>
                    </tr>
                    <tr>
                        <td>ま (ma)</td>
                        <td>み (mi)</td>
                        <td>む (mu)</td>
                        <td>め (me)</td>
                        <td>も (mo)</td>
                    </tr>
                    <tr>
                        <td>や (ya)</td>
                        <td> </td>
                        <td>ゆ (yu)</td>
                        <td> </td>
                        <td>よ (yo)</td>
                    </tr>
                    <tr>
                        <td>ら (ra)</td>
                        <td>り (ri)</td>
                        <td>る (ru)</td>
                        <td>れ (re)</td>
                        <td>ろ (ro) </td>
                    </tr>
                    <tr>
                        <td>わ (wa)</td>
                        <td> </td>
                        <td>を (wo)</td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>ん (n)</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </table>
            </div>
          
    <div class="section-hiragana">
        <p>
          <span id="verde-forte">  Aqui estão os caracters modificadores da tabela anterior que alteram a pronúncia de uma sílaba ou adicionam sons adicionais.</span>
As combinações de <strong> "ya" (や), "yu" (ゆ) e "yo" (よ)</strong> no japonês são conhecidas 
como <strong>"yōon" (拗音)</strong> e são usadas para criar sons adicionais na língua. Estas
 combinações são formadas ao adicionar pequenos caracteres "ya", "yu" ou "yo" às
  letras hiragana básicas correspondentes.
        </p><br>
                <p>
                    No <strong>hiragana</strong>, cada caractere é geralmente
                     pronunciado com a mesma duração, tornando 
                     o ritmo e a entonação do idioma bastante uniformes.
                </p><br>
                <p>
                    O hiragana é fundamental para a leitura 
                    e escrita em japonês, especialmente para 
                    iniciantes, e é uma parte importante do
                     processo de aprendizado do idioma.
                </p>
                <p><mark> Perceba que as letras  (や), (ゆ) e (よ) são escritas em tamanho menor após a letra que o antecede.</mark></p>
                <p>
                    Essas letras são usadas para 
                    modificar o som das vogais e criar novas 
                    combinações no hiragana. Aqui estão as devidas 
                     combinações:
                </p>
                <br>
                </div>
                <div class="tab-hira">
                <table class="tabela-hiragana">
                    <tr>
                      <th colspan="6">As combinações de "ya" (や), "yu" (ゆ) e "yo" (よ)</th>
                    </tr>
                    <tr>
                      <td>ぢゃ (dya)</td>
                      <td>ちゃ (cha)</td>
                      <td>じゃ (ja)</td>
                      <td>しゃ (sha)</td>
                      <td>ぎゃ (gya)</td>
                      <td>きゃ (kya)</td>
                    </tr>
                    <tr>
                      <td>ぢゅ (dyu)</td>
                      <td>ちゅ (chu)</td>
                      <td>じゅ (ju)</td>
                      <td>しゅ (shu)</td>
                      <td>ぎゅ (gyu)</td>
                      <td>きゅ (kyu)</td>
                    </tr>
                    <tr>
                      <td>ぢょ (dyu)</td>
                      <td>ちょ (cho)</td>
                      <td>じょ (jo)</td>
                      <td>しょ (sho)</td>
                      <td>ぎょ (gyo)</td>
                      <td>きょ (kyo)</td>
                    </tr>
              
                    <tr>
                      <td>りゃ (rya)</td>
                      <td>みゃ (mya)</td>
                      <td>ぴゃ (pya)</td>
                      <td>びゃ (bya)</td>
                      <td>ひゃ (hya)</td>
                      <td>にゃ (nya)</td>
                    </tr>
                    <tr>
                      <td>りゅ (ryu)</td>
                      <td>みゅ (myu)</td>
                      <td>ぴゅ (pyu)</td>
                      <td>びゅ (byu)</td>
                      <td>ひゅ (hyu)</td>
                      <td>にゅ (nyu)</td>
                    </tr>
                    <tr>
                      <td>りょ (ryo)</td>
                      <td>みょ (myo)</td>
                      <td>ぴょ (pyo)</td>
                      <td>びょ (byo)</td>
                      <td>ひょ (hyo)</td>
                      <td>にょ (nyo)</td>
                    </tr>
                  </table>                  
            </div>
            <!-- <button class="download-button">
                <a href="arquivos/combinacoes-Hiragana.pdf" download target="_blank">Baixar</a>
              </button> -->
            <br>
            <div class="section-hiragana">

                <p>
                    Essas combinações modificam o som da vogal "i" para "ya". 
                    O mesmo padrão se aplica a outras vogais também. Lembre-se 
                    de que o <strong>hiragana</strong> é usado principalmente para palavras
                     nativas japonesas e partículas gramaticais, enquanto palavras
                      estrangeiras frequentemente são escritas em katakana ou usando <strong>kanji.</strong>
                </p>
                    <br>
                <p>
                    Além das letras básicas do hiragana, existem também as modificações 
                    que podem ser aplicadas a certas letras para representar diferentes sons.
                     Essas modificações são chamadas de<strong> diacríticos.</strong> Aqui estão as 
                     modificações mais comuns no hiragana:
                </p>

                <p>
                    <strong>Dakuten ( <span class="dakuten">゛</span>):</strong> O dakuten é um sinal diacrítico que pode 
                    ser adicionado a certas consoantes para indicar uma
                     pronúncia sonora.
                </p>
                <p>
                    <strong>Handakuten ( ° ): </strong> O handakuten é ma bolinha utilizada para modificar alguns caracteres hiragana e katakana. Este sinal se parece com um pequeno círculo
                </p>
</div>

        <div class="hiragana-combinacoes">
                <table class="tabela-hiragana2 " id="">
                    <tr>
                      <th colspan="6" style="font-weight: 400;">
                        Sinais de modificação dakuten<span> ( ゛)（濁点</span> ou handakuten ( ° )（半濁点）
                      </th>
                    </tr>
                    <tr>
                      <td>ば (ba)</td>
                      <td>ぱ (pa)</td>
                      <td>だ (da)</td>
                      <td>ざ (za)</td>
                      <td>が (ga)</td>
                    </tr>
                    <tr>
                      <td>び (bi)</td>
                      <td>ぴ (pi)</td>
                      <td>ぢ (di)</td>
                      <td>じ (ji)</td>
                      <td>ぎ (gi)</td>
                    </tr>
                    <tr>
                      <td>ぶ (bu)</td>
                      <td>ぷ (pu)</td>
                      <td>づ (dzu)</td>
                      <td>ず (zu)</td>
                      <td>ぐ (gu)</td>
                    </tr>
            
                    <tr>
                      <td>べ (be)</td>
                      <td>ぺ (pe)</td>
                      <td>で (de)</td>
                      <td>ぜ (ze)</td>
                      <td>げ (ge)</td>
                    </tr>
                    <tr>
                      <td>ぼ (bo)</td>
                      <td>ぽ (po)</td>
                      <td>ど (do)</td>
                      <td>ぞ (zo)</td>
                      <td>ご (go)</td>
                    </tr>
                  </table>
        </div>

            <br>
<div class="section-hiragana">
                <p> Essas modificações permitem uma maior variedade 
                    de sons e sílabas no hiragana. É importante notar 
                    que o uso de diacríticos pode alterar a pronúncia básica da letra.
                </p>
    </div>

  
        

        <div class="botao-katakana">                 
                <a href="hiragana.php">ir para tabela katakana</a>
                <a href="kanji.php">ir para Kanji</a>
        </div>
        <div class="seta-para-cima">
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
    <style>

    </style>
    <script src="js/script.js"></script>
    <script src="js/scriptEvangelion.js"></script>

</body>
</html>