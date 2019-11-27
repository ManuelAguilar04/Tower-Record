<?php 
	require_once 'models/productos.model.php';
	function run(){
		$viewData = array();
		$viewData["username"] = "Manuel Aguilar";
		$viewData["productos"] = obtenerTodosProductos();
		renderizar("productos", $viewData);
}

run();

 ?>