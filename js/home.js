// Navbar start
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})

// Navbar end

// Inventory start
function openModal() {
    if (screen.width > 450) {
        document.getElementById("myModal").style.display = "block";
    }
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}

var lightboxOnResize = function lightboxOnResize() {
    if ($(window).width() < 450) {
        $('a[rel="lightbox"]')
            .removeProp('rel')
            .addClass('lightboxRemoved');
    } else {
        $('a.lightboxRemoved').prop('rel', 'lightbox');
    }
}

$(document).ready(lightboxOnResize);
$(window).resize(lightboxOnResize);

// Inventory end