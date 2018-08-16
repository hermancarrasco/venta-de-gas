<?php 
require_once("clase.php");
    $c= new BaseDeDatos();
    $c->conectarBD();


if (isset($_POST["cargarProductos"])) {
	
	$c->cargarProductos();
}
if (isset($_POST["regCredito"])) {
	$producto=$_POST["producto"];
	$cantidad=$_POST["cantidad"];
	$nombre=$_POST["nombre"];
	$direccion=$_POST["direccion"];
	$observacion=$_POST["observacion"];
	$c->registrarPrestamo($producto,$cantidad,$nombre,$direccion,$observacion);
}
if (isset($_POST["pagarCredito"])) {
	$c->devolverPedido();	
}
if (isset($_POST["pago"])) {
	$c->actualizarDevelto($_POST["id_credito"]);	
}

?>