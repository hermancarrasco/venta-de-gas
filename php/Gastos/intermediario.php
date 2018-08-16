<?php 
require_once("clase.php");
    $c= new BaseDeDatos();
    $c->conectarBD();


if (isset($_POST["cargarProductos"])) {
	
	$c->cargarProductos();
}


if (isset($_POST["gasto"])) {
	$id=$_POST["id"];
	$gasto=$_POST["gasto"];
	$observacion=$_POST["obs"];
	$c->registrarGasto($id,$gasto,$observacion);
}

if (isset($_POST["pagarCredito"])) {
	$c->pagarCredito();	
}
if (isset($_POST["pago"])) {
	$c->actualizarCredito($_POST["id_credito"]);	
}

?>