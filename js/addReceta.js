function agregarIngrediente() {
    var ingrediente = document.createElement("div");
    ingrediente.innerHTML = `
        <br>
        <label for="nombre">Ingrediente: </label>
        <input type="text" id="nombre" name="nombre" required autofocus>
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" step= "0.1" name="cantidad" required>
        <br>
        <label for="unidad">Unidad de medida:</label>
        <select id="unidad" name="unidad">
            <option value="kg">Kilogramos (kg)</option>
            <option value="gr">Gramos (gr)</option>
            <option value="l">Litros (l)</option>
            <option value="ml">Mililitros (ml)</option>
            <option value="ml">Unidad (u)</option>
        </select>
        <br>
        <label for="fecha_vencimiento">Fecha de vencimiento:</label>
        <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" required>
        <br>
        <br>
    `;
    document.getElementById("ingredientes").appendChild(ingrediente);
  }
  
  

var nombre = ingrediente.querySelector('#nombre').value;
var cantidad = ingrediente.querySelector('#cantidad').value;
var unidad = ingrediente.querySelector('#unidad').value;
var fecha_vencimiento = ingrediente.querySelector('#fecha_vencimiento').value;

var db = new SQL.Database();
var query = "INSERT INTO recetaspasteles (nombrep, precio, ingrediente, cantidad, unidad, fecha_vencimiento) VALUES (?, ?, ?, ?, ?, ?)";

db.run(query, [nombrePastel, precioPastel, nombre, cantidad, unidad, fecha_vencimiento]);



var xhr = new XMLHttpRequest();
xhr.open('GET', '../db/materiaPrima.db', true);
xhr.responseType = 'arraybuffer';
xhr.onload = function(e) {
    var uInt8Array = new Uint8Array(this.response);
    var db = new SQL.Database(uInt8Array);

    // Aquí puedes insertar los datos en la tabla
};
xhr.send();

