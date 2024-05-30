// --------navbar---------
let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.nav-list');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}

// -------SlideShow-------
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// scripts.js

document.addEventListener("DOMContentLoaded", function() {
    const formContainer = document.querySelector(".container");

    // Apply initial animation
    formContainer.style.opacity = 0;
    formContainer.style.transform = "translateY(-20px)";
    formContainer.style.transition = "opacity 0.5s ease, transform 0.5s ease";

    // Trigger animation
    setTimeout(() => {
        formContainer.style.opacity = 1;
        formContainer.style.transform = "translateY(0)";
    }, 100);

    // Add a hover effect for the button
    const submitButton = document.querySelector(".btn-primary");
    submitButton.addEventListener("mouseenter", function() {
        submitButton.style.transform = "scale(1.05)";
    });

    submitButton.addEventListener("mouseleave", function() {
        submitButton.style.transform = "scale(1)";
    });
});




