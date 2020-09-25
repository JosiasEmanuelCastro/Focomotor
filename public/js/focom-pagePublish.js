// publish.html
// Ejemplo: https://developer.mozilla.org/es/docs/Web/API/FileReader/readAsDataURL
// Permite previsualizar las imagenes cargadas y eliminaras para remplazarlas por

// El codigo de las imagenes es el mismo que el de IMAGEN PRINCIPAL, solo cambian el nombre de las variables


// IMAGEN PRINCIPAL:
// BEGIN
var imageInput1 = document.getElementById("focom-inputImage1"); // Toma el input image
var imageChange1 = document.getElementById("focom-imagePreview1"); // Toma el img preview
var imageDelete1 = document.getElementById('focom-image-icon-delete1'); // Toma el botton para eliminar

document.getElementById("focom-inputButtom1").addEventListener("click", function() {
    imageInput1.click(); // Cuando se le hace click al boton de ejecuta el input image 
});

imageInput1.addEventListener("change", imagePreview1); // Cuando un archivo se suba en el input ejecuta la funcion imagePreview

function imagePreview1() {
    var imageObject1 = this.files[0];
    var imageReader1 = new FileReader();
    imageReader1.readAsDataURL(imageObject1);

    imageReader1.onload = function() {
        var imageResult1 = imageReader1.result;
        imageChange1.src = (imageResult1);
    };

    // Crear el boton de eliminar
    imageDelete1.className = "fas fa-times-circle focom-image-icon-delete text-danger";
}

// Cuando se le hace click al boton de eliminar el preview, y el boton desaparece.
imageDelete1.addEventListener("click", function() {
    imageChange1.src = (' ');
    imageDelete1.className = (' ');
});
//END


// MAS IMAGENES:
// IMAGEN 2
// BEGIN
var imageInput2 = document.getElementById("focom-inputImage2"); // Toma el input image
var imageChange2 = document.getElementById("focom-imagePreview2"); // Toma el img preview
var imageDelete2 = document.getElementById('focom-image-icon-delete2'); // Toma el botton para eliminar

document.getElementById("focom-inputButtom2").addEventListener("click", function() {
    imageInput2.click(); // Cuando se le hace click al boton de ejecuta el input image 
});

imageInput2.addEventListener("change", imagePreview2); // Cuando un archivo se suba en el input ejecuta la funcion imagePreview

function imagePreview2() {
    var imageObject2 = this.files[0];
    var imageReader2 = new FileReader();
    imageReader2.readAsDataURL(imageObject2);

    imageReader2.onload = function() {
        var imageResult2 = imageReader2.result;
        imageChange2.src = (imageResult2);
    };

    // Crear el boton de eliminar
    imageDelete2.className = "fas fa-times-circle focom-image-icon-delete text-danger";
}

// Cuando se le hace click al boton de eliminar el preview, y el boton desaparece.
imageDelete2.addEventListener("click", function() {
    imageChange2.src = (' ');
    imageDelete2.className = (' ');
});
//END

// IMAGEN 3
// BEGIN
var imageInput3 = document.getElementById("focom-inputImage3"); // Toma el input image
var imageChange3 = document.getElementById("focom-imagePreview3"); // Toma el img preview
var imageDelete3 = document.getElementById('focom-image-icon-delete3'); // Toma el botton para eliminar

document.getElementById("focom-inputButtom3").addEventListener("click", function() {
    imageInput3.click(); // Cuando se le hace click al boton de ejecuta el input image 
});

imageInput3.addEventListener("change", imagePreview3); // Cuando un archivo se suba en el input ejecuta la funcion imagePreview

function imagePreview3() {
    var imageObject3 = this.files[0];
    var imageReader3 = new FileReader();
    imageReader3.readAsDataURL(imageObject3);

    imageReader3.onload = function() {
        var imageResult3 = imageReader3.result;
        imageChange3.src = (imageResult3);
    };

    // Crear el boton de eliminar
    imageDelete3.className = "fas fa-times-circle focom-image-icon-delete text-danger";
}

// Cuando se le hace click al boton de eliminar el preview, y el boton desaparece.
imageDelete3.addEventListener("click", function() {
    imageChange3.src = (' ');
    imageDelete3.className = (' ');
});
//END

// IMAGEN 4
// BEGIN
var imageInput4 = document.getElementById("focom-inputImage4"); // Toma el input image
var imageChange4 = document.getElementById("focom-imagePreview4"); // Toma el img preview
var imageDelete4 = document.getElementById('focom-image-icon-delete4'); // Toma el botton para eliminar

document.getElementById("focom-inputButtom4").addEventListener("click", function() {
    imageInput4.click(); // Cuando se le hace click al boton de ejecuta el input image 
});

imageInput4.addEventListener("change", imagePreview4); // Cuando un archivo se suba en el input ejecuta la funcion imagePreview

function imagePreview4() {
    var imageObject4 = this.files[0];
    var imageReader4 = new FileReader();
    imageReader4.readAsDataURL(imageObject4);

    imageReader4.onload = function() {
        var imageResult4 = imageReader4.result;
        imageChange4.src = (imageResult4);
    };

    // Crear el boton de eliminar
    imageDelete4.className = "fas fa-times-circle focom-image-icon-delete text-danger";
}

// Cuando se le hace click al boton de eliminar el preview, y el boton desaparece.
imageDelete4.addEventListener("click", function() {
    imageChange4.src = (' ');
    imageDelete4.className = (' ');
});
//END

// IMAGEN 5
// BEGIN
var imageInput5 = document.getElementById("focom-inputImage5"); // Toma el input image
var imageChange5 = document.getElementById("focom-imagePreview5"); // Toma el img preview
var imageDelete5 = document.getElementById('focom-image-icon-delete5'); // Toma el botton para eliminar

document.getElementById("focom-inputButtom5").addEventListener("click", function() {
    imageInput5.click(); // Cuando se le hace click al boton de ejecuta el input image 
});

imageInput5.addEventListener("change", imagePreview5); // Cuando un archivo se suba en el input ejecuta la funcion imagePreview

function imagePreview5() {
    var imageObject5 = this.files[0];
    var imageReader5 = new FileReader();
    imageReader5.readAsDataURL(imageObject5);

    imageReader5.onload = function() {
        var imageResult5 = imageReader5.result;
        imageChange5.src = (imageResult5);
    };

    // Crear el boton de eliminar
    imageDelete5.className = "fas fa-times-circle focom-image-icon-delete text-danger";
}

// Cuando se le hace click al boton de eliminar el preview, y el boton desaparece.
imageDelete5.addEventListener("click", function() {
    imageChange5.src = (' ');
    imageDelete5.className = (' ');
});
//END