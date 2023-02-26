//obtener datos del archivo json
fetch('../json/proveedores.json')
  .then(response => response.json())
  .then(data => {
    //inserta salto de línea en el json
    const jsonStr = JSON.stringify(data, null, 4);

    // crear tabla y agregar datos
    const tableBody = document.querySelector('#proveedores-table tbody');
    const busquedaInput = document.querySelector('#busqueda');
    const filas = [];
    data.forEach(proveedores => {
      const row = document.createElement('tr');
      const nombreCell = document.createElement('td');
      nombreCell.textContent = proveedores.nombre;
      row.appendChild(nombreCell);
      const direccionCell = document.createElement('td');
      direccionCell.textContent = proveedores.direccion;
      row.appendChild(direccionCell);
      const telefonoCell = document.createElement('td');
      telefonoCell.textContent = proveedores.telefono;
      row.appendChild(telefonoCell);
      const correoCell = document.createElement('td');
      correoCell.textContent = proveedores.correo;
      row.appendChild(correoCell);
      filas.push(row);
      tableBody.appendChild(row);
    });

    // función para filtrar las filas de la tabla según el valor de búsqueda
    function filtrar() {
      const valorBusqueda = busquedaInput.value.toLowerCase().trim();
      filas.forEach(fila => {
        const ocultar = !fila.textContent.toLowerCase().includes(valorBusqueda);
        fila.style.display = ocultar ? 'none' : '';
      });
    }

    // agregar evento de entrada a la barra de búsqueda para filtrar la tabla
    busquedaInput.addEventListener('input', filtrar);
  });
// JavaScript Document