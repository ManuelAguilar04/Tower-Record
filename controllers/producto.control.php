<?php 

require_once('models/productos.model.php');

function run(){
	$viewData = array();
	$mododesc = array(
		"INS"=>"Nuevo Producto",
		"UPD"=>"Actualizar Producto",
		"DEL"=>"Eliminar Producto",
		"DSP"=>"Detalle de ",
	);
	$viewData["mode"] = "";
	$viewData["prdcod"] = "";

	if (isset($_GET["mode"])) {
		$viewData["mode"] = $_GET["mode"];
	}

	if (isset($_GET["prdcod"])) {
		$viewData["prdcod"] = $_GET["prdcod"];
	}

	switch ($viewData["mode"]) {
		case 'INS':
			
			break;
		case 'UPD':
			
			break;
		case 'DEL':
			
			break;
		case 'DSP':

			break;	
		
		default:
			redirectWithMessage("Accion No Disponible","index.php?=productos");
			
	}
		if ($viewData["modedesc"] !== "INS") {
			$producto = obtenerProductoXCodigo($viewData["prdcod"]);
			mergeFullArrayTo($producto, $viewData);
			# code...
		}
		$viewData["mododesc"] = $mododesc[$viewData["mode"]];




	renderizar("producto", $viewData);
}

run();

 ?>