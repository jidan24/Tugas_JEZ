const clientInfinity = document.querySelector('.client-infinity');
const clientInner = document.querySelector('.client-inner');
const Myimg = document.getElementById("Myimg");
let isMouseOver = false;
let startX;
let scrollLeft;


// CAROUSEL

document.addEventListener('DOMContentLoaded', function () {
    const sliderInner = document.querySelector('.slider-inner');
    const sliderItems = document.querySelectorAll('.slider-item');
    const prevButton = document.querySelector('.slider-prev');
    const nextButton = document.querySelector('.slider-next');
    let currentIndex = 0;
    let autoSlideInterval;

    // Function to update slider position
    function updateSliderPosition() {
        if (currentIndex >= sliderItems.length) {
            currentIndex = 0;
        } else if (currentIndex < 0) {
            currentIndex = sliderItems.length - 1;
        }
        sliderInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Function to handle auto slide
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            currentIndex++;
            updateSliderPosition();
        }, 5000); // 5 seconds interval
    }

    // Event listeners for navigation buttons
    prevButton.addEventListener('click', () => {
        currentIndex--;
        updateSliderPosition();
    });

    nextButton.addEventListener('click', () => {
        currentIndex++;
        updateSliderPosition();
    });

    // Start auto slide when the page loads
    startAutoSlide();
});


//OUR BRAND STOP WHEN CURSOR COMING IN IMAGE
clientInfinity.addEventListener('mouseover', () => {
    clientInfinity.classList.add('paused');
    isMouseOver = true;
});

clientInfinity.addEventListener('mouseout', () => {
    clientInfinity.classList.remove('paused');
    isMouseOver = false;
});

clientInfinity.addEventListener('mousedown', (e) => {
    if (isMouseOver) {
        e.preventDefault();
        startX = e.pageX - clientInfinity.offsetLeft;
        scrollLeft = clientInfinity.scrollLeft;
        clientInfinity.classList.add('scrolling');
        document.addEventListener('mousemove', handleMouseMove);
        document.addEventListener('mouseup', () => {
            clientInfinity.classList.remove('scrolling');
            document.removeEventListener('mousemove', handleMouseMove);
        });
    }
});

function handleMouseMove(e) {
    if (isMouseOver) {
        const x = e.pageX - clientInfinity.offsetLeft;
        const walk = (x - startX) * 2; // Scroll-fast
        clientInfinity.scrollLeft = scrollLeft - walk;
    }
}

//ONCLICK
function myFunction() {
    alert("aku adalah brand" + Myimg );
  }

