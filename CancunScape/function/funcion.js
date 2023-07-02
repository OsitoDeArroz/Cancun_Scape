const carousel = document.querySelector('.carousel');
const slides = carousel.querySelector('.slides');

let currentSlide = 0;
const totalSlides = slides.children.length;

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlide();
}

function previousSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlide();
}

function updateSlide() {
  slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

setInterval(nextSlide, 5000);
