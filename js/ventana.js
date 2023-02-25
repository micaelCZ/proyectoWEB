function mostrarMensaje(mensaje) {
    var mensajeTexto = document.getElementById("mensaje-texto");
    mensajeTexto.innerHTML = mensaje;
    var mensajeDiv = document.getElementById("mensaje");
    mensajeDiv.style.display = "block";
  }
  
  function cerrarMensaje() {
    var mensajeDiv = document.getElementById("mensaje");
    mensajeDiv.style.display = "none";
  }