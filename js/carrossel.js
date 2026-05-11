let indice = 0;
const slides = document.querySelectorAll('.slide');

setInterval(() => {
    slides[indice].classList.remove('ativo');
    indice = (indice + 1) % slides.length;
    slides[indice].classList.add('ativo');
}, 5000);