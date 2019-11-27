<?php 

require_once 'libs/dao.php';

function obtenerTodosProductos(){
	/*$conn = new mysqlli('server','user','pswd', 'db', 'port');
	if ($conn->errno > 0) {
		die();
	}

	$cursor = $conn->query("select * from productos;");
	$productos = array();
	if ($cursor) {
		foreach ($cursor as $registro) {
			$productos[] = $registro;
		}
	}

	return $productos
	*/

	$productos = array();
	$productos = obtenerRegistros("select * from productos");
	return $productos;

	}


	function obtenerProductoXCodigo($prdcod){
		$sqlstr = 'select * from productos where prdcod=%d;';
		$producto = array();
		$producto = obtenerUnRegistro(
			sprintf($sqlstr, $prdcod)
		);	

		return $producto;
	}

	function agregarNuevoProducto($prddsc, $prdprc){
		$sqlIns = "insert into products(prddsc, prdprc) value ('%s', %f);";
		$result = ejecutarNonQuery(
			sprintf(
				$sql,
				$prddsc,
				floatval($pr)
			)
		);

		if($result > 0){
			return getLastInsertId();
	}else{
		return 0;
	}
}

 ?>
