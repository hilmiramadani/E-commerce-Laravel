// JavaScript for Carousel
const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel-button-next');
const prevButton = document.querySelector('.carousel-button-prev');

let currentIndex = 0;

function updateSlidePosition() {
    // Set the track position based on the current slide
    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

function goToNextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlidePosition();
}

function goToPreviousSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlidePosition();
}

nextButton.addEventListener('click', goToNextSlide);
prevButton.addEventListener('click', goToPreviousSlide);

// Auto-slide every 3 seconds
setInterval(goToNextSlide, 3000);

// Adjust position on window resize
window.addEventListener('resize', updateSlidePosition);