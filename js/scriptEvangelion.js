const btnEvangelionMostrar = document.getElementById("btnEvangelionMostrar");
const mostrarEvangelion = document.getElementById("mostrarEvangelion");

btnEvangelionMostrar.addEventListener("click", function () {
  mostrarEvangelion.classList.toggle("esconderEvangelion");
  if (mostrarEvangelion.classList.contains("esconderEvangelion")) {
    mostrarEvangelion.style.maxHeight = "0";
  } else {
    mostrarEvangelion.style.maxHeight = mostrarEvangelion.scrollHeight + "px";
  }
});
