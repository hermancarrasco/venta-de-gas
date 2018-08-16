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
			$sql="SELECT * FROM `producto`,`empresa` WHERE producto.id_empresa=empresa.id_empresa";
			$sentencia=mysql_query($sql,$this->id_con);
			echo "Productos<p>";
			while ($rs=mysql_fetch_array($sentencia,MYSQL_BOTH)) {

				echo '
				<input class="with-gap" name="rbProductos" type="radio" id="test'.$rs["id_producto"].'" value="'.$rs["id_producto"].'"/>
				<label for="test'.$rs["id_producto"].'">'.$rs["nombre_producto"].' - '.$rs["nombre_empresa"].'</label>
				';

			}
			echo "</p>";

		}//cierre funcion de cargar productos de tipo de gas

		function registrarPrestamo($producto,$cantidad,$nombre,$direccion,$observacion)
		{
			date_default_timezone_set("America/Santiago");//metodo para que la hora sea la de Chile
			$time = time();
			$sql="INSERT INTO `chocman`.`prestamos` VALUES (NULL, '$producto', '$cantidad', '$nombre', '$direccion','".date("Y-m-d (H:i:s)", $time)."','".date("H:i:s")."',NULL,'$observacion');";
			$sentencia=mysql_query($sql,$this->id_con);
			echo "Prestamo Registrado";
		}

		function devolverPedido()
		{
			$sql="SELECT * FROM chocman.prestamos,chocman.producto,chocman.empresa where prestamos.id_producto=producto.id_producto and producto.id_empresa=empresa.id_empresa and prestamos.fecha_devuelto is NULL order by prestamos.fecha_prestamo,prestamos.hora asc";
			$sentencia=mysql_query($sql,$this->id_con);
			echo'
				<table class="responsive-table">
					<thead>
						<tr>
							<th data-field="fecha">Fecha</th>
							<th data-field="producto">Producto</th>
							<th data-field="cantidad">Cantidad</th>
							<th data-field="nombre">Nombre</th>
							<th data-field="direccion">Dirección</th>
							<th data-field="observacion">Observacion</th>
							<th data-field="btnPagar">Pagar</th>
						</tr>
					</thead>
				
					<tbody>
						
					';
			
			while ($rs=mysql_fetch_array($sentencia,MYSQL_BOTH)) {

				echo "<tr>
							<td>".$rs["fecha_prestamo"]."</td>
							<td>".$rs["nombre_producto"]." - ".$rs["nombre_empresa"]."</td>
							<td>".$rs["cantidad"]."</td>
							<td>".$rs["nombre"]."</td>
							<td>".$rs["direccion"]."</td>
							<td>".$rs["observacion"]."</td>
							<td><button type='button' class='waves-effect waves-light btn-large' onClick='pagar(".$rs["id_prestamo"].")'><i class='material-icons right'>done</i>Devolver</button></td>
						</tr>";
			}
			echo "	
					</tbody>
				</table>";
			

		}//cierre funcion pagar Credito

		function actualizarDevelto($id)
		{
			date_default_timezone_set("America/Santiago");//metodo para que la hora sea la de Chile
			$time = time();
			$sql="UPDATE `chocman`.`prestamos` SET `fecha_devuelto` = '".date("Y-m-d (H:i:s)", $time)."' WHERE `prestamos`.`id_prestamo` = $id;";
			$sentencia=mysql_query($sql,$this->id_con);
			echo "Prestamo Devuelto";
		}//cierre funcion de update de la fecha del credito







}//cierre clase BaseDeDatos
?>