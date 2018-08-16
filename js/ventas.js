$(document).ready(function () {
	Materialize.updateTextFields();
	inicio();

});

function inicio () {
	cargarProductos="1";
	$.post('php/Ventas/intermediario.php',{cargarProductos:cargarProductos},
		function(data){
			if (data=="") {
			$("#contenedorCards").html("Ya registraste las ventas del día");	
		}else{
			$("#contenedorCards").html(data);
		}
		}); 
}

function solonumeros(e){
		var key=window.Event ? e.which : e.keyCode
		return(key >=48 && key <=57)
	}

function registrarDia(argument) {
	var id,cantidad,precio;

	id=$("#id"+argument).val();
	cantidad=$("#txtCantidad"+argument).val();
	precio=$("#txtPrecio"+argument).val();
	if (cantidad!="" && precio!= "") {
		$("#txtCantidad"+argument).attr("disabled","disabled");
	$("#txtPrecio"+argument).attr("disabled","disabled");
		$("#btn"+argument).attr("disabled","disabled");
	$("#btn"+argument).addClass("btn disabled");
	console.log("id: "+id+" Cantidad: "+cantidad+" Precio: "+precio);
	$.post('php/Ventas/intermediario.php',{venta:"1",id:id,cantidad:cantidad,precio:precio},
		function(data){
			//console.log(data);
			Materialize.toast(data,4000);
		}); 
	} else {
		Materialize.toast("Ingresa Cantidad y Precio",4000);
	}
		
}

function cero(e,id) {
	var key=window.Event ? e.which : e.keyCode
		if(key ==48){
			$("#txtPrecio"+id).val("0");
			console.log("cero");		
		}else{
			$("#txtPrecio"+id).val("");
		}
	
}