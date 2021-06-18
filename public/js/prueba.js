var nomb = document.getElementById('txt-nomb');
var pass = document.getElementById("txt-pass");
var eror = document.getElementById('error');
errror.style.color = 'red';

function registrouser(){

    var mensajeError = [];
    if(nomb.value === null || nomb.value === ''){
        mensajeError.push('Ingresa tu nombre');
    }
    error.innerHTML = mensajeError.join(', ');
    
    return false;
}


if(){
    
}