<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style_numeros.css">
    <!-- <link rel="stylesheet" href="css/styleindex.css"> -->
    <link rel="stylesheet" href="css/style.css">
 
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
    

    <main id="container-frases">
      <article>
        <div class="banner">
          <div>
            <figure>
              <img
                src="img/capaFull.jpg"
                id="banner-mobile"
                alt="Capa do site, garota com fone de ouvido"
              />
            </figure>
            <figure>
              <img
                src="img/capaBanner.png"
                id="banner-pc"
                alt="Capa do banner, garota com fone de ouvido"
              />
            </figure>
          </div>
          <h1 class="figura-banner">
            <figure>
              <img src="img/kanjijapan.png" alt="kanju que significa japão" />
            </figure>
          </h1>

          <h2 class="texto-banner">
            <a href="#"> 日本語 </a>
            <p>にほんご</p>
            <br />
          </h2>
          <!-- CARDS transparentes-->
          <h1 class="texto-banner frase-banner">Números em japonês</h1>
        </div>
      </article>
      <aside class="cards-katakana">
        <section class="card-katakana">
          <!--Card 1-->
          <div class="card-body">  
            <h2>Números em japonês</h2>
            <h2>日本語の数字</h2>
            <h2>(Nihongo no suuji)</h2>

          </div>
         
        </section>
      </aside>

    <div class="img-frases">
      <img src="img/numerosIcone.png" alt="">
    </div>

      <!-- VERBO Vir e Chegar kimasu -->

       <section class="secao-frases secao-03-numeros frases-head">
        <div class="secao-numero-index secao-frases frase-topo">

          <p>Usando Números Japoneses</p>
          <p>
            <span class="branco">No japonês, existem diferentes tipos de contagens que são usadas dependendo do tipo de objeto ou situação que está sendo contada.</span>
            <span>Usaremos o sistema nativo "genérico" que é mais padrão e servirá na maioria dos casos. Em estudos mais avançados veremos outras formas de numeração para contagem.</span>
          </p>
          <p>
          <strong><span class="branco">1. Sistema de Números Nativos (Japonês):</span></strong>
        </p>
          <p>
            <span class="branco">Este sistema é utilizado principalmente para contar objetos e itens do dia a dia. Aqui estão alguns exemplos:</span>
          </p>
          <p><span class="verde-lima">きます</span></p>
          <p>
            <span class="cinza"
              >Contagem de objetos:<br>
              一つのりんご (hitotsu no ringo) - "uma maçã"<br>
              二匹の猫 (nihiki no neko) - "dois gatos"<br>
              三冊の本 (sansatsu no hon) - "três livros"<br><br>
              Contagem de Idades:<br>
              七歳 (nanasai) - "sete anos de idade"<br>
              十五歳 (juugosai) - "quinze anos de idade"<br>
              二十歳 (hatachi) - "vinte anos de idade" (utiliza uma palavra especial)</span>
          </p><br>
          <p>
            <span>
              1 一 (ichi) - um <br>
              2 二 (ni) - dois <br>
              3 三 (san) - três <br>
              4 四 (shi ou yon) - quatro <br>
              5 五 (go) - cinco <br>
              6 六 (roku) - seis <br>
              7 七 (shichi ou nana) - sete <br>
              8 八 (hachi) - oito <br>
              9 九 (kyuu ou ku) - nove <br>
              10 十 (juu) - dez</span>
          </p>
        </div>
        <div class="secao-numero-index secao-frases frase-topo">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae, nisi, ipsum necessitatibus eveniet nobis repudiandae quod natus sit similique culpa, numquam soluta recusandae earum ipsa molestiae optio nostrum! Iure?</p>
        </div>

        </div>
      </section>
       <!-- Seção CARDS numeros index -->
 <h2 class="frase indexh2">Números em Japonês</h2>
 <h3 class="subtitle">日本語の数字 (Nihongo no suuji) </h3>

 <section class="secao-03-numeros secao-03-numeros-index">
     
     <div class="secao-numero-index">
        <!-- Play numeros -->
        <div class="player-verbos">
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playNumeroUm()"> 
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playNumeroUmLento()">
        </div>
        <!-- Fim Play numeros -->
         <p><span class="verde-fraco"><strong>1 一</span> (いち) - Ichi – <span class="verde-fraco">Um</strong></span>
        </p>
         
        <p><strong><span class="azul">"Hitori"</span></strong> (<span class="verde-fraco"><strong>一</strong></span>人) <span class="verde-lima">"uma pessoa"</span></p>
         <p><strong><span class="azul">"Ikkai"</span></strong> (<span class="verde-fraco"><strong>一</strong></span>回) <span class="verde-lima">"uma vez"</span></p>
         
         <p><strong><span class="azul">"Ichigatsu"</span></strong> (<span class="verde-fraco"><strong>一</strong></span>月) <span class="verde-lima">"janeiro"</span></p>
     </div>

     <div class="secao-numero-index">
        <!-- Play -->
        <div class="player-verbos">
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playNumeroDois()"> 
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playNumeroDoisLento()">
        </div>
        <!-- Fim play -->
         <p><span class="verde-fraco"><strong>2 二</span> (に) - Ni - <span class="verde-fraco">Dois</strong></span></p>
         <p><strong><span class="azul">"Futari"</span></strong> (<span class="verde-fraco"><strong>二</strong></span>人) <span class="verde-lima">"duas pessoas"</span></p>
         <p><strong><span class="azul">"Ni nen"</span></strong> (<span class="verde-fraco"><strong>二</strong></span>年) <span class="verde-lima">"dois anos"</span></p>
         
         <p><strong><span class="azul">"Futatsu"</span></strong> (<span class="verde-fraco"><strong>二</strong></span>つ) <span class="verde-lima">"dois (unidades)"</span></p>
     </div>

     <div class="secao-numero-index">
        <!-- Play numeros -->
        <div class="player-verbos">
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playNumeroTres()"> 
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playNumeroTresLento()">
        </div>
        <!-- Fim play  numeros -->
         <p><span class="verde-fraco"><strong>3 三</span> (さん) - San - <span class="verde-fraco">Três</strong></span></p>
         <p><strong><span class="azul">"Sannin"</span></strong> (<span class="verde-fraco"><strong>三</strong></span>人) <span class="verde-lima">"três pessoas"</span></p>
         <p><strong><span class="azul">"Mikka"</span></strong> (<span class="verde-fraco"><strong>三</strong></span>日) <span class="verde-lima">"terceiro dia" ou "três dias"</span></p>
         
         <p><strong><span class="azul">"Mittsu"</span></strong> (<span class="verde-fraco"><strong>三</strong></span>つ) <span class="verde-lima">"três" (unidades</span>)</p>
     </div>

     <div class="secao-numero-index">
        <!-- Play numeros -->
        <div class="player-verbos">
            <img src="icons/plento.png" class="iconeplaylento-verbos" id="btn-verbos" alt="" onclick="playNumeroQuatro()"> 
            <img src="icons/playbutton.png" class="iconeplay" id="btn-verbos" alt="" onclick="playNumeroQuatroLento()">
        </div>
        <!-- Fim play numeros -->
         <p><span class="verde-fraco"><strong>4 四</span> (し) - Shi - <span class="verde-fraco">Quatro</strong></span></p>
         <p><strong><span class="azul">"Yonin"</span></strong> (<span class="verde-fraco"><strong>四</strong></span>人) <span class="verde-lima">"quatro pessoas"</span></p>    
         <p><strong><span class="azul">"Shigatsu"</span></strong> (<span class="verde-fraco"><strong>四</strong></span>月) <span class="verde-lima">"abril" (mês)</span></p>
        
         <p><strong><span class="azul">"Yonkai"</span></strong> (<span class="verde-fraco"><strong>四</strong></span>回) <span class="verde-lima">"quatro vezes"</span></p>
     </div>
 </section>
      <!-- Fim cards verbo Kimasu -->

      

  <!-- Verbo Fazer Tsukurimasu -->
    <section
    class="secao-frases secao-03-numeros "
    
  >
    <div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases">
      <!-- Fim Play numeros -->
      <p>2 Tsukurimasu (作ります) / Shimasu (します)</p>
      <p>
        <span class="branco"
          >Verbo Fazer</span
        ></span>
      </p>
      <p>
        <strong><span class="branco"></span></strong>
      </p>
      <p><span class="verde-lima">つくります ou します</span></p>
      <p>
        <span class="cinza"
          ><strong>Tsukurimasu</strong> é usado quando você está falando
          sobre fazer ou criar algo, como fabricar um objeto.</span
        >
      </p>
      <p>
        <span class="cinza"
          ><strong>Shimasu</strong> é usado com uma grande variedade de
          substantivos para indicar que você está fazendo ou realizando uma
          determinada atividade.</span
        >
      </p>
      <div  class="seta-baixo-gif">
        <p><span class="cinza">(...)</span></p>
      <img src="icons/icone-baixo-m.png" alt="">
    </div>
    </div>
  </section>

  <!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas" class="esconderFrases">
  <section class="secao-pagina-frases">
    <div class="secao-numero-index secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="日本語の料理を作ります
          Eu faço comida japonesa."
          onclick="playLento09()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="にほんごのりょうりをつくります
          Nihongo no ryouri o tsukurimasu"
          onclick="play09()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >日本語の料理を<span id="laranja">作ります</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">faço</span> comida japonesa.</span
          ></strong
        >
      </p>
      <p><span class="rosa">にほんごのりょうりを<span id="laranja">つくります</span></span></p>

      <p>
        <span class="verde-lima">Nihongo no ryouri o <span id="laranja">tsukurimasu</span></span>
      </p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="宿題をします
          Eu faço o dever de casa."
          onclick="playLento10()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="しゅくだいをします
          Shukudai o shimasu"
          onclick="play10()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul">宿題を<span id="laranja">します</span></span>
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">faço</span> o dever de casa.</span
          ></strong
        >
      </p>
      <p><span class="rosa">しゅくだいを<span id="laranja">します</span></span></p>

      <p><span class="verde-lima">Shukudai o <span id="laranja">shimasu</span></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="家具を作ります。
          Eu faço móveis."
          onclick="playLento11()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="かぐをつくります
          Kagu o tsukurimasu"
          onclick="play11()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul">家具を<span id="laranja">作ります</span></span>
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">faço</span> móveis.</span
          ></strong
        >
      </p>
      <p><span class="rosa">かぐを<span id="laranja">つくります</span></span></p>

      <p><span class="verde-lima">Kagu o <span id="laranja">tsukurimasu</span></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="詩を作ります
          Eu escrevo poesia."
          onclick="playLento12()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="しをつくります
          Shi o tsukurimasu"
          onclick="play12()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul">詩を<span id="laranja">作ります </span></span>
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">escrevo</span> poesia.</span
          ></strong
        >
      </p>
      <p><span class="rosa">しを<span id="laranja">つくります</span></span></p>

      <p><span class="verde-lima">Shi o <span id="laranja">tsukurimasu</span></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="レポートを作ります
          Eu faço um relatório."
          onclick="playLento13()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="レポートをつくります
          repooto o tsukurimasu"
          onclick="play13()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >レポートを<span id="laranja">作ります</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">faço</span> um relatório.</span
          ></strong
        >
      </p>
      <p><span class="rosa">レポートを<span id="laranja">つくります</span></span></p>

      <p><span class="verde-lima">Repooto o <span id="laranja">tsukurimasu </span></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt=""
          onclick="playLento14()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt=""
          onclick="play14()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul">スポーツを<span id="laranja">します</span></span>
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">pratico</span> esportes.</span
          ></strong
        >
      </p>
      <p><span class="rosa">スポーツを<span id="laranja">します</span></span></p>

      <p><span class="verde-lima">Supootsu o <span id="laranja">shimasu.</span></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="音楽を作ります
          Eu faço música."
          onclick="playLento15()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="おんがくをつくります
          Ongaku o tsukurimasu"
          onclick="play15()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul">音楽を<span id="laranja">作ります</span></span>
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">faço</span> música.</span
          ></strong
        >
      </p>
      <p><span class="rosa">おんがくを<span id="laranja">つくります</span></span></p>

      <p><span class="verde-lima">Ongaku o <span id="laranja">tsukurimasu</span></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt=""
          onclick="playLento16()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt=""
          onclick="play16()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >私はおんがくを<span id="verde"><strong>ひきます</strong></span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco">Eu <span id="verde">toco</span> música.</span></strong>
      </p>
      <p><span class="rosa">わたしはおんがくを<strong>ひきます</strong></span></p>

      <p><span class="verde-lima">Watashi wa ongaku o <strong>hikimasu</strong></span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="私は日本語を勉強します
          Eu estudo japonês."
          onclick="playLento17()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="わたしはにほんごをべんきょうします
          Watashi wa nihongo o benkyou shimasu."
          onclick="play17()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >私は日本語を勉強<span id="laranja">します</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">estudo</span> japonês.</span
          ></strong
        >
      </p>
      <p><span class="rosa">わたしはにほんごを<span id="laranja">べんきょうします</span></span></p>
      <p>
        <span class="verde-lima">Watashi wa nihongo o <span id="laranja">benkyou shimasu.</span></span>
      </p>
      <p><span style="font-size: 13px;color: #797979;"><span id="laranja">べんきょう</span> + <span id="laranja">します</span> = "fazer o estudo"</span></p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="私は毎日日本語を勉強していますします
          Eu estudo japonês todos os dias."
          onclick="playLento18()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="わたしはまいにちにほんごをべんきょうしています
          Watashi wa mainichi nihongo o benkyou shiteimasu."
          onclick="play18()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >私は毎日日本語を勉強しています<span id="laranja"
            >します</span
          ></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">estudo</span> japonês todos os
            dias.</span
          ></strong
        >
      </p>
      <p>
        <span class="rosa"
          >わたしはまいにちにほんごを<span id="laranja">べんきょうしています</span></span
        >
      </p>

      <p>
        <span class="verde-lima"
          >Watashi wa mainichi nihongo o <span id="laranja">benkyou shiteimasu.</span></span
        >
      </p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="私は毎週料理をします
          Eu cozinho toda as semanas."
          onclick="playLento19()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="
          わたしはまいしゅうりょうりをします
          Watashi wa maishuu ryouri o shimasu."
          onclick="play19()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >私は毎週<span id="laranja">料理をします</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eu <span id="laranja">cozinho</span> toda as semanas.</span
          ></strong
        >
      </p>
      <p><span class="rosa">わたしはまいしゅう<span id="laranja">りょうりをします</span></span></p>

      <p>
        <span class="verde-lima">Watashi wa maishuu <span id="laranja">ryouri o shimasu.</span></span>
      </p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt=""
          onclick="playLento20()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt=""
          onclick="play20()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >私たちは週末にスポーツを<span id="laranja">します</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Nós <span id="laranja">praticamos</span> esportes nos fins de
            semana.</span
          ></strong
        >
      </p>
      <p>
        <span class="rosa">わたしたちはしゅうまつに<span id="laranja">すぽーつをします</span></span>
      </p>

      <p>
        <span class="verde-lima"
          >Watashitachi wa shuumatsu ni supootsu o <span id="laranja">shimasu.</span></span
        >
      </p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="彼らはお菓子を作ります
          Eles fazem doces."
          onclick="playLento21()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="かれらはおかしをつくります
          Karera wa okashi o tsukurimasu."
          onclick="play21()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >彼らはお菓子を<span id="laranja">作ります</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Eles <span id="laranja">fazem</span> doces.</span
          ></strong
        >
      </p>
      <p><span class="rosa">かれらはおかしを<span id="laranja">つくります</span></span></p>

      <p>
        <span class="verde-lima"> Karera wa okashi o <span id="laranja">tsukurimasu.</sapn></span>
      </p>
    </div>

    <div class="secao-numero-index  secao-verbo-fazer">
      <!-- Play frases -->
      <div class="player-verbos">
        <img
          src="icons/plento.png"
          class="iconeplaylento-verbos"
          id="btn-verbos"
          alt="私たちはプロジェクトを作ります
          Nós criamos um projeto."
          onclick="playLento22()"
        />
        <img
          src="icons/playbutton.png"
          class="iconeplay"
          id="btn-verbos"
          alt="わたしたちはプロジェクトをつくります
          Watashitachi wa purojekuto o tsukurimasu."
          onclick="play22()"
        />
      </div>
      <!-- Fim Play Frases -->
      <p>
        <span class="azul"
          >私たちはプロジェクトを<span id="laranja">作ります</span></span
        >
      </p>
      <p>
        <strong
          ><span class="verde-fraco"
            >Nós <span id="laranja">criamos</span> um projeto.</span
          ></strong
        >
      </p>
      <p>
        <span class="rosa">わたしたちはプロジェクトを<span id="laranja">つくります</span></span>
      </p>

      <p>
        <span class="verde-lima">
          Watashitachi wa purojekuto o <span id="laranja">tsukurimasu.</span></span
        >
      </p>
    </div>
  </div>

 <!-- fim verbo Fazer Tsukurimasy -->

  <!-- Verbo Comer Taberu tres-->
  <section class="secao-frases secao-03-numeros ">
  <div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases03">
    <!-- Fim Play numeros -->
    <p>3 Taberu (食べる)</p>
    <p>
      <span class="branco"
        >Verbo Comer
        <strong></strong><span id="laranja"></span
      ></span>
    </p>
    <p>
      <strong><span class="branco"></span></strong>
    </p>
    <p><span class="verde-lima">たべる</span></p>
    <p>
      <span class="cinza"
        >O verbo <strong>Taberu</strong> "食べる" é regular e segue o padrão de conjugação dos verbos do grupo I (Ichidan). Isso significa que sua forma de dicionário (forma básica) é "食べる" (taberu).</span
      >
    </p>

    <div  class="seta-baixo-gif">
      <p><span class="cinza">(...)</span></p>
    <img src="icons/icone-baixo-m.png" alt="">
    </div>
  </div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas03" class="esconderFrases">
<section class="secao-pagina-frases">
  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="私は寿司を食べます.
        Eu como sushi."
        onclick="playLento23()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="わたしはすしをたべます.
        Watashi wa sushi o tabemasu."
        onclick="play23()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        > 私は寿司を<span id="laranja">食べます.</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu <span id="laranja">como</span> sushi.</span
        ></strong
      >
    </p>
    <p><span class="rosa">わたしはすしを<span id="laranja">たべます.</span></span></p>

    <p>
      <span class="verde-lima">Watashi wa sushi o <span id="laranja">tabemasu.</span></span>
    </p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="寿司が好きですから、よく食べます.
        Porque eu gosto de sushi, eu como frequentemente."
        onclick="playLento24()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="すしがすきですから、よくたべます.
        Sushi ga suki desu kara, yoku tabemasu."
        onclick="play24()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">寿司が好きですから、<span class="roxo">よく</span><span id="laranja">食べます.</span></span>
    </p>
    <p>
      <strong  
        ><span class="verde-fraco"
          >Porque eu gosto de sushi, eu <span id="laranja">como</span> <span class="roxo">frequentemente.</span></span
        ></strong
      >
    </p>
    <p><span class="rosa">すしがすきですから、<span class="roxo">よく</span><span id="laranja">たべます.</span></span></p>

    <p><span class="verde-lima">Sushi ga suki desu kara, <span class="roxo">yoku </span><span id="laranja">tabemasu.</span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="ピザを食べたいです.
        Eu quero comer pizza."
        onclick="playLento25()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="ぴざをたべたいです.
        Piza wo tabetai desu."
        onclick="play25()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p> 
      <span class="azul">ピザを<span id="laranja">食べたいです.</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu<span id="laranja"> quero comer</span> <span class="azul">pizza.</span></span
        ></strong
      >
    </p>
    <p><span class="rosa"><span class="azul">ぴざ</span><span id="laranja">をたべたいです.</span></span></p>

    <p><span class="verde-lima"><span class="azul">Piza</span> wo <span id="laranja">tabetai desu.</span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="私は毎日リンゴを食べます .
        Eu como maçãs todos os dias."
        onclick="playLento26()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="わたしはまいにちりんごをたべます.
        Wtashi wa mainichi ringo o tabemasu."
        onclick="play26()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">私は毎日リンゴを<span id="laranja">食べます .</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu <span id="laranja">como</span> maçãs todos os dias.</span
        ></strong
      >
    </p>
    <p><span class="rosa">わたしはまいにちりんごを<span id="laranja">たべます.</span></span></p>

    <p><span class="verde-lima">Wtashi wa mainichi ringo o <span id="laranja">tabemasu.</span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼は野菜を食べません.
        Ele não come vegetais."
        onclick="playLento27()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かれはやさいをたべません.
        Kare wa yasai o tabemasen."
        onclick="play27()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >彼は野菜を<span id="laranja">食べません.</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ele  <span id="laranja">não come</span> vegetais.</span
        ></strong
      >
    </p>
    <p><span class="rosa">かれはやさいを<span id="laranja">たべません.</span></span></p>

    <p><span class="verde-lima">Kare wa yasai o <span id="laranja">tabemasen. </span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="昨日、ハンバーガーを食べました

        Ontem eu comi hamburger."
        onclick="playLento28()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="きのう、ハンバーガーを食べました.
        Kinou, hanbaagaa o tabemashita."
        onclick="play28()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">昨日、ハンバーガーを<span id="laranja">食べました</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ontem eu <span id="laranja">comi</span> hamburger.</span
        ></strong
      >
    </p>
    <p><span class="rosa">きのう、ハンバーガーを<span id="laranja">食べました.</span></span></p>

    <p><span class="verde-lima">Kinou, hanbaagaa o <span id="laranja">tabemashita.</span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="明日、海鮮を食べたいです.
        Eu quero comer frutos do mar amanhã."
        onclick="playLento29()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="あした、かいせんをたべたいです.
        Ashita, kaisen o tabetai desu."
        onclick="play29()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">明日、海鮮を<span id="laranja">食べたいです.</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu <span id="laranja">quero comer</span> frutos do mar amanhã.</span
        ></strong
      >
    </p>
    <p><span class="rosa">あした、かいせんを<span id="laranja">たべたいです.</span></span></p>
    <p><span class="verde-lima">Ashita,  kaisen o <span id="laranja">tabetai desu.</span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="朝食を食べてください.
        Por favor, coma o café da manhã."
        onclick="playLento30()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="あさごはんをたべてください.
        Choushoku o tabete kudasai."
        onclick="play30()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >朝食を<span id="verde"><span id="laranja">食べて</span>ください</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Por favor, <span id="laranja">coma</span> o café da manhã.</span
        ></strong
      >
    </p>
    <p><span class="rosa">あさごはんをたべてください.</span></p>
    <p><span class="verde-lima">Asagohan o <span id="laranja">tabete</span> kudasai.</span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="寿司を食べたことがありますか？

        Você já comeu sushi."
        onclick="playLento31()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="すしをたべたことがありますか？

        sushi o tabeta koto ga arimasu ka?"
        onclick="play31()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >寿司を<span id="laranja">食べた<span class="azul"
          >ことがありますか？</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Você já  <span id="laranja">comeu</span> sushi.</span
        ></strong
      >
    </p>
    <p><span class="rosa">すしを<span id="laranja">たべた</span>ことがありますか？</span></p>
    <p>
      <span class="verde-lima"
        >sushi o <span id="laranja">tabeta</span> koto ga arimasu ka?</span>
    </p>
    <p><span style="font-size: 13px;color: #797979;">"ことがありますか" (koto ga arimasu ka) é uma expressão usada para perguntar se alguém já teve uma experiência.</span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="貴方の国でどんな食べ物をたべますか？
        Que tipo de comida você come em seu país?"
        onclick="playLento32()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="あなたのくにでどんなたべものをたべますか？
        Anata no kuni de donna tabemono o tabemasu ka."
        onclick="play32()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >貴方の国でどんな食べ物を<span id="laranja">たべますか？</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Que tipo de comida você <span id="laranja">come</span> em seu país?</span
        ></strong
      >
    </p>
    <p>
      <span class="rosa">あなたのくにでどんなたべものを<span id="laranja">たべますか？</span></span>
    </p>

    <p>
      <span class="verde-lima">Anata no kuni de donna tabemono o <span id="laranja">tabemasu ka.</span></span
      >
    </p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="ケーキを食べたいです
        Eu quero comer bolo."
        onclick="playLento33()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="ケーキをたべたいです.
        Keeki o tabetai desu."
        onclick="play33()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >ケーキを<span id="laranja">食べたいです</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu quero <span id="laranja">comer</span> bolo.</span
        ></strong
      >
    </p>
    <p><span class="rosa">ケーキを<span id="laranja">たべたいです</span></span></p>

    <p>
      <span class="verde-lima">Keeki o <span id="laranja">tabetai desu.</span></span>
    </p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="イタリア料理を食べるのが好きです.
        Eu gosto de comer comida italiana."
        onclick="playLento34()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="イタリアりょうりをたべるのがすきです.
        Itarian ryouri wo taberu no ga suki desu."
        onclick="play34()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p> 
      <span class="azul"
        >イタリア料理を<span id="laranja">食べる</span>のが好きです</span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu gosto de <span id="laranja">comer</span> comida italiana.</span
        ></strong
      >
    </p>
    <p>
      <span class="rosa">イタリアりょうりを<span id="laranja">たべる</span>のがすきです</span>
    </p>

    <p>
      <span class="verde-lima"
        >Itarian ryouri wo taberu no ga suki desu.</span
      >
    </p>
  </div>

  </section>
</div>
</main>
<!-- Verbo quatro Miru -->
  <section  class="secao-frases secao-03-numeros ">
  <div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases04">
    <!-- Fim Play numeros -->
    <!-- verbo 4 -->
    <p>4 Miru (見る)</p>
    <p>
      <span class="branco"
        >Verbo Ver<span id="laranja"></span
      ></span>
    </p>
    <p>
      <strong><span class="branco"></span></strong>
    </p>
    <p><span class="verde-lima">みる</span></p>
    <p>
      <span class="cinza"
        ><strong>"見る" (miru)</strong> pode ser usado em uma variedade de contextos e situações. Ele pode significar "ver" no sentido literal, como observar visualmente algo com os olhos, mas também pode ser usado para "assistir" algo.</span
      >
    </p>
  
    <div  class="seta-baixo-gif">
      <p><span class="cinza">(...)</span></p>
    <img src="icons/icone-baixo-m.png" alt="">
  </div>
  </div>
</section>
<!-- di para esconder com CSS -->
<!-- SECAO SERA MOSTRADA   -->
<div  id="frasesEscondidas04" class="esconderFrases">
<section class="secao-pagina-frases">

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼女は映画を見ました.
        Ela assistiu o filme."
        onclick="playLento35()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かのじょはえいがをみました.
        Kanojo wa eiga o mimashita."
        onclick="play35()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >彼女は映画を<span id="laranja">見ました</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ela <span id="laranja">assistiu</span> o filme.</span
        ></strong
      >
    </p>
    <p><span class="rosa">かのじょはえいがを<span id="laranja">みました</span></span></p>

    <p>
      <span class="verde-lima"> Kanojo wa eiga o <span id="laranja">mimashita.</span></span>
    </p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼は遠くまで見えます.
        Ele pode ver longe."
        onclick="playLento36()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かれはとおくまでみえます.
        Kare wa tooku made miemasu."
        onclick="play36()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">彼は遠くまで<span id="laranja">見えます</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ele pode <span id="laranja">ver</span> longe.</span
        ></strong
      >
    </p>
    <p><span class="rosa">かれはとおくまで<span id="laranja">みえます</span></span></p>

    <p><span class="verde-lima">Kare wa tooku made <span id="laranja">miemasu.</span></span></p>
    <p style="font-size: 13px;">"miemasu" é a capacidade de ver</p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <!-- Botões play trocdos -->
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="あなたは何を見ていますか？
        O que você está vendo?"
        onclick="playLento37()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="あなたはなにをみていますか？
        Anata wa nani o miteimasu ka?"
        onclick="play37()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">あなたは何を<span id="laranja">見ていますか？</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >O que você está <span id="laranja">vendo?</span></span
        ></strong
      >
    </p>
    <p><span class="rosa">あなたはなにを<span id="laranja">みていますか？</span></span></p>

    <p><span class="verde-lima">Anata wa nani o <span id="laranja">miteimasu ka?</span></span></p>
    <p style="font-size: 13px;"> "miteimasu" forma contínua do verbo ver</p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼は暗闇の中で何も見えません.
        Ele não pode ver na escuridão."
        onclick="playLento38()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かれはくらやみのなかでなにもみえません.
        Kare wa kurayami no naka de nani mo miemasen."
        onclick="play38()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">彼は暗闇の中で何も<span id="laranja">見えません</span></span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ele <span id="laranja">não pode ver</span> na escuridão.</span
        ></strong
      >
    </p>
    <p><span class="rosa">かれはくらやみのなかでなにも<span id="laranja">みえません</span></span></p>

    <p><span class="verde-lima">Kare wa kurayami no naka de nani mo <span id="laranja">miemasen.</span></span></p>
    <p style="font-size: 13px;"> "miemasen" é a forma negativa do verbo "ver".</p>
  </div>
  

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <!-- plays trocados -->
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼女は自然を 見るのが好きです.
        Ela gosta de ver a natureza."
        onclick="playLento39()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かのじょはしぜんをみるのがすきです.
        Kanojo wa shizen o miru no ga suki desu."
        onclick="play39()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>      
      <span class="azul"
        >彼女は自然を<span id="laranja"> 見る</span>のが好きです</span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ela gosta de <span id="laranja">ver</span> a natureza.</span
        ></strong
      >
    </p>
    <p><span class="rosa">かのじょはしぜんを<span id="laranja">みる</span>のがすきです</span></p>

    <p><span class="verde-lima">Kanojo wa shizen o <span id="laranja">miru</span> no ga suki desu. </span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <!-- audios trocasdos no play -->
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼は見るだけで分かります.
        Ele entende só de olhar"
        onclick="playLento40()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かれはみるだけでわかります

        Kare wa miru dake de wakarimasu."
        onclick="play40()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"> 彼は<span id="laranja">見る</span>だけで分かります</span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ele entende só de <span id="laranja">olhar</span></span></span
        ></strong
      >
    </p>
    <p><span class="rosa">かれは<span id="laranja">みる</span>だけでわかります</span></p>

    <p><span class="verde-lima">Kare wa <span id="laranja">miru</span> dake de wakarimasu.</span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="先生の説明をよく見てください.
        Por favor, preste atenção à explicação do professor."
        onclick="playLento41()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="せんせいのせつめいをよくみてください.
        Sensei no setsumei o yoku mite kudasai."
        onclick="play41()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul">先生の説明を<span id="laranja">よく見て</span>ください</span>
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Por favor, <span id="laranja">preste atenção</span> à explicação do professor.</span
        ></strong
      >
    </p>
    <p><span class="rosa">せんせいのせつめいを<span id="laranja">よくみて</span>ください</span></p>

    <p><span class="verde-lima">Sensei no setsumei o <span id="laranja">yoku mite</span> kudasai.</span></p>
    <p style="font-size: 13px; color:#797979">先生の説明 = aula do professor</p>
    <p style="font-size: 13px; color:#797979">よく見て = prestar atenção</p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <!-- plays de audio trocados -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="私はテレビを見ます.
        Eu assisto televisão."
        onclick="playLento42()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="わたしはてれびをみます.
        Watashi wa terebi o mimasu."
        onclick="play42()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >私はテレビを<span id="verde">見ます</span></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu <span id="laranja">assisto</span> televisão.</span
        ></strong
      >
    </p>
    <p><span class="rosa">わたしはてれびを<span id="laranja">みます</span></span></p>

    <p><span class="verde-lima">Watashi wa terebi o <span id="laranja">mimasu.</span></span></p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="私は昨日友達と映画を見ました.
        Ontem eu assisti a um filme com meus amigos."
        onclick="playLento43()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="わたしはきのうともだちとえいがをみました.
        Watashi wa kinou tomodachi to eiga o mimashita."
        onclick="play43()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >私は昨日友達と映画を<span id="laranja"
          >見ました</span
        ></span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ontem eu <span id="laranja">assisti</span> a um filme com meus amigos.</span
        ></strong
      >
    </p>
    <p>
      <span class="rosa"
        >わたしはきのうともだちとえいがを<span id="laranja">みました</span></span
      >
    </p>

    <p>
      <span class="verde-lima"
        >Watashi wa kinou tomodachi to eiga o <span id="laranja">mimashita.</span></span
      >
    </p>
    <p style="font-size: 13px;color:#797979"> "mimashita" é a forma passada do verbo "miru".</p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="彼女は花火を見て驚きました.
        Ela ficou surpresa ao ver os fogos de artifício."
        onclick="playLento44()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="かのじょははなびをみておどろきました.
        Kanojo wa hanabi o mite odorokimashita."
        onclick="play44()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >彼女は花火を<span id="laranja">見て</span>驚きました</span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Ela ficou surpresa ao <span id="laranja">ver</span> os fogos de artifício.</span
        ></strong
      >
    </p>
    <p><span class="rosa">かのじょははなびを<span id="laranja">みて</span>おどろきました</span></p>

    <p>
      <span class="verde-lima">Kanojo wa hanabi o <span id="laranja">mite</span> odorokimashita.</span>
    </p>
  </div>

  <div class="secao-numero-index secao-verbo-fazer">
    <!-- Play frases -->
    <div class="player-verbos">
      <img
        src="icons/plento.png"
        class="iconeplaylento-verbos"
        id="btn-verbos"
        alt="あの映画は何度も 見たことがあります.
        Eu vi aquele filme muitas vezes."
        onclick="playLento45()"
      />
      <img
        src="icons/playbutton.png"
        class="iconeplay"
        id="btn-verbos"
        alt="あのえいがはなんどもみたことがあります.
        Ano eiga wa nandomo mita koto ga arimasu."
        onclick="play45()"
      />
    </div>
    <!-- Fim Play Frases -->
    <p>
      <span class="azul"
        >あの映画は何度も<span id="laranja"> 見た</span>ことがあります</span
      >
    </p>
    <p>
      <strong
        ><span class="verde-fraco"
          >Eu <span id="laranja">vi</span> aquele filme muitas vezes.</span
        ></strong
      >
    </p>
    <p>
      <span class="rosa">あのえいがはなんども<span id="laranja">みた</span>ことがあります</span>
    </p>

    <p>
      <span class="verde-lima"
        >Ano eiga wa nandomo mita koto ga arimasu.</span
      >
    </p>
  </div>

  </div>
  </section>
</div>

<!-- Verbo cinco hanasu-->
<section class="secao-frases secao-03-numeros ">
<div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases05">
  <!-- Fim Play numeros -->
  <p>5 Hanasu (話す)</p>
  <p>
    <span class="branco"
      ><strong>Verbo Falar</strong>
      </span>
  </p>
  <p>
    <strong><span class="branco"></span></strong>
  </p>
  <p><span class="verde-lima">はなす</span></p>
  <p>
    <span class="cinza"
      ><strong>Hanasu</strong> significa "falar" ou "conversar". Pode-se "話す" (hanasu) sobre um tópico específico, como em "日本語を話す" (nihongo o hanasu) - "falar japonês", ou pode-se "話す" (hanasu) com alguém, como em "友達と話す" (tomodachi to hanasu) - "conversar com um amigo".</span
    >
  </p>

  <div  class="seta-baixo-gif">
    <p><span class="cinza">(...)</span></p>
  <img src="icons/icone-baixo-m.png" alt="">
</div>
</div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas05" class="esconderFrases">
<section class="secao-pagina-frases">
<div class="secao-numero-index secao-">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="あなたは日本語を話しますか？
      Você fala japonês?"
      onclick="playLento46()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="あなたはにほんごをはなしますか？
      Anata wa nihongo o hanashimasu ka?"
      onclick="play46()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>   
    <span class="azul"
      >あなたは日本語を<span id="laranja">話しますか？</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Você <span id="laranja">fala</span> japonês?</span
      ></strong
    >
  </p>
  <p><span class="rosa">あなたはにほんごを<span id="laranja">はなしますか？</span></span></p>

  <p>
    <span class="verde-lima">Anata wa nihongo o <span id="laranja">hanashimasu ka?</span></span>
  </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="もっとゆっくり 話して いただけますか？
      Você pode falar mais devagar?"
      onclick="playLento47()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="もっとゆっくりはなしていただけますか？
      Motto yukkuri hanashite itadakemasu ka?"
      onclick="play47()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    
    <span class="azul">もっとゆっくり<span id="laranja"> 話して</span> いただけますか？</span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Você pode <span id="laranja">falar</span> mais devagar?</span
      ></strong
    >
  </p>
  <p><span class="rosa">もっとゆっくり<span id="laranja">はなして</span>いただけますか？</span></p>

  <p><span class="verde-lima">Motto yukkuri <span id="laranja">hanashite</span> itadakemasu ka?</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="私はポルトガル語を話します.
      Eu falo português."
      onclick="playLento48()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="わたしはぽるとがるごをはなします.
      Watashi wa Porutogarugo o hanashimasu."
      onclick="play48()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>  
    <span class="azul"> 私はポルトガル語を<span id="laranja">話します</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu <span id="laranja">falo</span> português.</span
      ></strong
    >
  </p>
  <p><span class="rosa">わたしはぽるとがるごを<span id="laranja">はなします</span></span></p>

  <p><span class="verde-lima">Watashi wa Porutogarugo o <span id="laranja">hanashimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="私は英語を話します.
      Eu falo inglês."
      onclick="playLento49()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="わたしはえいごをはなします.
      Watashi wa eigo o hanashimasu."
      onclick="play49()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"> 私は英語を<span id="laranja">話します </span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu <span id="laranja">falo</span> inglês.</span
      ></strong
    >
  </p>
  <p><span class="rosa">わたしはえいごを<span id="laranja">はなします</span></p>

  <p><span class="verde-lima">Watashi wa eigo o <span id="laranja">hanashimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="彼はあなたについて 話しました.
      Ele falou sobre você."
      onclick="playLento50()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="かれはあなたについてはなしました.
      Kare wa anata ni tsuite hanashimashita."
      onclick="play50()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      > 彼はあなたについて<span id="laranja"> 話しました</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Ele <span id="laranja">falou</span> sobre você.</span
      ></strong
    >
  </p>
  <p><span class="rosa">かれはあなたについて<span id="laranja">はなしました</span></span></p>

  <p><span class="verde-lima">Kare wa anata ni tsuite <span id="laranja">hanashimashita.</span> </span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="あなたの好きなことについて話してください.
      Me fale sobre o que você gosta."
      onclick="playLento51()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="あなたのすきなことについてはなしてください.
      Anata no sukina koto ni tsuite hanashite kudasai."
      onclick="play51()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">あなたの好きなことについて<span id="laranja">話してください</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Me <span id="laranja">fale</span> sobre o que você gosta.</span
      ></strong
    >
  </p>
  <p><span class="rosa">あなたのすきなことについて<span id="laranja">はなして</span>ください</span></p>

  <p><span class="verde-lima">Anata no sukina koto ni tsuite <span id="laranja">hanashite</span> kudasai.</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="先生は日本の歴史について話しました.
      O professor falou sobre a história do Japão"
      onclick="playLento52()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="せんせいはにほんのれきしについてはなしました.
      Sensei wa Nihon no rekishi ni tsuite hanashimashita."
      onclick="play52()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">先生は日本の歴史について<span id="laranja">話しました</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >O professor <span id="laranja">falou</span> sobre a história do Japão</span></strong
    >
  </p>
  <p><span class="rosa">せんせいはにほんのれきしについて<span id="laranja">はなしました</span></span></p>

  <p><span class="verde-lima">Sensei wa Nihon no rekishi ni tsuite <span id="laranja">hanashimashita.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="わたしはおんがくをひきます.
      Vamos falar sobre nossos hobbys."
      onclick="playLento53()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="わたしたちはしゅみについてはなしましょう.
      Watashitachi wa shumi ni tsuite hanashimashou."
      onclick="play53()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >わたしはおんがくを<span id="verde">ひきます</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco">
        Vamos <span id="laranja">falar</span> sobre nossos hobbys.</span
      ></strong>
  </p>
  <p><span class="rosa">わたしたちはしゅみについて<span id="laranja">はなしましょう</span></span></p>

  <p><span class="verde-lima">Watashitachi wa shumi ni tsuite <span id="laranja">hanashimashou.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento54()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play54()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul "
      >  私は少し日本語を<span id="laranja">話します</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu <span id="laranja">falo</span> um pouco de japonês.</span
      ></strong
    >
  </p>
  <p><span class="rosa">わたしはすこしにほんごを<span id="laranja">はなします</span></span></p>

  <p>
    <span class="verde-lima"
      >Watashi wa sukoshi nihongo o <span id="laranja">hanashimasu.</span></span
    >
  </p>
</div>

</section>
</div>
<!-- Verbo 6 -->
<!-- Verbo seis -->
<section class="secao-frases secao-03-numeros ">
<div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases06">
  <!-- Fim Play numeros -->
  <p>6 Ikimasu (行きます)</p>
  <p>
    <span class="branco">
      <strong>Verbo Ir</strong> (します)<span id="laranja"></span
    ></span>
  </p>
  <p>
    <strong><span class="branco"></span></strong>
  </p>
  <p><span class="verde-lima">に いきます</span></p>
  <p>
    <span class="cinza"
      ><strong>行く (Iku)</strong> é usado para indicar movimento em direção a algum lugar.<br> "行きます (ikimasu)" para presente afirmativo e "行きません (ikimasen)" para presente negativo.  Em muitas frases, "行く" é seguido pela partícula "に (ni)", que indica o destino da ação. </span
    >
  </p>

  <div  class="seta-baixo-gif">
    <p><span class="cinza">(...)</span></p>
  <img src="icons/icone-baixo-m.png" alt="">
</div>
</div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas06" class="esconderFrases">
<section class="secao-pagina-frases">
<div class="secao-numero-index secao-">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="東京に 行きます.
      Eu vou para Tóquio."
      onclick="playLento55()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="とうきょうに いきます.
      Toukyou ni ikimasu."
      onclick="play55()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >東京に<span id="laranja"> 行きます</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu <span id="laranja">vou</span> para Tóquio.</span
      ></strong
    >
  </p>
  <p><span class="rosa">とうきょうに <span id="laranja">いきます</span></span></p>

  <p>
    <span class="verde-lima">Toukyou ni <span id="laranja">ikimasu.</span></span>
  </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="仕事に行きます.
      Eu vou para o trabalho."
      onclick="playLento56()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="しごとに いきます.
      Shigoto ni ikimasu."
      onclick="play56()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">仕事に<span id="laranja">行きます</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu <span id="laranja">vou</span> para o trabalho.</span
      ></strong
    >
  </p>
  <p><span class="rosa">しごとに <span id="laranja">いきます</span></span></p>

  <p><span class="verde-lima">Shigoto ni <span id="laranja">ikimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="新宿駅までどうやって 行けば いいですか？
      Como faço para ir até a estação Shinjuku?"
      onclick="playLento57()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="しんじゅくえきまでどうやっていけばいいですか？
      Shinjuku eki made dou yatte ikeba ii desu ka?"
      onclick="play57()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">新宿駅までどうやって<span id="laranja"> 行けば</span> いいですか？</span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Como faço para <span id="laranja">ir</span> até a estação Shinjuku?</span
      ></strong
    >
  </p>
  <p><span class="rosa">しんじゅくえきまでどうやって<span id="laranja">いけば</span>いいですか？</span></p>
  <p><span class="verde-lima">Shinjuku eki made dou yatte <span id="laranja">ikeba</span> ii desu ka?</span></p>
  <p style="font-size: 13px;color:#797979"> "行けば" (ikeba), que é a forma condicional do verbo "行く" (iku), que significa "ir". </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="一番近い公園に行きたいです.
      Gostaria de ir ao parque mais próximo."
      onclick="playLento58()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="いちばんちかいこうえんにいきたいです.
      Ichiban chikai kouen ni ikitai desu"
      onclick="play58()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"> 一番近い公園に<span id="laranja">行きたいです</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Gostaria de <span id="laranja">ir</span> ao parque mais próximo.</span
      ></strong
    >
  </p>
  <p><span class="rosa">いちばんちかいこうえんに<span id="laranja">いきたいです</span></span></p>

  <p><span class="verde-lima">Ichiban chikai kouen ni <span id="laranja">ikitai desu</span></span></p>
  <p style="font-size: 13px; color:#797979">(ikitai) é a forma do verbo na forma desejável, indicando um desejo de ir.</p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento59()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play59()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      > 映画館にいつ<span id="laranja">行きますか？</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Quando <span id="laranja">vamos</span> ao cinema?</span
      ></strong
    >
  </p>
  <p><span class="rosa">えいがかんにいつ<span id="laranja">いきますか？</span></span></p>

  <p><span class="verde-lima">Eigakan ni itsu <span id="laranja">ikimasu ka?</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento60()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play60()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p
    (Nihon ryouri no resutoran ni ikitai desu.)
    <span class="azul">日本料理のレストランに<span id="laranja">行きたいです</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Quero <span id="laranja">ir</span> ao restaurante japonês.</span
      ></strong
    >
  </p>
  <p><span class="rosa">にほんりょうりのれすとらんに<span id="laranja">いきたいです</span></span></p>

  <p><span class="verde-lima">Nihon ryouri no resutoran ni <span id="laranja">ikitai desu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="毎週、スーパーマーケットに買い物しに行きます.
      Vou ao mercado todas as semanas fazer compras."
      onclick="playLento61()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="まいしゅう、すーぱーまーけっとにかいものしにいきます.
      Maishuu, suupaa maaketto ni kaimono shi ni ikimasu."
      onclick="play61()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">毎週、スーパーマーケットに買い物しに<span id="laranja">行きます</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        ><span id="laranja">Vou</span> ao mercado todas as semanas fazer compras.</span
      ></strong
    >
  </p>
  <p><span class="rosa">まいしゅう、すーぱーまーけっとにかいものしに<span id="laranja">いきます</span></span></p>

  <p><span class="verde-lima">Maishuu, suupaa maaketto ni kaimono shi ni <span id="laranja">ikimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="大学の図書館に勉強しに行きます.
      Eu vou à biblioteca da universidade para estudar."
      onclick="playLento62()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="だいがくのとしょかんにべんきょうしにいきます.
      Daigaku no toshokan ni benkyou shi ni ikimasu"
      onclick="play62()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >大学の図書館に勉強しに<span id="verde">行きます</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu <span id="laranja">vou</span> à biblioteca da universidade para estudar.</span></span
      ></strong
    >
  </p>
  <p><span class="rosa">だいがくのとしょかんにべんきょうしに<span id="laranja">いきます</span></span></p>

  <p><span class="verde-lima">Daigaku no toshokan ni benkyou shi ni <span id="laranja">ikimasu</span></span></p>
</div>


</section>
</div>
<!-- Fim verbo 6 -->

<!-- Verbo sete 7 -->
<section
class="secao-frases secao-03-numeros ">
<div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases07">
  <!-- Fim Play numeros -->
  <p>7 Kaku (書く)</p>
  <p>
    <span class="branco">
      <strong>Verbo Escrever</strong> (かく)<span id="laranja"></span
    ></span>
  </p>
  <p>
    <strong><span class="branco"></span></strong>
  </p>
  <p><span class="verde-lima">かく</span></p>
  <p> 
    <span class="cinza"
      >O uso mais comum do verbo<strong> "書く" (kaku)</strong> é para descrever a ação de escrever texto em papel, quadro-negro, tela digital, etc.<br> Também pode ser usado em um contexto mais amplo para se referir à expressão escrita em geral. Isso inclui não apenas a escrita de palavras, mas também a escrita de ideias, pensamentos, conceitos, etc. </span
    >
  </p>

  <div  class="seta-baixo-gif">
    <p><span class="cinza">(...)</span></p>
  <img src="icons/icone-baixo-m.png" alt="">
</div>
</div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas07" class="esconderFrases">
<section class="secao-pagina-frases">
<div class="secao-numero-index secao-">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="彼は黒板に漢字を書きます.
      Ele escreve kanji no quadro-negro."
      onclick="playLento63()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="かれはこくばんにかんじをかきます.
      Kare wa kokuban ni kanji o kakimasu."
      onclick="play63()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      > 彼は黒板に漢字を<span id="laranja">書きます</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Ele <span id="laranja">escreve</span> kanji no quadro-negro.</span
      ></strong
    >
  </p>
  <p><span class="rosa">かれはこくばんにかんじを<span id="laranja">かきます</span></span></p>
  <p>
    <span class="verde-lima">Kare wa kokuban ni kanji o <span id="laranja">kakimasu.</span></span>
  </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="彼女は本を書いています.
      Ela está escrevendo um livro."
      onclick="playLento64()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="かのじょはほんをかいています.
      Kanojo wa hon o kaite imasu."
      onclick="play64()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>  
    <span class="azul">彼女は本を<span id="laranja">書いています</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Ela está <span id="laranja">escrevendo</span> um livro.</span
      ></strong>
  </p>
  <p><span class="rosa">かのじょはほんを<span id="laranja">かいています</span></span></p>

  <p><span class="verde-lima">Kanojo wa hon o <span id="laranja">kaite imasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="メールを書いて送ります.
      Eu vou escrever um email e te enviar."
      onclick="playLento65()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="メールをかいておくります.
      Mēru o kaite, okurimasu."
      onclick="play65()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">メールを<span id="laranja">書いて</span>送ります</span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu vou <span id="laranja">escrever</span> um email e te enviar.</span
      ></strong
    >
  </p>
  <p><span class="rosa">メールをかいておくります</span></p>

  <p><span class="verde-lima">Mēru o <span id="laranja">kaite,</span> okurimasu.</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="彼にメッセージを書いてください.
      Escreva uma mensagem para ele."
      onclick="playLento66()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="かれにメッセージをかいてください.
      Kare ni messēji o kaite kudasai."
      onclick="play66()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">彼にメッセージを<span id="laranja">書いてください</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        ><span id="laranja">Escreva </span> uma mensagem para ele.</span
      ></strong
    >
  </p>
  <p><span class="rosa">かれにメッセージをかいてください</span></p>

  <p><span class="verde-lima">Kare ni messēji o <span id="laranja">kaite</span> kudasai.</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="これを私のために書いてください.
      Escreva isso para mim, por favor"
      onclick="playLento67()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="これを私のためにかいてください.
      Kore o watashi no tame ni kaite kudasai."
      onclick="play67()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >これを私のために<span id="laranja">書いてください</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        ><span id="laranja">Escreva </span> isso para mim, por favor</span
      ></strong
    >
  </p>
  <p><span class="rosa">これを私のために<span id="laranja">かいて</span>ください</span></p>

  <p><span class="verde-lima">Kore o watashi no tame ni <span id="laranja">kaite</span> kudasai.</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="私はこれを書く方法がわかりません.
      Eu não sei escrever isso."
      onclick="playLento68()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="わたしはこれをかくほうほうがわかりません.
      Watashi wa kore o kaku houhou ga wakarimasen."
      onclick="play68()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">私はこれを<span id="laranja">書く</span>方法がわかりません</span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu não sei <span id="laranja">escrever</span> isso.</span
      ></strong>
  </p>
  <p><span class="rosa">わたしはこれを<span id="laranja">かく</span>ほうほうがわかりません</span></p>

  <p><span class="verde-lima">Watashi wa kore o <span id="laranja">kaku</span> houhou ga wakarimasen.</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="その会社はマニュアルを 書き直しています.
      A empresa está escrevendo o manual."
      onclick="playLento69()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="そのかいしゃはまにゅあるをかきなおしています.
      Sono kaisha wa manyuaru o kakinoshite imasu."
      onclick="play69()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">その会社はマニュアルを<span id="laranja"> 書き直しています</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >A empresa <span id="laranja">está escrevendo</span> o manual.</span
      ></strong
    >
  </p>
  <p><span class="rosa">そのかいしゃはまにゅあるを<span id="laranja">かきなおしています</span></span></p>

  <p><span class="verde-lima">Sono kaisha wa manyuaru o <span id="laranja">kakinoshite imasu.</span></span></p>
</div>


</section>
</div>

<!-- Verbo oito 8 -->
<section
class="secao-frases secao-03-numeros ">
<div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases08">
 
  <!-- Fim Play numeros -->
  <p>8 Kau (買う)</p> 
  <p>
    <span class="branco"
      ><strong>Verbo Comprar</strong> (かう)
     </span>
  </p>
  <p>
    <strong><span class="branco"></span></strong>
  </p>
  <p><span class="verde-lima">かう</span></p>
  <p>
    <span class="cinza"
      >O verbo <strong>"kau" 買う</strong>é regular, o que significa que sua conjugação segue um padrão. Pode ser usado em uma variedade de contextos, desde comprar comida e roupas até itens maiores, como carros e eletrônicos.
      Quando se usa "kau" para comprar um objeto específico, geralmente é seguido pela partícula de objeto direto "o" (を).</span
    >
  </p>

  <div  class="seta-baixo-gif">
    <p><span class="cinza">(...)</span></p>
  <img src="icons/icone-baixo-m.png" alt="">
</div>
</div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas08" class="esconderFrases">
<section class="secao-pagina-frases">
<div class="secao-numero-index secao-">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="今日は洋服を買います.
      Hoje vou comprar roupas."
      onclick="playLento70()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="きょうは ようふくを かいます.
      Kyō wa yōfuku o kaimasu."
      onclick="play70()"
    />
  </div>
  <!-- Fim Play Frases -->
 
  <p>
    <span class="azul"
      > 今日は洋服を<span id="laranja">買います</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Hoje vou <span id="laranja">comprar</span> roupas.</span
      ></strong
    >
  </p>
  <p><span class="rosa">きょうは ようふくを <span id="laranja">かいます</span></span></p>

  <p>
    <span class="verde-lima">Kyō wa yōfuku o <span id="laranja">kaimasu.</span></span>
  </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="このアイテムを買いたいです.
      Eu quero comprar esse item."
      onclick="playLento71()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="このアイテムをかいたいです.
      Kono aitemu o kaitai desu."
      onclick="play71()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">このアイテムを<span id="laranja">買いたいです</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu quero<span id="laranja"> comprar</span> esse item.</span
      ></strong
    >
  </p>
  <p><span class="rosa">このアイテムを<span id="laranja">かいたいです</span></span></p>

  <p><span class="verde-lima">Kono aitemu o <span id="laranja">kaitai desu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="新しいノートパソコンを買いました.
      Comprei um novo notebook."
      onclick="playLento72()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="あたらしいノートパソコンを かいました.
      Atarashii nōtopasokon o kaimashita."
      onclick="play72()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"> 新しいノートパソコンを<span id="laranja">買いました</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        ><span id="laranja">Comprei </span> um novo notebook.</span
      ></strong
    >
  </p>
  <p><span class="rosa">あたらしいノートパソコンを <span id="laranja">かいました</span></span></p>

  <p><span class="verde-lima">Atarashii nōtopasokon o <span id="laranja">kaimashita.</span></span></p>
  <p style="font-size: 13px; color: #797979;"> (kaimashita): Forma do verbo "comprar" (買う - kau) no passado, indicando que a ação de comprar o laptop já foi concluída.</p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="そのバッグをどこで買いましたか.
      Onde você comprou essa bolsa?"
      onclick="playLento73()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="そのバッグをどこで かいましたか.
      Sono baggu o doko de kaimashita ka."
      onclick="play73()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">そのバッグをどこで<span id="laranja">買いましたか</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Onde você <span id="laranja">comprou</span> essa bolsa?</span></strong>
  </p>
  <p><span class="rosa">そのバッグをどこで  <span id="laranja">かいましたか</span></span></p>

  <p><span class="verde-lima">Sono baggu o doko de <span id="laranja">kaimashita ka</span>.</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="新しい服を買いたいです.
      Gostaria de comprar roupas novas."
      onclick="playLento74()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="あたらしい ふくを かいたい です.
      Atarashii fuku o kaitai desu."
      onclick="play74()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      > 新しい服を<span id="laranja">買いたいです</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Gostaria de <span id="laranja">comprar</span> roupas novas.</span
      ></strong
    >
  </p>
  <p><span class="rosa">あたらしい ふくを <span id="laranja">かいたい です</span></span></p>

  <p><span class="verde-lima">Atarashii fuku o <span id="laranja">kaitai desu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="何か 買いましょう.
      Vamos coprar algo na konbini."
      onclick="playLento75()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="コンビニでなにか かいましょう.
      Konbini de nanika kaimashou."
      onclick="play75()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
  <span class="azul">何か<span id="laranja"> 買いましょう</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Vamos <span id="laranja">coprar</span> algo na konbini.</span
      ></strong
    >
  </p>
  <p><span class="rosa">コンビニでなにか <span id="laranja">かいましょう</span></span></p>

  <p><span class="verde-lima">Konbini de nanika <span id="laranja">kaimashou.</span></span></p>
  <p style="font-size: 13px; color:#797979" > (kaimashou): Forma do verbo "comprar" (買う - kau) no imperativo, indicando uma sugestão ou convite para realizar a ação de comprar.</p>
</div>


<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="あのレストランで寿司を買いましょう.
      Vamos comprar sushi naquele restaurante."
      onclick="playLento76()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="あのレストランですしをかいましょう.
      Ano resutoran de sushi o kaimashou."
      onclick="play76()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">あのレストランで寿司を<span id="laranja">買いましょう</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Vamos <span id="laranja">comprar</span> sushi naquele restaurante.</span
      ></strong
    >
  </p>
  <p><span class="rosa">あのレストランですしを<span id="laranja">かいましょう</span></span></p>

  <p><span class="verde-lima">Ano resutoran de sushi o <span id="laranja">kaimashou.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="どこで本を買えますか.
      Onde posso comprar livros?"
      onclick="playLento77()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="どこで ほんを かえますか.
      Doko de hon o kaemasu ka."
      onclick="play77()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >どこで本を<span id="laranja">買えますか</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Onde posso <span id="laranja">comprar</span> livros?</span
      ></strong>
  </p>
  <p><span class="rosa">どこで ほんを <span id="laranja">かえますか</span></span></p>

  <p><span class="verde-lima">Doko de hon o <span id="laranja">kaemasu ka.</span></span></p>
  <p style="font-size: 13px; color:#797979">O "か" no final transforma a sentença em uma pergunta.</p>
</div>



</section>
</div>

<!-- Verbo nove Matsu -->
<section
class="secao-frases secao-03-numeros ">
<div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases09">
  
  <!-- Fim Play numeros -->
  <p>9 Matsu (待つ)</p>
  <p>
    <span class="branco"
      ><strong>Verbo Esperar / Aguardar</strong> (まつ)</p>
  <p>
    <strong><span class="branco"></span></strong>
  </p>
  <p><span class="verde-lima">まつ</span></p>
  <p>
    <span class="cinza"> Este verbo pode ser usado em uma variedade de situações, desde esperar por alguém em um encontro até aguardar a chegada de um ônibus ou avião. Também é comum em contextos mais figurativos, como "esperar por uma oportunidade" ou "aguardar uma resposta".<br> O verbo <strong>待つ</strong> geralmente é seguido pela partícula を (wo) quando o objeto da espera é especificado.</span
    >
  </p>
  <div  class="seta-baixo-gif">
    <p><span class="cinza">(...)</span></p>
  <img src="icons/icone-baixo-m.png" alt="">
</div>
</div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas09" class="esconderFrases">
<section class="secao-pagina-frases">
<div class="secao-numero-index secao-">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="次の電車を待っています.
      Estou esperando/aguardando o próximo trem."
      onclick="playLento78()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="つぎのでんしゃを まっています.
      Tsugi no densha o matteimasu."
      onclick="play78()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >次の電車を<span id="laranja">待っています</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Estou <span id="laranja">esperando/aguardando</span> o próximo trem.</span
      ></strong
    >
  </p>
  <p><span class="rosa">つぎのでんしゃを <span id="laranja">まっています</span></span></p>

  <p>
    <span class="verde-lima">Tsugi no densha o <span id="laranja">matteimasu.</span></span>
  </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="入試の結果を:待っています.
      Estou esperando/aguardando o resultado do vestibular."
      onclick="playLento79()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="にゅうしのけっかを まっています.
      Nyuushi no kekka o matteimasu."
      onclick="play79()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"> 入試の結果を<span id="laranja">:待っています</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Estou <span id="laranja">esperando/aguardando</span> o resultado do vestibular.</span
      ></strong
    >
  </p>
  <p><span class="rosa">にゅうしのけっかを <span id="laranja">まっています</span></span></p>

  <p><span class="verde-lima">Nyuushi no kekka o <span id="laranja">matteimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="来年まで待ちます.
      Vou esperar o próximo ano."
      onclick="playLento80()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="らいねんまで まちます.
      Rainen made machimasu."
      onclick="play80()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">来年まで<span id="laranja">待ちます</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Vou <span id="laranja">esperar</span> o próximo ano.</span
      ></strong
    >
  </p>
  <p><span class="rosa">らいねんまで <span id="laranja">まちます</span></span></p>

  <p><span class="verde-lima">Rainen made <span id="laranja">machimasu.</span></span></p>
  <p style="font-size: 13px; color:#797979">"待ちます (machimasu)" é o verbo "esperar" na forma polida, indicando uma ação contínua no futuro.</p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="少し待って もらえますか？
      Você pode esperar um pouco?"
      onclick="playLento81()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="すこし まって もらえますか？
      Sukoshi matte moraemasu ka?"
      onclick="play81()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"> 少し<span id="laranja">待って </span>もらえますか？</span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Você pode <span id="laranja">esperar</span> um pouco?</span
      ></strong
    >
  </p>
  <p><span class="rosa">すこし <span id="laranja">まって</span> もらえますか？</span></p>

  <p><span class="verde-lima">Sukoshi <span id="laranja">matte</span> moraemasu ka?</span></p>
  <p style="font-size: 13px;color:#797979">"もらえますか (moraemasu ka)" é uma expressão polida que significa "pode fazer algo por mim?" ou "você pode?"</p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="教室で先生を待ちま.
      Vou esperar o professor na sala de aula."
      onclick="playLento82()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="きょうしつで せんせいを まちます.
      Kyōshitsu de sensei o machimasu."
      onclick="play82()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >教室で先生<span id="laranja">を待ちます</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Vou <span id="laranja">esperar</span> o professor na sala de aula.</span
      ></strong
    >
  </p>
  <p><span class="rosa">きょうしつで せんせいを <span id="laranja">まちます</span></span></p>

  <p><span class="verde-lima">Kyōshitsu de sensei o <span id="laranja">machimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="彼は彼女を待っています.
      Ele está esperando por ela."
      onclick="playLento83()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="かれは かのじょを まっています.
      Kare wa kanojo o matteimasu."
      onclick="play83()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">彼は彼女を<span id="laranja">待っています</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Ele está <span id="laranja">esperando</span> por ela.</span
      ></strong
    >
  </p>
  <p><span class="rosa">かれは かのじょを <span id="laranja">まっています</span></span></p>

  <p><span class="verde-lima">Kare wa kanojo o <span id="laranja">matteimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="私はあなたを待っています.
      Estou esperando por você."
      onclick="playLento84()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="わたしはあなたをまっています.
      Watashi wa anata o matteimasu."
      onclick="play84()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">私はあなたを<span id="laranja">待っています</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Estou <span id="laranja">esperando</span> por você.</span
      ></strong
    >
  </p>
  <p><span class="rosa">わたしはあなたを<span id="laranja">まっています</span></span></p>

  <p><span class="verde-lima">Watashi wa anata o <span id="laranja">matteimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="結果を待っています.
      Estou esperando pelo resultado."
      onclick="playLento85()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="けっかをまっています.
      Kekka o matteimasu."
      onclick="play85()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      > 結果を<span id="verde">待っています</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Estou <span id="laranja">esperando</span> pelo resultado.</span
      ></strong
    >
  </p>
  <p><span class="rosa">けっかを<span id="laranja">まっています</span></span></p>

  <p><span class="verde-lima">Kekka o <span id="laranja">matteimasu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="私たちは待っています.
      Estamos esperando."
      onclick="playLento86()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="わたしたちはまっています.
      Watashitachi wa matteimasu."
      onclick="play86()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      > 私たちは<span id="laranja">待っています</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Estamos <span id="laranja">esperando.</span></span
      ></strong
    >
  </p>
  <p><span class="rosa"> わたしたちは<span id="laranja">まっています</span></span></p>

  <p>
    <span class="verde-lima"
      >Watashitachi wa <span id="laranja">matteimasu.</span></span
    >
  </p>
</div>


</section>
</div>

<!-- Verbo dez 10 shiru -->
<section
class="secao-frases secao-03-numeros ">
<div class="secao-numero-index secao-frases frase-topo" id="buttonMostrarFrases10">
  <!-- Fim Play numeros -->
  <p> 10 Shiru (知る)</p>
  <p>
    <span class="branco"
      ><strong>Verbo Saber / Conhecer</strong> (しっる)</span>
  </p>
  <p>
    <strong><span class="branco"></span></strong>
  </p>
  <p><span class="verde-lima">しっる</span></p>
  <p>
    <span class="cinza"
      ><strong>知る (shiru)</strong>  é usado para expressar o conhecimento de algo ou alguém. Pode se referir ao conhecimento de fatos, eventos, nomes, detalhes, entre outros. <br> Geralmente, o verbo "知る" (shiru) é seguido pela partícula "を" (o) para marcar o objeto direto da frase. </span
    >
  </p>
  
  <div  class="seta-baixo-gif">
    <p><span class="cinza">(...)</span></p>
  <img src="icons/icone-baixo-m.png" alt="">
</div>
</div>
</section>

<!-- SECAO SERA MOSTRADA  -->
<div  id="frasesEscondidas10" class="esconderFrases">
<section class="secao-pagina-frases">
<div class="secao-numero-index secao-">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt="その映画を 知っていますか？
      Você conhece esse filme?"
      onclick="playLento88()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt="そのえいがをしっていますか？
      Sono eiga o shitteimasu ka?"
      onclick="play88()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >その映画を<span id="laranja"> 知っていますか？</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Você <span id="laranja">conhece</span> esse filme?</span
      ></strong
    >
  </p>
  <p><span class="rosa">そのえいがを<span id="laranja">しっていますか？</span></span></p>

  <p>
    <span class="verde-lima">Sono eiga o <span id="laranja">shitteimasu ka?</span></span>
  </p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento88()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play88()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">私はその情報を<span id="laranja"> 知りませんでした</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu não<span id="laranja"> sabia</span> dessa informação.</span
      ></strong
    >
  </p>
  <p><span class="rosa">わたしはそのじょうほうを<span id="laranja">しりませんでした</span></span></p>

  <p><span class="verde-lima">Watashi wa sono jōhō o <span id="laranja">shirimasen deshita.</span></span></p>
  <p style="font-size: 13px; color: #797979;">知りませんでした (shirimasendeshita): Forma negativa passada do verbo "saber" ou "conhecer".</p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento89()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play89()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">この曲を<span id="laranja">知っていますか？</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Você <span id="laranja">conhece</span> está música?</span
      ></strong
    >
  </p>
  <p><span class="rosa">このきょくを<span id="laranja">知っていますか？</span></span></p>

  <p><span class="verde-lima">Kono kyoku o <span id="laranja">shitteimasu ka?</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento90()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play90()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"> 日本を<span id="laranja">知りたいです</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Gostaria de <span id="laranja">conhecer</span> o Japão.</span
      ></strong
    >
  </p>
  <p><span class="rosa">にほんを<span id="laranja">しりたいです</span></span></p>

  <p><span class="verde-lima">Nihon o <span id="laranja">shiritai desu.v</span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento91()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play91()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >ブラジルを<span id="laranja"> 知っていますか？</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Você <span id="laranja">conhece</span> o Brasil?</span
      ></strong
    >
  </p>
  <p><span class="rosa">ブラジルを<span id="laranja">しっていますか？</span></span></p>

  <p><span class="verde-lima">Burajiru o <span id="laranja">shitte imasu ka?</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento92()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play92()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">この場所を<span id="laranja"> 知りません</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Eu não<span id="laranja"> conheço</span> esse lugar.</span
      ></strong
    >
  </p>
  <p><span class="rosa">このばしょを<span id="laranja">しりません</span></span></p>

  <p><span class="verde-lima">Kono basho o <span id="laranja">shirimasen.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento93()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play93()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul">富士山を<span id="laranja">知りたいです</span></span>
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        >Gostaria de <span id="laranja">conhecer o monte Fuji.</span></span
      ></strong
    >
  </p>
  <p><span class="rosa">ふじさんを<span id="laranja">しりたいです</span></span></p>

  <p><span class="verde-lima">Fuji-san o <span id="laranja">shiritai desu.</span></span></p>
</div>

<div class="secao-numero-index">
  <!-- Play frases -->
  <div class="player-verbos">
    <img
      src="icons/plento.png"
      class="iconeplaylento-verbos"
      id="btn-verbos"
      alt=""
      onclick="playLento94()"
    />
    <img
      src="icons/playbutton.png"
      class="iconeplay"
      id="btn-verbos"
      alt=""
      onclick="play94()"
    />
  </div>
  <!-- Fim Play Frases -->
  <p>
    <span class="azul"
      >日本文化の少しを<span id="laranja">知っています</span></span
    >
  </p>
  <p>
    <strong
      ><span class="verde-fraco"
        ><span id="laranja">Conheço </span>um pouco da cultura japonesa.</span
      ></strong
    >
  </p>
  <p><span class="rosa">にほんぶんかのすこしを<span id="laranja">しっています</span></span></p>

  <p><span class="verde-lima">Nihon bunka no sukoshi o <span id="laranja">shitteimasu.</span></span></p>
</div>









</section>
</div>
    </main>

    <br /><br /><br /><br />

    <div class="seta-para-cima seta-para-cima-index">
      <a href="">
        <img src="icons/icone-seta-para-cima.png" alt="" />
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
.modal-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 0 10%;
}

.userlogado, .btnsair {
    width: 100%;
    text-align: center;
    line-height: 25px;
    color: #00686c;
}
.btnsair a{
    color: 	#DC143C;
}
.modal {
    display: none;
    position: fixed;
    z-index: 6;
    left: 50%;
    top: 60px;
    border-radius: 5px;
    width: 30%;
    height: 20%;
    background-color: #fff;
    font-size: 12px;   
}
@media (max-width: 650px) {
    .modal{
        width: 40%;
        left: 40%;
    }
}
@media (max-width: 500px) {
    .modal{
        width: 50%;
    }
}
@media (max-width: 360px) {
    .modal{
        width: 60%;
        height: 18%;
    }
}
.close {
    color: #aaa;
    width: 100%;
    font-size: 20px;
    padding: 0 5px 0 0;
    text-align: right;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>
    <script src="js/script.js"></script>
    <script src="js/scriptEvangelion.js"></script>

</body>
</html>