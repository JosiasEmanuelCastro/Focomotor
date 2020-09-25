// En restablecer.html, cambiar la pagina cuando se clickea el boton "Restablecer mi contraseña"

var resetPassButton = document.getElementById('focom-resetPass-button');

resetPassButton.addEventListener('click', function() {
    document.getElementById('focom-resetPass-restore').className = ('d-none');
    document.getElementById('focom-resetPass-sendMail').className = (' ');

});