/*
function menushow() {
  let menuMobile = document.querySelector('.mobile-menu');
  let icon = document.querySelector('.icon');

  if (menuMobile.classList.contains('open')) {
    menuMobile.classList.remove('open');
    icon.src = ".icons/baricon.png";
  } else {
    setTimeout(() => {
      menuMobile.classList.add('open');
      icon.src = ".icons/close.png";
    }, 500); // Defina o atraso em milissegundos (500ms neste exemplo)
  }
}

 let menuMobile = document.querySelector('.mobile-menu');{
    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = ".icons/baricon.png";
    }else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = ".icons/close.png";
    }
}
*/
/*
function menushow() {
  let menuMobile = document.querySelector(".mobile-menu");
  let icon = document.querySelector(".icon");

  // Função para adicionar ou remover a classe 'open' com um delay de 300 milissegundos (0.3 segundos)
  function toggleMenuWithDelay() {
    if (menuMobile.classList.contains("open")) {
      menuMobile.classList.remove("open");
      icon.src = ".icons/baricon.png";
    } else {
      menuMobile.classList.add("open");
      icon.src = ".icons/close.png";
    }
  }
  // Adiciona um delay de 300 milissegundos antes de chamar a função toggleMenuWithDelay()
  setTimeout(toggleMenuWithDelay, 300);
}
*/

function menushow() {
  let menuMobile = document.querySelector(".mobile-menu");
  let icon = document.querySelector(".icon");

  if (menuMobile.classList.contains("open")) {
    menuMobile.classList.remove("open");
    icon.src = "icons/baricon.png";
  } else {
    menuMobile.classList.add("open");
    icon.src = ".icons/close.png";
  }
}

// LIVRO
var capaLivro = document.getElementById('capa-livro');
var lupa = document.getElementById('lupa');
var lupaImg = document.createElement('img');
lupaImg.src = 'img/img-index/capa-livro-full.png'; // Substitua pelo caminho da sua imagem de lupa ampliada
lupa.appendChild(lupaImg);

capaLivro.addEventListener('mousemove', function(e) {
    var x = e.clientX - this.getBoundingClientRect().left;
    var y = e.clientY - this.getBoundingClientRect().top;

    var lupaX = x - lupa.offsetWidth / 2;
    var lupaY = y - lupa.offsetHeight / 2;

    lupa.style.left = lupaX + 'px';
    lupa.style.top = lupaY + 'px';

    var imgX = (x / this.offsetWidth) * 100;
    var imgY = (y / this.offsetHeight) * 100;

    lupaImg.style.objectPosition = imgX + '% ' + imgY + '%';
});

capaLivro.addEventListener('mouseenter', function() {
    lupa.style.display = 'block';
});

capaLivro.addEventListener('mouseleave', function() {
    lupa.style.display = 'none';
});



//var count = 0;

//function playPause(){
// if(count == 0){
//   count = 1;
//  audio.play();
// }else{
//   count = 0;
//   audio.pause();
//}
//}

// Balao explicacao
document.addEventListener("DOMContentLoaded", function () {
  var balaoTrigger = document.querySelector(".balao-naruto-01");
  var balao = document.querySelector(".balao");

  balaoTrigger.addEventListener("click", function (event) {
    event.stopPropagation(); // Impede que o clique se propague para o documento

    var triggerRect = balaoTrigger.getBoundingClientRect();

    balao.style.display = "block";
    balao.style.top = triggerRect.top - 30 + "px"; // Subtraindo 10 pixels para posicionar mais para cima
    balao.style.left = triggerRect.left + window.pageXOffset + "px";
  });

  document.addEventListener("click", function (event) {
    if (!balao.contains(event.target) && event.target !== balaoTrigger) {
      balao.style.display = "none";
    }
  });
});
// Fim balao explicacao

var audio = new Audio("audio/audio-index/pagina-index-frase01.mp3");

function playAudio() {
  audio.playbackRate = 1;
  audio.play();
}
function playAudioLento() {
  audio.playbackRate = 0.8;
  audio.play();
}
var count = 0;

var audioIndex02 = new Audio("audio/audio-index/pagina-index-frase02.mp3");
function playAudio2() {
  audioIndex02.playbackRate = 1;
  audioIndex02.play();
}
function playAudioLento2() {
  audioIndex02.playbackRate = 0.8;
  audioIndex02.play();
}

var audioIndex03 = new Audio("audio/audio-index/pagina-index-frase03.mp3");
function playAudio3() {
  audioIndex03.playbackRate = 1;
  audioIndex03.play();
}
function playAudioLento3() {
  audioIndex03.playbackRate = 0.8;
  audioIndex03.play();
}
// Play audio verbos do Index
var audioIndex04 = new Audio("audio/audio-index/pagina-index-frase04.mp3");
function playAudio04() {
  audioIndex04.playbackRate = 1;
  audioIndex04.play();
}
function playAudioLento04() {
  audioIndex04.playbackRate = 0.7;
  audioIndex04.play();
}

var audioIndex05 = new Audio("audio/audio-index/pagina-index-frase05.mp3");
function playAudio05() {
  audioIndex05.playbackRate = 1;
  audioIndex05.play();
}
function playAudioLento05() {
  audioIndex05.playbackRate = 0.7;
  audioIndex05.play();
}

var audioIndex06 = new Audio("audio/audio-index/pagina-index-frase06.mp3");
function playAudio06() {
  audioIndex06.playbackRate = 1.1;
  audioIndex06.play();
}
function playAudioLento06() {
  audioIndex06.playbackRate = 0.7;
  audioIndex06.play();
}

// Play de numeros na página Index
let audioNumeroUm = new Audio("audio/audio-index/pagina-index-numero-um.mp3"); // Os Player estão invertidos
function playNumeroUmLento() {
  audioNumeroUm.playblackRate = 1.1;
  audioNumeroUm.play();
}
function playNumeroUm() {
  audioNumeroUm.playbackRate = 0.7;
  audioNumeroUm.play();
}
// Numero dois
let audioNumeroDois = new Audio(
  "audio/audio-index/pagina-index-numero-dois.mp3"
);
function playNumeroDoisLento() {
  audioNumeroDois.playbackRate = 1.1;
  audioNumeroDois.play();
}
function playNumeroDois() {
  audioNumeroDois.playbackRate = 0.7;
  audioNumeroDois.play();
}
// Numero tres
let audioNumeroTres = new Audio(
  "audio/audio-index/pagina-index-numero-tres.mp3"
);
function playNumeroTresLento() {
  audioNumeroTres.playbackRate = 1.1;
  audioNumeroTres.play();
}
function playNumeroTres() {
  audioNumeroTres.playbackRate = 0.7;
  audioNumeroTres.play();
}
// Numero quatro
let audioNumeroQuatro = new Audio(
  "audio/audio-index/pagina-index-numero-quatro.mp3"
);
function playNumeroQuatroLento() {
  audioNumeroQuatro.playback = 1;
  audioNumeroQuatro.play();
}
function playNumeroQuatro() {
  audioNumeroQuatro.playbackRate = 0.7;
  audioNumeroQuatro.play();
}
// Card naruto Index
// Card naruto um
let audioCardNarutoUm = new Audio(
  "audio/audio-index/pagina-index-naruto-card01.mp3"
);
function playNarutoCardUm() {
  audioCardNarutoUm.playbackRate = 1;
  audioCardNarutoUm.play();
}
function playNarutoCardUmLento() {
  audioCardNarutoUm.playbackRate = 0.7;
  audioCardNarutoUm.play();
}
// Card naruto dois
let audioCardNarutoDois = new Audio(
  "audio/audio-index/pagina-index-naruto-card02.mp3"
);
function playNarutoCardDois() {
  audioCardNarutoDois.playbackRate = 1;
  audioCardNarutoDois.play();
}
function playNarutoCardDoisLento() {
  audioCardNarutoDois.playbackRate = 0.7;
  audioCardNarutoDois.play();
}
// card Naruto dois
let audioCardNarutoTres = new Audio(
  "audio/audio-index/pagina-index-naruto-card03.mp3"
);
function playNarutoCardTres() {
  audioCardNarutoTres.playbackRate = 1;
  audioCardNarutoTres.play();
}
function playNarutoCardTresLento() {
  audioCardNarutoTres.playbackRate = 0.7;
  audioCardNarutoTres.play();
}
// card Escola index
let audioEscolaUm = new Audio("audio/audio-index/pagina-index-escola01.mp3");
// card escola um index
function playEscolaUm() {
  audioEscolaUm.playbackRate = 1;
  audioEscolaUm.play();
}
function playEscolaUmLento() {
  audioEscolaUm.playbackRate = 0.7;
  audioEscolaUm.play() = 0.7;
}
// card escola dois index
let audioEscolaDois = new Audio("audio/audio-index/pagina-index-escola01.mp3");
function playEscola02(){
  audioEscolaDois.playbackRate = 1;
  audioEscolaDois.play();
}
function playEscola02Lento(){
  audioEscolaDois.playbackRate = 0.7;
  audioEscolaDois.play();
}
// card escola tres index
let audioEsccolaTres = new Audio("audio/audio-index/pagina-index-escola03.mp3");
function playEscola03(){
  audioEsccolaTres.playbackRate = 1;
  audioEsccolaTres.play();
}
function playEscola03Lento(){
  audioEsccolaTres.playbackRate = 0.7;
  audioEsccolaTres.play();
}

// Audio index ERGOPROXY

let audioIndexErgoproxy = new Audio(
  "audio/audio-index/pagina-index-ergoproxy.mp3"
);
function playAudioErgoproxy() {
  audioIndexErgoproxy.playbackRate = 1.0;
  audioIndexErgoproxy.play();
}
function playAudioErgoproxyLento() {
  audioIndexErgoproxy.playbackRate = 0.8;
  audioIndexErgoproxy.play();
}
// PLay EvangelionBanner index
let audioEvangelionBanner = new Audio("audio/audio-index/pagina-index-evangelion-banner.mp3");
function playEvangelionBanner(){
  audioEvangelionBanner.playbackRate = 1;
  audioEvangelionBanner.play();
}
function playEvangelionBannerLento() {
  audioEvangelionBanner.playbackRate = 0.7;
  audioEvangelionBanner.play();
}
// Play Profissão e trabalho index
// card index Profissao 01
let audioProfissaoIndex = new Audio ("audio/audio-index/pagina-index-profissao01.mp3");
function playProfissaoIndex01(){
  audioProfissaoIndex.playbackRate = 1;
  audioProfissaoIndex.play();
}
function playProfissaoIndexLento01(){
audioProfissaoIndex.playbackRate = 0.7;
audioProfissaoIndex.play();
}
// card index Profissao 02
let audioProfissaoIndex02 = new Audio ("audio/audio-index/pagina-index-profissao02.mp3");
function playProfissaoIndex02(){
  audioProfissaoIndex02.playbackRate = 1;
  audioProfissaoIndex02.play();
}
function playProfissaoIndexLento02(){
  audioProfissaoIndex02.playbackRate = 0.7;
  audioProfissaoIndex02.play();
}
// Card index Profissão 03
let audioProfissaoIndex03 = new Audio ("audio/audio-index/pagina-index-profissao03.mp3");
function playProfissaoIndex03(){
  audioProfissaoIndex03.playbackRate = 1;
  audioProfissaoIndex03.play();
}
function playProfissaoIndexLento03(){
  audioProfissaoIndex03.playbackRate = 0.7;
  audioProfissaoIndex03.play();
}
// Botao  Mostrar explicação

// Verbos no index
const buttonMostrar = document.getElementById("buttonMostrar");
const mostrar = document.getElementById("mostrar");

buttonMostrar.addEventListener("click", function () {
  mostrar.classList.toggle("esconder");
  if (mostrar.classList.contains("esconder")) {
    mostrar.style.maxHeight = "0";
  } else {
    mostrar.style.maxHeight = mostrar.scrollHeight + "px";
  }
});

// const buttonMostrarFrases = document.getElementById("buttonMostrarFrases");
// const mostrarFrases = document.getElementById("mostrarFrases");

// buttonMostrarFrases.addEventListener("click", function () {
//   mostrarFrases.classList.toggle("esconderFrases");
//   if (mostrarFrases.classList.contains("esconderFrases")) {
//     mostrarFrases.style.maxHeight = "0";
//   } else {
//     mostrarFrases.style.maxHeight = mostrarFrases.scrollHeight + "px";
//   }
// });

//Segundo Botão 02
const buttonMostrar02 = document.getElementById("buttonMostrar02");
const mostrar02 = document.getElementById("mostrar02");

buttonMostrar02.addEventListener("click", function () {
  mostrar02.classList.toggle("esconder02");
  if (mostrar02.classList.contains("esconder02")) {
    mostrar02.style.maxHeight = "0";
  } else {
    mostrar02.style.maxHeight = mostrar02.scrollHeight + "px";
  }
});

//  Terceiro Botão 03
const buttonMostrar03 = document.getElementById("buttonMostrar03");
const mostrar03 = document.getElementById("mostrar03");
buttonMostrar03.addEventListener("click", function () {
  mostrar03.classList.toggle("esconder03");
  if (mostrar03.classList.contains("esconder03")) {
    mostrar03.style.maxHeight = "0";
  } else {
    mostrar03.style.maxHeight = mostrar03.scrollHeight + "px";
  }
});

// Mostrar card Ergo Proxy
const btnErgoproxyMostrar = document.getElementById("btnErgoproxyMostrar");
const mostrarErgo = document.getElementById("mostrarErgo");

btnErgoproxyMostrar.addEventListener("click", function () {
  mostrarErgo.classList.toggle("esconderErgo");
  if (mostrarErgo.classList.contains("esconderErgo")) {
    mostrarErgo.style.maxHeight = "0";
  } else {
    mostrarErgo.style.maxHeight = mostrarErgo.scrollHeight + "px";
  }
});


// CARDS FRASES
// const buttonMostrarFrases = document.getElementById("buttonMostrarFrases");
// const mostrarFrase = document.getElementById("mostrarFrase");

// buttonMostrarFrases.addEventListener("click", function () {
//   mostrarFrase.classList.toggle("esconder");
//   if (mostrarFrase.classList.contains("esconder")) {
//     mostrarFrase.style.maxHeight = "0";
//   } else {
//     mostrarFrase.style.maxHeight = mostrarFrase.scrollHeight + "px";
//   }
// });


//  PDF para imagen da Tabela Hiragana

// const buttonMostrar = document.getElementById('buttonMostrar');
// const mostrar = document.getElementById('mostrar');

//  buttonMostrar.addEventListener('click', function(){
//   mostrar.classList.toggle('esconder');
//   if (mostrar.classList.contains('esconder')) {
//    mostrar.style.maxHeight = "0";
//  } else {
//    mostrar.style.maxHeight = mostrar.scrollHeight + "px";
//  }
// });

// document.addEventListener('click', function(e){
//   if (!buttonMostrar.contains(e.target) && !mostrar.contains(e.target)){
//     mostrar.classList.add("esconder");
//     mostrar.style.maxHeight = "0";
//  }
// });

//function playPause(){
// if(count == 0){
//   count = 1;
//  audio.play();
// }else{
//   count = 0;
//   audio.pause();
