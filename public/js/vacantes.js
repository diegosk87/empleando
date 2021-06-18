$(function validar(){
    titulo = document.getElementById("titulo").value;
    $(".btnActionnn").on('click',function(){

        titulo = $(".titulo").val();
        if(titulo.length==0){
            alert("Ingrese titulo de vacante");
        }



    });


});