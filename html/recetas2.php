<!DOCTYPE html>
<html>

<head>
  <title>Recetas</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estilo1.css">
  <link rel="stylesheet" href="../css/estilo4.css">
  <link rel="icon" type="image/png" href="../img/logo.png" />
 </head>
<!--Barra de navegación-->
<header>
    <div class="navbar-container">
    </div>
  </header>
<body>
  <br>
  <br>

  <center>
    <form>
      <h2> Puedes crear una receta aquí.</h2>
      <button type="button" class="boton-agregar" onclick="window.location.href='../html/addReceta.html'">Agregar receta</button>
    </form>
  </center>


  <br>
  <br>

  <center>
    <form>
      <h2> Puedes generar un código aleatorio aquí. También puedes ingresar un código manual en su lugar</h2><button type="button" class="boton-generar" onclick="document.getElementById('campo_codigo').value = generarCodigo1()">Generar código</button><input type="text" id="campo_codigo" name="codigo" placeholder="Presione el botón GENERAR CODIGO" style="width: 360px;">
    </form>
  </center>
  <br>
  <br>
  <br>
  <div id="receta1">
  <form action="../html/restarInventario2.php"  method="post">
    <h2>Pastel de chocolate (16 porciones)</h2>
    <center><img src="../img/pastelchocolate.png" style="width: 40%;"></center>
    <br>
    <label for="cantidad">Información de la orden:</label>
    <input type="hidden" id="producto" name="producto" value="Pastel de Chocolate">
    <input type="number" id="cantidad-pasteles" name="cantidad" min=0 required autofocus style="width: 170px;" placeholder="Cantidad de pasteles" onchange="calcularCantidadIngredientes()">
    <input type="text" id="campo_codigo" name="codigo" placeholder="Ingrese un código" style="width: 360px;">
    <!-- Ingrediente 1 -->
    <label for="nombre">Ingredientes:</label>
    
    
    
    
    <select name="nombreChocolate" id="nombre1" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Chocolate"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad1" name="cantidadChocolate" style="width: 80px;" placeholder="Cantidad" value="300" readonly>
    <select name="unidadChocolate" id="unidad1" style="width: 80px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener las unidades de los productos
      $stmt = $db->prepare('SELECT unidad FROM productos WHERE unidad = "gr"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['unidad'] . '">' . $row['unidad'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <br>
    <br>
    




    <select name="nombreMantequilla" id="nombre2" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Mantequilla"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad2" name="cantidadMantequilla" style="width: 80px;" placeholder="Cantidad" value="90" readonly>
    <select name="unidadMantequilla" id="unidad2" style="width: 80px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener las unidades de los productos
      $stmt = $db->prepare('SELECT unidad FROM productos WHERE unidad = "gr"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['unidad'] . '">' . $row['unidad'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <br>
    <br>






    <select name="nombreLecheCondensada" id="nombre3" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Leche Condensada"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad3" name="cantidadLecheCondensada" style="width: 80px;" placeholder="Cantidad" value="387" readonly>
    <select name="unidadLecheCondensada" id="unidad3" style="width: 80px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener las unidades de los productos
      $stmt = $db->prepare('SELECT unidad FROM productos WHERE unidad = "gr"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['unidad'] . '">' . $row['unidad'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <br>
    <br>






    <select name="nombreHuevos" id="nombre4" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Huevos"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad4" name="cantidadHuevos" style="width: 80px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidadHuevos" id="unidad4" style="width: 80px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener las unidades de los productos
      $stmt = $db->prepare('SELECT unidad FROM productos WHERE unidad = "gr"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['unidad'] . '">' . $row['unidad'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <br>
    <br>





    <select name="nombreHarinadeTrigo" id="nombre5" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Harina de Trigo"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad5" name="cantidadHarinadeTrigo" style="width: 80px;" placeholder="Cantidad" value="454" readonly>
    <select name="unidadHarinadeTrigo" id="unidad5" style="width: 80px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener las unidades de los productos
      $stmt = $db->prepare('SELECT unidad FROM productos WHERE unidad = "gr"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['unidad'] . '">' . $row['unidad'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <br>
    <br>






    <select name="nombreLevadura" id="nombre6" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Levadura"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad6" name="cantidadLevadura" style="width: 80px;" placeholder="Cantidad" value="10" readonly>
    <select name="unidadLevadura" id="unidad6" style="width: 80px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener las unidades de los productos
      $stmt = $db->prepare('SELECT unidad FROM productos WHERE unidad = "gr"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['unidad'] . '">' . $row['unidad'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <br>
    <br>
    
    <input type="submit" name="guardar" value="Guardar Orden">
    </form>
    <script>
    function calcularCantidadIngredientes() {
        const cantidadPasteles = document.getElementById("cantidad-pasteles").value;
        document.getElementById("cantidad1").value = cantidadPasteles *300;
        document.getElementById("cantidad2").value = cantidadPasteles *90;
        document.getElementById("cantidad3").value = cantidadPasteles *387;
        document.getElementById("cantidad4").value = cantidadPasteles *3;
        document.getElementById("cantidad5").value = cantidadPasteles *454;
        document.getElementById("cantidad6").value = cantidadPasteles *10;
    }
    </script>



<script src="../js/fechaHora.js"></script>
  <script src="../js/codigos.js"></script>
  <!-- Script que carga la barra de navegación-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function(){
      $('.navbar-container').load('navbar.html');
    });
  </script>
  
  <footer id="pie">
    <p>Pastelería Le Postré © 2023 - Todos los derechos reservados</p>
  </footer>
   
</body>

</html>