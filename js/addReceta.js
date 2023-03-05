function agregarIngrediente() {
    var ingrediente = document.createElement("div");
    ingrediente.innerHTML = `
        <br>
        <label for="nombre">Ingrediente: </label>
        <input type="text" id="nombre" name="nombre" required autofocus>
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>
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