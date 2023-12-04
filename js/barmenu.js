// Linea indicadora en la barra de menu
var marker = document.querySelector("#marker");
var item = document.querySelectorAll("nav a");

console.log(item);

function indicator(e) {
  marker.style.left = e.offsetLeft + "px";
  marker.style.width = e.offsetWidth + "px";
}

item.forEach((link) => {
  link.addEventListener("click", (e) => {
    indicator(e.target);
  });
});

// Ocultar barra de menu con scroll hacia abajo
let ubicacionPrincipal = window.scrollY;
window.onscroll = function () {
  let Desplazamiento_Actual = window.scrollY;
  if (ubicacionPrincipal >= Desplazamiento_Actual) {
    document.getElementById("nav").style.top = "0";
  } else {
    document.getElementById("nav").style.top = "-140px";
  }
  ubicacionPrincipal = Desplazamiento_Actual;
};

// smooth scrolling
document.addEventListener("DOMContentLoaded", function () {
  var links = document.querySelectorAll('a[href^="#"]');

  links.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      var targetId = this.getAttribute("href").substring(1);
      var targetElement = document.getElementById(targetId);
      var speed = 500000;

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
          inline: "nearest",
        });
      }
    });
  });
});
