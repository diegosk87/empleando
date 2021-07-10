$(".fa1minus").click(function(){
    $('.datos-laborales').slideUp(1000);
  });
  $(".fa1plus").click(function(){
    $('.datos-laborales').slideDown(1000);
  });

  $(".fa2minus").click(function(){
    $('.datos-personales').slideUp(1000);
  });
  $(".fa2plus").click(function(){
    $('.datos-personales').slideDown(1000);
  });
  $(".fa3minus").click(function(){
    $('.historial-laboral').slideUp(1000);
  });
  $(".fa3plus").click(function(){
    $('.historial-laboral').slideDown(1000);
  });
  $(".fa4minus").click(function(){
    $('.datos-complementarios').slideUp(1000);
  });
  $(".fa4plus").click(function(){
    $('.datos-complementarios').slideDown(1000);
  });

  $(".fa5minus").click(function(){
    $('.contEscolaridad').slideUp(1000);
  });
  $(".fa5plus").click(function(){
    $('.contEscolaridad').slideDown(1000);
  });
  $(".fa6minus").click(function(){
    $('.beneficios').slideUp(1000);
  });
  $(".fa6plus").click(function(){
    $('.beneficios').slideDown(1000);
  });

/*   function ocultar (jQuery){
      $('.datos-personales').hide();
      $('.historial-laboral').hide();
      $('.datos-laborales').hide();
      $('.datos-complementarios').hide();
  }
$(window).on("load",ocultar); */

function clonarInstitucion(){
  var origen = document.getElementById('container-institucion');
  var datosEscolares = document.getElementById('contenedorEscolaridad');
  var clon = origen.cloneNode(true);

  datosEscolares.appendChild(clon);

}

function clonarTrabajos(){
  var origen = document.getElementById('trabajos');
  var datosLaborales = document.getElementById('datos-laborales');
  var clon = origen.cloneNode(true);

  datosLaborales.appendChild(clon);
}

function clonarCertificaciones(){
  var origen = document.getElementById('certificaciones');
  var datosComplementarios = document.getElementById('contenedor-complementarios');
  var clon = origen.cloneNode(true);

  datosComplementarios.appendChild(clon);
}

function clonarPrestaciones(){
  var origen = document.getElementById('prestaciones');
  var datosComplementarios = document.getElementById('beneficios-clonar');
  var clon = origen.cloneNode(true);

  datosComplementarios.appendChild(clon);
}

