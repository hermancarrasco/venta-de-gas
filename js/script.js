$(document).ready(function () {
	Materialize.updateTextFields();
	$("#btnAceptar").click(login);
});


function login(){
	var user,pass;
	user=$("#txtUser").val();
	pass=$("#txtPass").val();
	if (user!="" && pass!="") {
		Materialize.toast("Procesando");
	}else{
		Materialize.toast("Debe llenar todos los campos");
	}

}//cierre funcion de inicio


function solonumeros(e){
		var key=window.Event ? e.which : e.keyCode
		return(key >=48 && key <=57)
	}