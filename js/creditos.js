$(document).ready(function () {
	Materialize.updateTextFields();
	inicio();
	$("#btnRegistrarCredito").click(registrarCredito);
	//$("#busqueda").keyup(buscar(e));


	$('#busqueda').keyup(function(){
		buscar = $(this).val();
		$('td').removeClass('resaltar');
		console.log("contenido: "+buscar);
		if(jQuery.trim(buscar) != ''){
			$("td:contains('" + buscar + "')").addClass('resaltar');
			$("td:contains('" + buscar + "')").focus();
		}
	});


});

function inicio () {
	cargarProductos="1";
	$.post('php/Creditos/intermediario.php',{cargarProductos:cargarProductos},
		function(data){
			//console.log(data);
			$("#productos").html(data);
		}); 
	pagarCredito();
}

function pagarCredito () {
	$.post('php/Creditos/intermediario.php',{pagarCredito:"1"},
		function(data){
			//console.log("pago: "+data);
			
				$("#pagarCredito").html(data);	
			
			
		});
}

function registrarCredito () {
	var producto=$("input:radio[name=rbProductos]:checked").val();
	var cantidad=$("#rangoCantidadCredito").val();
	var nombre=$("#txtNombre").val();
	var direccion=$("#txtDireccion").val();
	var observacion=$("#txtObservacion").val();
	var precio=$("#txtPrecio").val();
	console.log("prod:"+producto+" cantidad: "+cantidad+" nombre: "+nombre+" direccion: "+direccion+" Precio: "+precio);
	if (producto==null) {
		Materialize.toast("Selecciona un producto!",4000);
	}else{
		if (nombre=="" || direccion=="") {
			Materialize.toast("Llena todos los campos!",3000);
		}else{
			$.post('php/Creditos/intermediario.php',{regCredito:"1",producto:producto,cantidad:cantidad,nombre:nombre,direccion:direccion,observacion:observacion,precio:precio},
				function(data){
					console.log(data);
					Materialize.toast(data,4000);
					pagarCredito();
			//$("#productos").html(data);
		}); 
		}
	}
}

function pagar (argument) {
	
	$.post('php/Creditos/intermediario.php',{pago:"1",id_credito:argument},
		function(data){
			Materialize.toast(data,4000);
		/*	setTimeout(function(){
				//location.reload();

			}, 2000);*/
			pagarCredito();
			
		}); 
}




function solonumeros(e){
	var key=window.Event ? e.which : e.keyCode
	return(key >=48 && key <=57)
}

function precio(precio) {
	console.log(precio);
	$("#txtpre").addClass("active");
	
	$("#txtPrecio").val(precio);
}