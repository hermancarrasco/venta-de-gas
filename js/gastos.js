$(document).ready(function () {
	Materialize.updateTextFields();
	inicio();
});

function inicio () {
	cargarProductos="1";
	$.post('php/Gastos/intermediario.php',{cargarProductos:cargarProductos},
		function(data){
			if (data=="") {
			$("#contenedorCards").html("Ya registraste los gastos del día");	
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
	gasto=$("#txtGasto"+argument).val();
	obs=$("#txtObservacion"+argument).val();
	if (gasto!="") {
		$("#txtGasto"+argument).attr("disabled","disabled");
		$("#txtObservacion"+argument).attr("disabled","disabled");
		$("#btn"+argument).attr("disabled","disabled");
	$("#btn"+argument).addClass("btn disabled");
	console.log("id: "+id+" Gasto: "+gasto);
	$.post('php/Gastos/intermediario.php',{gasto:"1",id:id,gasto:gasto,obs:obs},
		function(data){
			//console.log(data);
			Materialize.toast(data,4000);
		}); 
	} else {
		Materialize.toast("Ingresa el gasto del día",4000);
	}
	

	
	
}