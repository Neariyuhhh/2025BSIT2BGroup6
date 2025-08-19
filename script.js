let slideIndex = 1;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
let autoSlideInterval = setInterval(() => plusSlides(1), 3000);

showSlides(slideIndex);

function plusSlides(n) {
  clearInterval(autoSlideInterval);
  showSlides(slideIndex += n);
  autoSlideInterval = setInterval(() => plusSlides(1), 3000);
}

function currentSlide(n) {
  clearInterval(autoSlideInterval);
  showSlides(slideIndex = n);
  autoSlideInterval = setInterval(() => plusSlides(1), 3000);
}

function showSlides(n) {
  if (n > slides.length) { 
    slideIndex = 1; 
  }
  if (n < 1) { 
    slideIndex = slides.length; 
  }

  slides.forEach(s => s.style.display = "none");
  dots.forEach(d => d.classList.remove("active"));

  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].classList.add("active");
}

document.querySelector(".prev").addEventListener("click", () => plusSlides(-1));
document.querySelector(".next").addEventListener("click", () => plusSlides(1));

dots.forEach((dot, idx) => {
  dot.addEventListener("click", () => currentSlide(idx + 1));
});

document.getElementById('logout-button').addEventListener('click', function() {
  window.location.href = 'login.html';
});