<?php 

require('formulario.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ALTA PRODUCTO</title>
<!-- <link href="estilos.css" rel="stylesheet" type="text/css"> -->
</head>

<body>
<div class="group">
  <!-- <form action="registro.php" method="POST"> -->
  <form id='altaProducto' class='' data-insertar>
  <center>
  <h2><em>ALTA DE PRODUCTO</em></h2>
  <br>

  <div style="text-align: center; font-size: 25px; border: 1px solid #1565C0;">
  General
  </div>
  <br>

  </center>
                                <div class="row">
                                    <center>
                                    <?php 
                                    $classVista  = new Vista();
                                    $vista  = $classVista->altaPrueba();
                                    echo $vista;

                                     ?>
                                       
                                    </center>
                                </div>
   <!-- <br>
     <center> <input class="form-btn" name="guardar" type="submit" onclick="agregarProductosp()" value="Guardar"/></center>
    </p>-->
  </form> 
</div>
</body>
</html>