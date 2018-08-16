<?php 
require_once("clase.php");
    $c= new BaseDeDatos();
    $c->conectarBD();


if (isset($_POST["cargarProductos"])) {
	
	$c->cargarProductos();
}
if (isset($_POST["venta"])) {
	$id=$_POST["id"];
	$cantidad=$_POST["cantidad"];
	$precio=$_POST["precio"];

	$c->registrarVenta($id,$cantidad,$precio);
}


?>