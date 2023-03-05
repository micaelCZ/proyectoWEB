<!DOCTYPE html>
<html>

<head>
  <title>Reportes</title>
  <link rel="icon" type="image/png" href="../img/logo.png"/>
    
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estilo1.css">
  <link rel="icon" type="image/png" href="../img/logo.png" />
</head>

<body>
  <header>
    <div class="navbar-container">
    </div>
  </header>
  <?php
require('fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../img/logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Lista de ordenes de producción',0,0,'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
    }

    // Tabla
    function Tabla()
    {
        //Conexión a la base de datos
        $db = new PDO('sqlite:../db/materiaPrima.db');

        //Consulta para obtener los productos
        $query = "SELECT * FROM receta";
        $result = $db->query($query);

        // Encabezados
        $this->SetFont('Arial','B',12);
        $this->Cell(10,7,'ID',1,0,'C');
        $this->Cell(25,7,'Codigo',1,0,'C');
        $this->Cell(60,7,'Nombre de Pastel',1,0,'C');
        $this->Cell(40,7,'Producto',1,0,'C');
        $this->Cell(25,7,'Cantidad',1,0,'C');
        $this->Ln();

        // Datos
        $this->SetFont('Arial','',12);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->Cell(10,6,$row['id'],1,0,'C');
            $this->Cell(25,6,$row['codigo'],1,0,'C');
            $this->Cell(60,6,$row['npastel'],1,0,'L');
            $this->Cell(40,6,$row['producto'],1,0,'L');
            $this->Cell(25,6,$row['cantidad'],1,0,'C');
            $this->Ln();
        }

        //Cerrar la conexión a la base de datos
        $db = null;
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Tabla();
$pdf->Output();
?>

  <script src="../js/fechaHora.js"></script>
  <footer id="pie">
    <p>Pastelería Le Postré © 2023 - Todos los derechos reservados</p>
  </footer>
   
</body>
<!-- Script que carga la barra de navegación-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function () {
    $('.navbar-container').load('navbar.html');
  });
</script>

</html>