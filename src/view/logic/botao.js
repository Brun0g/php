function openPopup() {
  document.getElementById("overlay").style.display = "block";
}

function closePopup() {
  document.getElementById("overlay").style.display = "none";
}
function teste() {
  document.getElementById("overlay1").style.display = "block";
}

function closeListaProdutos() {
  document.getElementById("overlay1").style.display = "none";
}
function openPopup1() {
  document.getElementById("overlay3").style.display = "block";
}

function closePopup1() {
  document.getElementById("overlay3").style.display = "none";
}

function openPopup2() {
  document.getElementById("overlay2").style.display = "block";
}

function closePopup2() {
  document.getElementById("overlay2").style.display = "none";
}
document.getElementById("botao").addEventListener("submit", function (event) {
  event.preventDefault();
});
document.getElementById("botao1").addEventListener("submit", function (event) {
  event.preventDefault();
});
document.getElementById("botao2").addEventListener("submit", function (event) {
  event.preventDefault();
});
