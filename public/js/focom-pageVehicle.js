// Este codigo añade el funcionamientos extra a los
// carruseles de images de vehiculo.html


// BEGIN
// Funcionabilidades para el Carrusel de imagenes

function resetCarouselImages() {

    var resetImage1 = document.getElementById('slide1');
    if (resetImage1 != null) {
        resetImage1.className = ('carousel-item');
    };
    var resetImage2 = document.getElementById('slide2');
    if (resetImage2 != null) {
        resetImage2.className = ('carousel-item');
    };
    var resetImage3 = document.getElementById('slide3');
    if (resetImage3 != null) {
        resetImage3.className = ('carousel-item');
    };
    var resetImage4 = document.getElementById('slide4');
    if (resetImage4 != null) {
        resetImage4.className = ('carousel-item');
    };
    var resetImage5 = document.getElementById('slide5');
    if (resetImage5 != null) {
        resetImage5.className = ('carousel-item');
    };


}

slide1 = document.getElementById('image1');
slide1.addEventListener("click", function() {
    resetCarouselImages();
    document.getElementById('slide1').classList.add('active');
})

slide2 = document.getElementById('image2');
slide2.addEventListener("click", function() {
    resetCarouselImages();
    document.getElementById('slide2').classList.add('active');
})

slide3 = document.getElementById('image3');
slide3.addEventListener("click", function() {
    resetCarouselImages();
    document.getElementById('slide3').classList.add('active');
})

slide4 = document.getElementById('image4');
slide4.addEventListener("click", function() {
    resetCarouselImages();
    document.getElementById('slide4').classList.add('active');
})

slide5 = document.getElementById('image5');
slide5.addEventListener("click", function() {
    resetCarouselImages();
    document.getElementById('slide5').classList.add('active');
})
// END

// BEGIN
// Funcionabilidades para las Imagenes A Full Width

function resetSlideFullImages() {

    var resetFullImage1 = document.getElementById('fullImage1');
    if (resetFullImage1 != null) {
        resetFullImage1.className = ('carousel-item focomjsClose');
    };
    var resetFullImage2 = document.getElementById('fullImage2');
    if (resetFullImage2 != null) {
        resetFullImage2.className = ('carousel-item focomjsClose');
    };
    var resetFullImage3 = document.getElementById('fullImage3');
    if (resetFullImage3 != null) {
        resetFullImage3.className = ('carousel-item focomjsClose');
    };
    var resetFullImage4 = document.getElementById('fullImage4');
    if (resetFullImage4 != null) {
        resetFullImage4.className = ('carousel-item focomjsClose');
    };
    var resetFullImage5 = document.getElementById('fullImage5');
    if (resetFullImage5 != null) {
        resetFullImage5.className = ('carousel-item focomjsClose');
    };
}

document.getElementById('slide1').addEventListener('click', function() {
    resetSlideFullImages();
    document.getElementById('fullImage1').classList.add('active');
})
document.getElementById('slide2').addEventListener('click', function() {
    resetSlideFullImages();
    document.getElementById('fullImage2').classList.add('active');
})
document.getElementById('slide3').addEventListener('click', function() {
    resetSlideFullImages();
    document.getElementById('fullImage3').classList.add('active');
})
document.getElementById('slide4').addEventListener('click', function() {
    resetSlideFullImages();
    document.getElementById('fullImage4').classList.add('active');
})
document.getElementById('slide5').addEventListener('click', function() {
    resetSlideFullImages();
    document.getElementById('fullImage5').classList.add('active');
})

// END