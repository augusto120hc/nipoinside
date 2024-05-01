//
//Segundo blobo de cards escondidos
// Seleciona o elemento HTML com o ID "buttonMostrarFrases" e o armazena na variável buttonMostrarFrases
// cards 02 Shimasu
const buttonMostrarFrases = document.getElementById("buttonMostrarFrases");
// Seleciona o elemento HTML com o ID "frasesEscondidas" e o armazena na variável frasesEscondidas
const frasesEscondidas = document.getElementById("frasesEscondidas");
// Adiciona um ouvinte de evento de clique ao elemento buttonMostrarFrases
buttonMostrarFrases.addEventListener("click", function () {
  // Verifica se a classe "esconderFrases" está presente no elemento frasesEscondidas e a alterna
  if (frasesEscondidas.classList.toggle("esconderFrases")) {
    // Se a classe "esconderFrases" estiver presente, define a altura máxima do elemento frasesEscondidas como "0" para ocultá-lo
    frasesEscondidas.style.maxHeight = "0";
  } else {
    // Se a classe "esconderFrases" não estiver presente, define a altura máxima do elemento frasesEscondidas como a altura total do elemento para exibi-lo
    frasesEscondidas.style.maxHeight = frasesEscondidas.scrollHeight + "px";
  }
});

//Terceiro bloco de cards escondidos
// Seleciona o elemento HTML com o ID "buttonMostrarFrases03" e o armazena na variável buttonMostrarFrases03
// cards 03 TAbemasu
const buttonMostrarFrases03 = document.getElementById("buttonMostrarFrases03");
const frasesEscondidas03 = document.getElementById("frasesEscondidas03");
buttonMostrarFrases03.addEventListener("click", function () {
  if (frasesEscondidas03.classList.toggle("esconderFrases")) {
    frasesEscondidas03.style.maxHeight = "0";
  } else {
    frasesEscondidas03.style.maxHeight = frasesEscondidas03.scrollHeight + "px";
  }
});
// cards 04 miru
const buttonMostrarFrases04 = document.getElementById("buttonMostrarFrases04");
const frasesEscondidas04 = document.getElementById("frasesEscondidas04");
buttonMostrarFrases04.addEventListener("click", function () {
  if (frasesEscondidas04.classList.toggle("esconderFrases")) {
    frasesEscondidas04.style.maxHeight = "0";
  } else {
    frasesEscondidas04.style.maxHeight = frasesEscondidas04.scrollHeight + "px";
  }
});
// cards 05 Hanasu
const buttonMostrarFrases05 = document.getElementById("buttonMostrarFrases05");
const frasesEscondidas05 = document.getElementById("frasesEscondidas05");
buttonMostrarFrases05.addEventListener("click", function(){
  if(frasesEscondidas05.classList.toggle("esconderFrases")){
frasesEscondidas05.style.maxHeight = "0";
  }else{
    frasesEscondidas05.style.maxHeight = frasesEscondidas05.scrollHeight + "px" ;
  }
});
// cards 06 Ikimasu
let buttonMostrarFrases06 = document.getElementById("buttonMostrarFrases06");
const frasesEscondidas06 = document.getElementById("frasesEscondidas06");
buttonMostrarFrases06.addEventListener("click", function(){
if(frasesEscondidas06.classList.toggle("esconderFrases")){
  frasesEscondidas06.style.maxHeight = "0";
}else {
  frasesEscondidas06.style.maxHeight = frasesEscondidas06.scrollHeight + "px";
}
});
// cards 07 Kaku
let buttonMostrarFrases07 = document.getElementById("buttonMostrarFrases07");
const frasesEscondidas07 = document.getElementById("frasesEscondidas07");
buttonMostrarFrases07.addEventListener("click", function(){
  if(frasesEscondidas07.classList.toggle("esconderFrases")){
    frasesEscondidas07.style.maxHeight = "0";
  }else{
    frasesEscondidas07.style.maxHeight = frasesEscondidas07.scrollHeight + "px";
  }
});
// cards 08 Kau
let buttonMostrarFrases08 = document.getElementById("buttonMostrarFrases08");
const frasesEscondidas08 = document.getElementById("frasesEscondidas08");
buttonMostrarFrases08.addEventListener("click", function(){
  if(frasesEscondidas08.classList.toggle("esconderFrases")){
    frasesEscondidas08.style.maxHeight = "0";
  }else{
    frasesEscondidas08.style.maxHeight = frasesEscondidas08.scrollHeight + "px";
  }
});
// cards 09 Matsu
let buttonMostrarFrases09 = document.getElementById("buttonMostrarFrases09");
const frasesEscondidas09 = document.getElementById("frasesEscondidas09");
buttonMostrarFrases09.addEventListener("click", function(){
  if(frasesEscondidas09.classList.toggle("esconderFrases")){
    frasesEscondidas09.style.maxHeight = "0";
  }else{
    frasesEscondidas09.style.maxHeight = frasesEscondidas09.scrollHeight + "px";
  }
});
// cards 10 Shiru
let buttonMostrarFrases10 = document.getElementById("buttonMostrarFrases10");
const frasesEscondidas10 = document.getElementById("frasesEscondidas10");
buttonMostrarFrases10.addEventListener("click", function(){
  if(frasesEscondidas10.classList.toggle("esconderFrases")){
    frasesEscondidas10.style.maxHeight = "0";
  }else{
    frasesEscondidas10.style.maxHeight = frasesEscondidas10.scrollHeight + "px";
  }
})
// -------------------------

// __________________________________________________

// PLay de audios
// CARDS frases verbo kimasu 1
// verbo kimasu 1
let audioKimasu01 = new Audio("audio/audioFrases/01kimasu.mp3");
function play01() {
  audioKimasu01.play();
}
function playLento01() {
  audioKimasu01.playbackRate = 0.7;
  audioKimasu01.play();
}
// Verbo kimasu 2
let audioKimasu02 = new Audio("audio/audioFrases/02kimasu.mp3");
function play02() {
  audioKimasu02.playbackRate = 0.9;
  audioKimasu02.play();
}
function playLento02() {
  audioKimasu02.playbackRate = 0.7;
  audioKimasu02.play();
}
// Verbo kimasu 3
let audioKimasu03 = new Audio("audio/audioFrases/03kimasu.mp3");
function play03() {
  audioKimasu03.playbackRate = 1;
  audioKimasu03.play();
}
function playLento03() {
  audioKimasu03.playbackRate = 0.8;
  audioKimasu03.play();
}
// Verbo kimasu 4
let audioKimasu04 = new Audio("audio/audioFrases/04Kimasu.mp3");
function play04() {
  audioKimasu04.playbackRate = 1;
  audioKimasu04.play();
}
function playLento04() {
  audioKimasu04.playbackRate = 0.7;
  audioKimasu04.play();
}
// verbo kimasu 5
let audioKimasu05 = new Audio("audio/audioFrases/05kimasu.mp3");
function play05() {
  audioKimasu05.playbackRate = 1;
  audioKimasu05.play();
}
function playLento05() {
  audioKimasu05.playbackRate = 0.7;
  audioKimasu05.play();
}
// Vewrbo kimasu 6
let audioKimasu06 = new Audio("audio/audioFrases/06kimasu.mp3");
function play06() {
  audioKimasu01.playbackRate = 1;
  audioKimasu06.play();
}
function playLento06() {
  audioKimasu06.playbackRate = 0.8;
  audioKimasu06.play();
}
// verbo kimasu 7
let audioKimasu07 = new Audio("audio/audioFrases/07kimasu.mp3");
function play07() {
  audioKimasu07.playbackRate = 1;
  audioKimasu07.play();
}
function playLento07() {
  audioKimasu07.playbackRate = 0.7;
  audioKimasu07.play();
}
// verbo kimasu 8
let audioKimasu08 = new Audio("audio/audioFrases/08kimasu.mp3");
function play08() {
  audioKimasu08.playbackRate = 1;
  audioKimasu08.play();
}
function playLento08() {
  audioKimasu08.playbackRate = 0.7;
  audioKimasu08.play();
}
// Segunda parte de cards Verbo Tsukurimasu e Shimasu 2
// verbo shimasu 1
let audioShimasu09 = new Audio("audio/audioFrases/09shimasu.mp3");
function play09() {
  audioShimasu09.playbackRate = 1;
  audioShimasu09.play();
}
function playLento09() {
  audioShimasu09.playbackRate = 0.7;
  audioShimasu09.play();
}
// verbo shimasu 2
let audioShimasu10 = new Audio("audio/audioFrases/10shimasu.mp3");
function play10() {
  audioShimasu10.playbackRate = 1;
  audioShimasu10.play();
}
function playLento10() {
  audioShimasu10.playbackRate = 0.7;
  audioShimasu10.play();
}
// verbo shimasu 3
let audioShimasu11 = new Audio("audio/audioFrases/11shimasu.mp3");
function play11() {
  audioShimasu11.playbackRate = 1;
  audioShimasu11.play();
}
function playLento11() {
  audioShimasu11.playbackRate = 0.7;
  audioShimasu11.play();
}
// verbo shimasu 4
let audioShimasu12 = new Audio("audio/audioFrases/12shimasu.mp3");
function play12() {
  audioShimasu12.playbackRate = 1;
  audioShimasu12.play();
}
function playLento12() {
  audioShimasu12.playbackRate = 0.7;
  audioShimasu12.play();
}
// verbo shimasu 5
let audioShimasu13 = new Audio("audio/audioFrases/13shimasu.mp3");
function play13() {
  audioShimasu13.playbackRate = 1;
  audioShimasu13.play();
}
function playLento13() {
  audioShimasu13.playbackRate = 0.7;
  audioShimasu13.play();
}
// verbo shimasu 6
let audioShimasu14 = new Audio("audio/audioFrases/14shimasu.mp3");
function play14() {
  audioShimasu14.playbackRate = 1;
  audioShimasu14.play();
}
function playLento14() {
  audioShimasu14.playbackRate = 0.7;
  audioShimasu14.play();
}
// verbo shimasu 7
let audioShimasu15 = new Audio("audio/audioFrases/15shimasu.mp3");
function play15() {
  audioShimasu15.playbackRate = 1;
  audioShimasu15.play();
}
function playLento15() {
  audioShimasu15.playbackRate = 0.7;
  audioShimasu15.play();
}
// verbo shimasu 8
let audioShimasu16 = new Audio("audio/audioFrases/16shimasu.mp3");
function play16() {
  audioShimasu16.playbackRate = 1;
  audioShimasu16.play();
}
function playLento16() {
  audioShimasu16.playbackRate = 0.7;
  audioShimasu16.play();
}
// verbo shimasu 9
let audioShimasu17 = new Audio("audio/audioFrases/17shimasu.mp3");
function play17() {
  audioShimasu17.playbackRate = 1;
  audioShimasu17.play();
}
function playLento17() {
  audioShimasu17.playbackRate = 0.7;
  audioShimasu17.play();
}
// verbo shimasu 10
let audioShimasu18 = new Audio("audio/audioFrases/18shimasu.mp3");
function play18() {
  audioShimasu18.playbackRate = 1;
  audioShimasu18.play();
}
function playLento18() {
  audioShimasu18.playbackRate = 0.7;
  audioShimasu18.play();
}
// verbo shimasu 11
let audioShimasu19 = new Audio("audio/audioFrases/19shimasu.mp3");
function play19() {
  audioShimasu19.playbackRate = 1;
  audioShimasu19.play();
}
function playLento19() {
  audioShimasu19.playbackRate = 0.7;
  audioShimasu19.play();
}
// verbo shimasu 12
let audioShimasu20 = new Audio("audio/audioFrases/20shimasu.mp3");
function play20() {
  audioShimasu20.playbackRate = 1;
  audioShimasu20.play();
}
function playLento20() {
  audioShimasu20.playbackRate = 0.7;
  audioShimasu20.play();
}
// verbo shimasu 13
let audioShimasu21 = new Audio("audio/audioFrases/21shimasu.mp3");
function play21() {
  audioShimasu21.playbackRate = 1;
  audioShimasu21.play();
}
function playLento21() {
  audioShimasu21.playbackRate = 0.7;
  audioShimasu21.play();
}
// verbo shimasu 14
let audioShimasu22 = new Audio("audio/audioFrases/22shimasu.mp3");
function play22() {
  audioShimasu22.playbackRate = 1;
  audioShimasu22.play();
}
function playLento22() {
  audioShimasu22.playbackRate = 0.7;
  audioShimasu22.play();
}

// Terceira parte de cards Verbo Taberu 3
// verbo taberu 1
let audioTaberu23 = new Audio("audio/audioFrases/23taberu.mp3");
function play23() {
  audioTaberu23.playbackRate = 1;
  audioTaberu23.play();
}
function playLento23() {
  audioTaberu23.playbackRate = 0.7;
  audioTaberu23.play();
}
// verbo taberu 2
let audioTaberu24 = new Audio("audio/audioFrases/24taberu.mp3");
function play24() {
  audioTaberu24.playbackRate = 1;
  audioTaberu24.play();
}
function playLento24() {
  audioTaberu24.playbackRate = 0.7;
  audioTaberu24.play();
}
// verbo taberu 3
let audioTaberu25 = new Audio("audio/audioFrases/25taberu.mp3");
function play25() {
  audioTaberu25.playbackRate = 1;
  audioTaberu25.play();
}
function playLento25() {
  audioTaberu25.playbackRate = 0.7;
  audioTaberu25.play();
}
// verbo taberu 4
let audioTaberu26 = new Audio("audio/audioFrases/26taberu.mp3");
function play26() {
  audioTaberu26.playbackRate = 1;
  audioTaberu26.play();
}
function playLento26() {
  audioTaberu26.playbackRate = 0.7;
  audioTaberu26.play();
}

// verbo taberu 5
let audioTaberu27 = new Audio("audio/audioFrases/27taberu.mp3");
function play27() {
  audioTaberu27.playbackRate = 1;
  audioTaberu27.play();
}
function playLento27() {
  audioTaberu27.playbackRate = 0.7;
  audioTaberu27.play();
}
// verbo taberu 6
let audioTaberu28 = new Audio("audio/audioFrases/28taberu.mp3");
function play28() {
  audioTaberu28.playbackRate = 1;
  audioTaberu28.play();
}
function playLento28() {
  audioTaberu28.playbackRate = 0.7;
  audioTaberu28.play();
}
// verbo taberu 7
let audioTaberu29 = new Audio("audio/audioFrases/29taberu.mp3");
function play29() {
  audioTaberu29.playbackRate = 1;
  audioTaberu29.play();
}
function playLento29() {
  audioTaberu29.playbackRate = 0.7;
  audioTaberu29.play();
}
// verbo taberu 8
let audioTaberu30 = new Audio("audio/audioFrases/30taberu.mp3");
function play30() {
  audioTaberu30.playbackRate = 1;
  audioTaberu30.play();
}
function playLento30() {
  audioTaberu30.playbackRate = 0.7;
  audioTaberu30.play();
}
// verbo taberu 9
let audioTaberu31 = new Audio("audio/audioFrases/31taberu.mp3");
function play31() {
  audioTaberu31.playbackRate = 1;
  audioTaberu31.play();
}
function playLento31() {
  audioTaberu31.playbackRate = 0.7;
  audioTaberu31.play();
}
// verbo taberu 10
let audioTaberu32 = new Audio("audio/audioFrases/32taberu.mp3");
function play32() {
  audioTaberu32.playbackRate = 1;
  audioTaberu32.play();
}
function playLento32() {
  audioTaberu32.playbackRate = 0.7;
  audioTaberu32.play();
}
// verbo taberu 11
let audioTaberu33 = new Audio("audio/audioFrases/33taberu.mp3");
function play33() {
  audioTaberu33.playbackRate = 1;
  audioTaberu33.play();
}
function playLento33() {
  audioTaberu33.playbackRate = 0.7;
  audioTaberu33.play();
}
// verbo taberu 12
let audioTaberu34 = new Audio("audio/audioFrases/34taberu.mp3");
function play34() {
  audioTaberu34.playbackRate = 1;
  audioTaberu34.play();
}
function playLento34() {
  audioTaberu34.playbackRate = 0.7;
  audioTaberu34.play();
}
// Quarta parte de cards Verbo Miru 4
// verbo miru 1
let audioMiru35 = new Audio("audio/audioFrases/35miru.mp3");
function play35() {
  audioMiru35.playbackRate = 1;
  audioMiru35.play();
}
function playLento35() {
  audioMiru35.playbackRate = 0.7;
  audioMiru35.play();
}
// verbo miru 2
let audioMiru36 = new Audio("audio/audioFrases/36miru.mp3");
function play36() {
  audioMiru36.playbackRate = 1;
  audioMiru36.play();
}
function playLento36() {
  audioMiru36.playbackRate = 0.7;
  audioMiru36.play();
}
// verbo miru 3
let audioMiru37 = new Audio("audio/audioFrases/37miru.mp3");
function play37() {
  audioMiru37.playbackRate = 1;
  audioMiru37.play();
}
function playLento37() {
  audioMiru37.playbackRate = 0.7;
  audioMiru37.play();
}
// verbo miru 4
let audioMiru38 = new Audio("audio/audioFrases/38miru.mp3");
function play38() {
  audioMiru38.playbackRate = 1;
  audioMiru38.play();
}
function playLento38() {
  audioMiru38.playbackRate = 0.7;
  audioMiru38.play();
}
// verbo miru 5
let audioMiru39 = new Audio("audio/audioFrases/39miru.mp3");
function play39() {
  audioMiru39.playbackRate = 1;
  audioMiru39.play();
}
function playLento39() {
  audioMiru39.playbackRate = 0.7;
  audioMiru39.play();
}
// verbo miru 6
let audioMiru40 = new Audio("audio/audioFrases/40miru.mp3");
function play40() {
  audioMiru40.playbackRate = 1;
  audioMiru40.play();
}
function playLento40() {
  audioMiru40.playbackRate = 0.7;
  audioMiru40.play();
}
// verbo miru 7
let audioMiru41 = new Audio("audio/audioFrases/41miru.mp3");
function play41() {
  audioMiru41.playbackRate = 1;
  audioMiru41.play();
}
function playLento41() {
  audioMiru41.playbackRate = 0.7;
  audioMiru41.play();
}
// verbo miru 8
let audioMiru42 = new Audio("audio/audioFrases/42miru.mp3");
function play42() {
  audioMiru42.playbackRate = 1;
  audioMiru42.play();
}
function playLento42() {
  audioMiru42.playbackRate = 0.7;
  audioMiru42.play();
}
// verbo miru 9
let audioMiru43 = new Audio("audio/audioFrases/43miru.mp3");
function play43() {
  audioMiru43.playbackRate = 1;
  audioMiru43.play();
}
function playLento43() {
  audioMiru43.playbackRate = 0.7;
  audioMiru43.play();
}
// verbo miru 10
let audioMiru44 = new Audio("audio/audioFrases/44miru.mp3");
function play44() {
  audioMiru44.playbackRate = 1;
  audioMiru44.play();
}
function playLento44() {
  audioMiru44.playbackRate = 0.7;
  audioMiru44.play();
}
// verbo miru 11
let audioMiru45 = new Audio("audio/audioFrases/45miru.mp3");
function play45() {
  audioMiru45.playbackRate = 1;
  audioMiru45.play();
}
function playLento45() {
  audioMiru45.playbackRate = 0.7;
  audioMiru45.play();
}

// Quarta parte de cards Verbo HANASU 5
// verbo hanasu 1
let audioHanasu46 = new Audio("audio/audioFrases/46hanasu.mp3");
function play46() {
  audioHanasu46.playbackRate = 1;
  audioHanasu46.play();
}
function playLento46() {
  audioHanasu46.playbackRate = 0.7;
  audioHanasu46.play();
}
// verbo hanasu 2
let audioHanasu47 = new Audio("audio/audioFrases/47hanasu.mp3");
function play47() {
  audioHanasu47.playbackRate = 1;
  audioHanasu47.play();
}
function playLento47() {
  audioHanasu47.playbackRate = 0.7;
  audioHanasu47.play();
}
// verbo hanasu 3
let audioHanasu48 = new Audio("audio/audioFrases/48hanasu.mp3");
function play48() {
  audioHanasu48.playbackRate = 1;
  audioHanasu48.play();
}
function playLento48() {
  audioHanasu48.playbackRate = 0.7;
  audioHanasu48.play();
}
// verbo hanasu 4
let audioHanasu49 = new Audio("audio/audioFrases/49hanasu.mp3");
function play49() {
  audioHanasu49.playbackRate = 1;
  audioHanasu49.play();
}
function playLento49() {
  audioHanasu49.playbackRate = 0.7;
  audioHanasu49.play();
}
// verbo hanasu 6
let audioHanasu50 = new Audio("audio/audioFrases/50hanasu.mp3");
function play50() {
  audioHanasu50.playbackRate = 1;
  audioHanasu50.play();
}
function playLento50() {
  audioHanasu50.playbackRate = 0.7;
  audioHanasu50.play();
}
// verbo hanasu 7
let audioHanasu51 = new Audio("audio/audioFrases/51hanasu.mp3");
function play51() {
  audioHanasu51.playbackRate = 1;
  audioHanasu51.play();
}
function playLento51() {
  audioHanasu51.playbackRate = 0.7;
  audioHanasu51.play();
}
// verbo hanasu 8
let audioHanasu52 = new Audio("audio/audioFrases/52hanasu.mp3");
function play52() {
  audioHanasu52.playbackRate = 1;
  audioHanasu52.play();
}
function playLento52() {
  audioHanasu52.playbackRate = 0.8;
  audioHanasu52.play();
}
// verbo hanasu 8
let audioHanasu53 = new Audio("audio/audioFrases/53hanasu.mp3");
function play53() {
  audioHanasu52.playbackRate = 1;
  audioHanasu53.play();
}
function playLento53() {
  audioHanasu53.playbackRate = 0.8;
  audioHanasu53.play();
}
// verbo hanasu 9
let audioHanasu54 = new Audio("audio/audioFrases/54hanasu.mp3");
function play54() {
  audioHanasu54.playbackRate = 1;
  audioHanasu54.play();
}
function playLento54() {
  audioHanasu54.playbackRate = 0.8;
  audioHanasu54.play();
}
// Quarta parte de cards Verbo IKIMASU 6
// verbo ikimasu 1
let audioIkimasu55 = new Audio("audio/audioFrases/55ikimasu.mp3");
function play55() {
  audioIkimasu55.playbackRate = 1;
  audioIkimasu55.play();
}
function playLento55() {
  audioIkimasu55.playbackRate = 0.7;
  audioIkimasu55.play();
}
// verbo ikimasu 2
let audioIkimasu56 = new Audio("audio/audioFrases/56ikimasu.mp3");
function play56() {
  audioIkimasu56.playbackRate = 1;
  audioIkimasu56.play();
}
function playLento56() {
  audioIkimasu56.playbackRate = 0.7;
  audioIkimasu56.play();
}
// verbo ikimasu 3
let audioIkimasu57 = new Audio("audio/audioFrases/57ikimasu.mp3");
function play57() {
  audioIkimasu57.playbackRate = 1;
  audioIkimasu57.play();
}
function playLento57() {
  audioIkimasu57.playbackRate = 0.7;
  audioIkimasu57.play();
}
// verbo ikimasu 4
let audioIkimasu58 = new Audio("audio/audioFrases/58ikimasu.mp3");
function play58() {
  audioIkimasu58.playbackRate = 1;
  audioIkimasu58.play();
}
function playLento58() {
  audioIkimasu58.playbackRate = 0.7;
  audioIkimasu58.play();
}
// verbo ikimasu 5
let audioIkimasu59 = new Audio("audio/audioFrases/59ikimasu.mp3");
function play59() {
  audioIkimasu59.playbackRate = 1;
  audioIkimasu59.play();
}
function playLento59() {
  audioIkimasu59.playbackRate = 0.7;
  audioIkimasu59.play();
}
// verbo ikimasu 6
let audioIkimasu60 = new Audio("audio/audioFrases/60ikimasu.mp3");
function play60() {
  audioIkimasu60.playbackRate = 1;
  audioIkimasu60.play();
}
function playLento60() {
  audioIkimasu60.playbackRate = 0.7;
  audioIkimasu60.play();
}
// verbo ikimasu 7
let audioIkimasu61 = new Audio("audio/audioFrases/61ikimasu.mp3");
function play61() {
  audioIkimasu61.playbackRate = 1;
  audioIkimasu61.play();
}
function playLento61() {
  audioIkimasu61.playbackRate = 0.8;
  audioIkimasu61.play();
}
// verbo ikimasu 8
let audioIkimasu62 = new Audio("audio/audioFrases/62ikimasu.mp3");
function play62() {
  audioIkimasu62.playbackRate = 1;
  audioIkimasu62.play();
}
function playLento62() {
  audioIkimasu62.playbackRate = 0.8;
  audioIkimasu62.play();
}
// Quarta parte de cards Verbo KAKU 7
// verbo kaku 1
let audioKaku63 = new Audio("audio/audioFrases/63kaku.mp3");
function play63() {
  audioKaku63.playbackRate = 1;
  audioKaku63.play();
}
function playLento63() {
  audioKaku63.playbackRate = 0.7;
  audioKaku63.play();
}
// verbo kaku 2
let audioKaku64 = new Audio("audio/audioFrases/64kaku.mp3");
function play64() {
  audioKaku64.playbackRate = 1;
  audioKaku64.play();
}
function playLento64() {
  audioKaku64.playbackRate = 0.7;
  audioKaku64.play();
}
// verbo kaku 3
let audioKaku65 = new Audio("audio/audioFrases/65kaku.mp3");
function play65() {
  audioKaku65.playbackRate = 1;
  audioKaku65.play();
}
function playLento65() {
  audioKaku65.playbackRate = 0.7;
  audioKaku65.play();
}
// verbo kaku 4
let audioKaku66 = new Audio("audio/audioFrases/66kaku.mp3");
function play66() {
  audioKaku66.playbackRate = 1;
  audioKaku66.play();
}
function playLento66() {
  audioKaku66.playbackRate = 0.7;
  audioKaku66.play();
}
// verbo kaku 5
let audioKaku67 = new Audio("audio/audioFrases/67kaku.mp3");
function play67() {
  audioKaku67.playbackRate = 1;
  audioKaku67.play();
}
function playLento67() {
  audioKaku67.playbackRate = 0.7;
  audioKaku67.play();
}
// verbo kaku 6
let audioKaku68 = new Audio("audio/audioFrases/68kaku.mp3");
function play68() {
  audioKaku68.playbackRate = 1;
  audioKaku68.play();
}
function playLento68() {
  audioKaku68.playbackRate = 0.7;
  audioKaku68.play();
}
// verbo kaku 7
let audioKaku69 = new Audio("audio/audioFrases/69kaku.mp3");
function play69() {
  audioKaku69.playbackRate = 1;
  audioKaku69.play();
}
function playLento69() {
  audioKaku69.playbackRate = 0.7;
  audioKaku69.play();
}
// Quarta parte de cards Verbo KAU 8
// verbo kau 1
let audioKau70 = new Audio("audio/audioFrases/70kau.mp3");
function play70() {
  audioKau70.playbackRate = 0.9;
  audioKau70.play();
}
function playLento70() {
  audioKau70.playbackRate = 0.7;
  audioKau70.play();
}
// verbo kau 2
let audioKau71 = new Audio("audio/audioFrases/71kau.mp3");
function play71() {
  audioKau71.playbackRate = 0.9;
  audioKau71.play();
}
function playLento71() {
  audioKau71.playbackRate = 0.7;
  audioKau71.play();
}
// verbo kau 3
let audioKau72 = new Audio("audio/audioFrases/72kau.mp3");
function play72() {
  audioKau72.playbackRate = 0.9;
  audioKau72.play();
}
function playLento72() {
  audioKau72.playbackRate = 0.7;
  audioKau72.play();
}
// verbo kau 4
let audioKau73 = new Audio("audio/audioFrases/73kau.mp3");
function play73() {
  audioKau73.playbackRate = 0.9;
  audioKau73.play();
}
function playLento73() {
  audioKau73.playbackRate = 0.7;
  audioKau73.play();
}
// verbo kau 5
let audioKau74 = new Audio("audio/audioFrases/74kau.mp3");
function play74() {
  audioKau74.playbackRate = 0.9;
  audioKau74.play();
}
function playLento74() {
  audioKau74.playbackRate = 0.7;
  audioKau74.play();
}
// verbo kau 6
let audioKau75 = new Audio("audio/audioFrases/75kau.mp3");
function play75() {
  audioKau75.playbackRate = 0.9;
  audioKau75.play();
}
function playLento75() {
  audioKau75.playbackRate = 0.7;
  audioKau75.play();
}
// verbo kau 7
let audioKau76 = new Audio("audio/audioFrases/76kau.mp3");
function play76() {
  audioKau76.playbackRate = 0.9;
  audioKau76.play();
}
function playLento76() {
  audioKau76.playbackRate = 0.7;
  audioKau76.play();
}
// verbo kau 8
let audioKau77 = new Audio("audio/audioFrases/77kau.mp3");
function play77() {
  audioKau77.playbackRate = 0.9;
  audioKau77.play();
}
function playLento77() {
  audioKau77.playbackRate = 0.7;
  audioKau77.play();
}
// Quarta parte de cards Verbo MATSU 9
// verbo matsu 1
let audioMatsu78 = new Audio("audio/audioFrases/78matsu.mp3");
function play78() {
  audioMatsu78.playbackRate = 1;
  audioMatsu78.play();
}
function playLento78() {
  audioMatsu78.playbackRate = 0.7;
  audioMatsu78.play();
}
// verbo matsu 2
let audioMatsu79 = new Audio("audio/audioFrases/79matsu.mp3");
function play79() {
  audioMatsu79.playbackRate = 1;
  audioMatsu79.play();
}
function playLento79() {
  audioMatsu79.playbackRate = 0.7;
  audioMatsu79.play();
}
// verbo matsu 3
let audioMatsu80 = new Audio("audio/audioFrases/80matsu.mp3");
function play80() {
  audioMatsu80.playbackRate = 1;
  audioMatsu80.play();
}
function playLento80() {
  audioMatsu80.playbackRate = 0.7;
  audioMatsu80.play();
}
// verbo matsu 4
let audioMatsu81 = new Audio("audio/audioFrases/81matsu.mp3");
function play81() {
  audioMatsu81.playbackRate = 1;
  audioMatsu81.play();
}
function playLento81() {
  audioMatsu81.playbackRate = 0.7;
  audioMatsu81.play();
}
// verbo matsu 5
let audioMatsu82 = new Audio("audio/audioFrases/82matsu.mp3");
function play82() {
  audioMatsu82.playbackRate = 1;
  audioMatsu82.play();
}
function playLento82() {
  audioMatsu82.playbackRate = 0.7;
  audioMatsu82.play();
}
// verbo matsu 6
let audioMatsu83 = new Audio("audio/audioFrases/83matsu.mp3");
function play83() {
  audioMatsu83.playbackRate = 1;
  audioMatsu83.play();
}
function playLento83() {
  audioMatsu83.playbackRate = 0.7;
  audioMatsu83.play();
}
// verbo matsu 7
let audioMatsu84 = new Audio("audio/audioFrases/84matsu.mp3");
function play84() {
  audioMatsu84.playbackRate = 1;
  audioMatsu84.play();
}
function playLento84() {
  audioMatsu84.playbackRate = 0.7;
  audioMatsu84.play();
}
// verbo matsu 8
let audioMatsu85 = new Audio("audio/audioFrases/85matsu.mp3");
function play85() {
  audioMatsu85.playbackRate = 1;
  audioMatsu85.play();
}
function playLento85() {
  audioMatsu85.playbackRate = 0.7;
  audioMatsu85.play();
}
// verbo matsu 9
let audioMatsu86 = new Audio("audio/audioFrases/86matsu.mp3");
function play86() {
  audioMatsu86.playbackRate = 1;
  audioMatsu86.play();
}
function playLento86() {
  audioMatsu86.playbackRate = 0.7;
  audioMatsu86.play();
}
// Quarta parte de cards Verbo SHIRU 10
// verbo shiru 1
let audioShiru87 = new Audio("audio/audioFrases/87shiru.mp3");
function play87() {
  audioShiru87.playbackRate = 1;
  audioShiru87.play();
}
function playLento87() {
  audioShiru87.playbackRate = 0.7;
  audioShiru87.play();
}
let audioShiru88 = new Audio("audio/audioFrases/88shiru.mp3");
function play88(){
  audioShiru88.playbackRate = 1;
  audioShiru88.play();
}
function playLento88(){
  audioShiru88.playbackRate = 0.6;
  audioShiru88.play()
}
let audioShiru89 = new Audio("audio/audioFrases/89shiru.mp3");
function play89(){
  audioShiru89.playbackRate = 1;
  audioShiru89.play();
}
function playLento89(){
  audioShiru89.playbackRate = 0.7;
  audioShiru89.play();
}
let audioShiru90 = new Audio("audio/audioFrases/90shiru.mp3");
function play90(){
  audioShiru90.playbackRate = 1;
  audioShiru90.play();
}
function playLento90(){
  audioShiru90.playbackRate = 0.7;
  audioShiru90.play();
}
let audioShiru91 = new Audio("audio/audioFrases/91shiru.mp3");
function play91(){
  audioShiru91.playbackRate = 1;
  audioShiru91.play();
}
function playLento91(){
  audioShiru91.playbackRate = 0.7;
  audioShiru91.play();
}
let audioShiru92 = new Audio("audio/audioFrases/92shiru.mp3");
function play92(){
  audioShiru92.playbackRate = 1;
  audioShiru92.play();
}
function playLento92(){
  audioShiru92.playbackRate = 0.7;
  audioShiru92.play();
}
let audioShiru93 = new Audio("audio/audioFrases/93shiru.mp3");
function play93(){
  audioShiru93.playbackRate = 1;
  audioShiru93.play();
}
function playLento93(){
  audioShiru93.playbackRate = 0.7;
  audioShiru93.play();
}
let audioShiru94 = new Audio("audio/audioFrases/94shiru.mp3");
function play94(){
  audioShiru94.playbackRate = 1;
  audioShiru94.play();
}
function playLento94(){
  audioShiru94.playbackRate = 0.7;
  audioShiru94.play();
}
