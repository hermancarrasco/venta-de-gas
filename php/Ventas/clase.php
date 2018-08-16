<?php
class BaseDeDatos{

	private $ser;
	private $usu;
	private $pas;
	private $bd;
	private $id_bd;
	private $id_con;




	
	function conectarBD(){
			$this->ser="localhost"; //servidor
			$this->usu="root"; //usuario
			$this->pas=""; //contraseña
			$this->bd="chocman"; //base de datos
			
			$this->id_con=mysql_connect($this->ser,$this->usu,$this->pas); //conexion a la BD
			if(!$this->id_con){
				die("Error en la conexion con la BD");
			}
			$this->id_bd=mysql_select_db($this->bd,$this->id_con); //Seleccion de la BD
			if(!$this->id_bd){
				die("Error en la seleccion de la BD");
			}
			mysql_set_charset('utf8');
			date_default_timezone_set("America/mendoza");//metodo para que la hora sea la de Chile
			$time = time(); //variable que almacena la hora local
		}
		function desconectarBD(){
			mysql_close($this->id_con);
		}//cierre funcion desconectar de la base de datos

		function cargarProductos()
		{
				date_default_timezone_set("America/Santiago");//metodo para que la hora sea la de Chile
				$time = time();
				$hoy=date('Y-m-d', $time);
				$sqlHoy="SELECT * FROM venta where fecha='$hoy'";
				$sentenciaHoy=mysql_query($sqlHoy,$this->id_con);
				$cont=0;
				$arrayName=[];
				while ($rs=mysql_fetch_array($sentenciaHoy,MYSQL_BOTH)) {
					$arrayName[$cont] = $rs["id_producto"];
					$cont++;
				}
				
				$menos = implode(",", $arrayName);
				if ($menos=="") {
					$menos=0;
				}
			
				$sql="SELECT * FROM `producto`,`empresa` WHERE producto.id_empresa=empresa.id_empresa and producto.id_producto NOT IN ($menos)";
				//SELECT * FROM chocman.producto WHERE id_producto NOT IN (3,4);
				$sentencia=mysql_query($sql,$this->id_con);
				
				while ($rs=mysql_fetch_array($sentencia,MYSQL_BOTH)) {				
				echo ' 
				<div class="col s12 m6">
					<div class="card white">
						<div class="card-content">
							<span class="card-title">'.$rs["nombre_producto"].' - '.$rs["nombre_empresa"].'</span>
							<form action="" method="POST">
								<input type="hidden" id="id'.$rs["id_producto"].'" value="'.$rs["id_producto"].'">
								<div class="input-field col s12">
									<input id="txtCantidad'.$rs["id_producto"].'" type="number" class="validate" min="0" onkeypress="return cero(event,'.$rs["id_producto"].')">
									<label for="txtCantidad'.$rs["id_producto"].'">Cantidad</label>
								</div>
								<div class="input-field col s12">
									<input id="txtPrecio'.$rs["id_producto"].'" type="number" class="validate" min="0" step="100" value="'.$rs["precio_venta"].'">
									<label for="txtPrecio'.$rs["id_producto"].'">Precio</label>
								</div>

								<button type="button" class="btn" id="btn'.$rs["id_producto"].'" onclick="registrarDia('.$rs["id_producto"].')">Registrar</button>
							</form>
						</div>
						
					</div>
				</div>';
				
			}
			

		}//cierre funcion de cargar productos de tipo de gas

		function registrarVenta($id,$cantidad,$precio)
		{
			date_default_timezone_set("America/Santiago");//metodo para que la hora sea la de Chile
			$time = time();
			$sql="INSERT INTO `chocman`.`venta` VALUES (NULL, '$id', '$cantidad', '$precio', '".date("Y-m-d", $time)."');";
			$sentencia=mysql_query($sql,$this->id_con);
			echo "Venta Registrada";
		}








}//cierre clase BaseDeDatos
?>