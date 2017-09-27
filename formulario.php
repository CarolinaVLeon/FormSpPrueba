<?php 
require_once "conexion.php";

/**
* 
*/
class Vista 
{
	

	function agregarProductosp()
	{
		/*Empezamos con el procedimiento de inserción*/
		/*Lo primero es crear un objeto mysqli*/
		/*$mysqli = new mysqli("servidor", "usuario", "pass", "db");*/

		$mysql = conexionSQL();
 
		$sqlerror=sqlsrv_errors();
		if (!sqlsrv_query($mysql,"CALL insertarPrueba('?','?','?','?)")) {
    	echo "Falló la llamada: (" . $sqlerror . ") " . $sqlerror;
		}
	}

	public function altaPrueba(){
	$form = "<form id='altaPrueba' class='' data-insertar method='post'>";
		$form.="<div class='form-group row'>";
	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtNombre' >Nombre:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtNombre' required>";
	    $form.="</div>";
	    $form.="<br>";                                          
                                       
	    $form.="<div class='form-group row'>";
	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtDescripcion'>Descripción:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtDescripcion' required>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtCodBarras'>Código de Barras:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtCodBarras' required>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div class='table-thing widget uib_w_13 d-margins TamaCombo1 TamCombos' data-uib='twitter%20bootstrap/input' data-ver='1'>";
	    $form.="<label class='narrow-control label-inline' for='txtPrecio'>Precio:</label>";
	    $form.="<input class='wide-control form-control default input-sm' type='text' id='txtPrecio' required>";
	    $form.="</div>";
	    $form.="<br>";

	    $form.="<div>";
	    $form.="<input class='form-btn' name='guardar' type='submit' value='Guardar'/>";
	    $form.=$this->agregarProductosp();
	    $form.="</div>";
        
                            


	$form .="</form>";
	return $form;
	}
									


}
 ?>