

function abrirModal(){
  let d = document.getElementById("contenedor-modal");
  d.setAttribute("class", "js_mostrar");
}

function cerrarModal(){
  let d = document.getElementById("contenedor-modal");
    d.setAttribute("class", "contenedor-modal");
}

function abrirModalM(){
  let d = document.getElementById("contenedor-modal__masiv");
  d.setAttribute("class", "js_mostrar");
}

function cerrarModalM(){
  let d = document.getElementById("contenedor-modal__masiv");
    d.setAttribute("class", "contenedor-modal");
}
