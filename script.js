let slideIndex = 0;
carousel();

function carousel() {
  let i;
  const slides = document.getElementsByClassName("slides")[0].getElementsByTagName("img");

  // Esconde todas as imagens
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slideIndex++;

  // Volta para a primeira imagem se chegar ao final
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  // Mostra a imagem atual e define um intervalo para trocar as imagens
  slides[slideIndex - 1].style.display = "block";
  setTimeout(carousel, 3000); // Muda a imagem a cada 2 segundos (2000 milissegundos)
}
