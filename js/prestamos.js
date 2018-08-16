$(document).ready(function () {
	Materialize.updateTextFields();
	inicio();
	$("#btnRegistrarCredito").click(registrarCredito);
});

function inicio () {
	cargarProductos="1";
	$.post('php/Prestamos/intermediario.php',{cargarProductos:cargarProductos},
		function(data){
			//console.log(data);
			$("#productos").html(data);
		}); 
	pagarCredito();
}

function pagarCredito () {
	$.post('php/Prestamos/intermediario.php',{pagarCredito:"1"},
		function(data){
			//console.log(data);
			$("#pagarCredito").html(data);
		});
}

function registrarCredito () {
	var producto=$("input:radio[name=rbProductos]:checked").val();
	var cantidad=$("#rangoCantidadCredito").val();
	var nombre=$("#txtNombre").val();
	var direccion=$("#txtDireccion").val();
	var observacion=$("#txtObservacion").val();
	//console.log("prod:"+producto+" cantidad: "+cantidad+" nombre: "+nombre+" direccion: "+direccion);
	if (producto==null) {
		Materialize.toast("Selecciona un producto!",4000);
	}else{
		if (nombre=="" || direccion=="") {
			Materialize.toast("Llena todos los campos!",3000);
		}else{
			$.post('php/Prestamos/intermediario.php',{regCredito:"1",producto:producto,cantidad:cantidad,nombre:nombre,direccion:direccion,observacion:observacion},
		function(data){
			Materialize.toast(data,4000);
			pagarCredito();
			//$("#productos").html(data);
		}); 
		}
	}
}

function pagar (argument) {
	
	$.post('php/Prestamos/intermediario.php',{pago:"1",id_credito:argument},
		function(data){
			Materialize.toast(data,4000);
			inicio();
		}); 
}




function solonumeros(e){
		var key=window.Event ? e.which : e.keyCode
		return(key >=48 && key <=57)
	}