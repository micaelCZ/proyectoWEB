
     // Obtener el elemento con id "fecha-hora"**
     var contenedor = document.getElementById("fecha-hora");

     // Obtener el elemento hijo con etiqueta "time"**
     var tiempo = contenedor.querySelector("time");

     // Crear una función que actualice la fecha y hora cada segundo**
     function actualizarFechaHora() {

       // Crear un objeto de fecha con la fecha y hora actuales**
       var fecha = new Date();

       // Obtener los componentes de la fecha y hora**
       var año = fecha.getFullYear();
       var mes = (fecha.getMonth() + 1).toString().padStart(2, "0"); // Los meses empiezan en 0**
       var dia = fecha.getDate().toString().padStart(2, "0");
       var hora = fecha.getHours().toString().padStart(2, "0");
       var minuto = fecha.getMinutes().toString().padStart(2, "0");
       var segundo = fecha.getSeconds().toString().padStart(2, "0");

       // Formatear la fecha y hora según el estándar ISO 8601 (YYYY-MM-DDThh:mm:ss)**
       var formatoISO = año + "-" + mes + "-" + dia + "&nbsp;&nbsp;&nbsp;Hora:" + hora + ":" + minuto + ":" + segundo;

       // Escribir la fecha y hora en el atributo datetime del elemento time
       tiempo.setAttribute("datetime", formatoISO);

       // Escribir la fecha y hora en el contenido del elemento time
       tiempo.innerHTML = formatoISO;
     }

     // Llamar a la función una vez al cargar la página
     actualizarFechaHora();

     // Llamar a la función cada segundo usando setInterval
     setInterval(actualizarFechaHora, 1000);