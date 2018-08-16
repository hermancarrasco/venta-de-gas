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
	$precio=$_POST["precio"];
	$c->registrarCredito($producto,$cantidad,$nombre,$direccion,$observacion,$precio);
}
if (isset($_POST["pagarCredito"])) {
	$c->pagarCredito();	
}
if (isset($_POST["pago"])) {
	$c->actualizarCredito($_POST["id_credito"]);	
}

?>