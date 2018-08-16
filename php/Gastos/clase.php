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
			$sqlHoy="SELECT * FROM gastos where fecha='$hoy'";
			$sentenciaHoy=mysql_query($sqlHoy,$this->id_con);
			$cont=0;
			$arrayName=[];
			while ($rs=mysql_fetch_array($sentenciaHoy,MYSQL_BOTH)) {
				$arrayName[$cont] = $rs["tipo_gasto"];
				$cont++;
			}
			
			$menos = implode(",", $arrayName);

			//echo print_r($arrayName);
			//$sql="SELECT * FROM `producto`,`empresa` WHERE producto.id_empresa=empresa.id_empresa";
			
			if ($menos=="") {
				$menos=0;
			}
			$sql="SELECT * FROM `tipogasto` WHERE tipogasto.id_tipo_gasto NOT IN ($menos)";
			//SELECT * FROM chocman.producto WHERE id_producto NOT IN (3,4);
			$sentencia=mysql_query($sql,$this->id_con);
			
			while ($rs=mysql_fetch_array($sentencia,MYSQL_BOTH)) {

	/*			echo '
				<input class="with-gap" name="rbProductos" type="radio" id="test'.$rs["id_producto"].'" value="'.$rs["id_producto"].'"/>
				<label for="test'.$rs["id_producto"].'">'.$rs["nombre_producto"].' - '.$rs["nombre_empresa"].'</label>
				';*/		
					
					echo ' 
                <div class="col s12 m6">
                  <div class="card white">
                    <div class="card-content">
                      <span class="card-title">'.$rs["gasto"].'</span>
                      <form action="" method="POST">
							<input type="hidden" id="id'.$rs["id_tipo_gasto"].'" value="'.$rs["id_tipo_gasto"].'">
                        <div class="input-field col s12">
                          <input id="txtGasto'.$rs["id_tipo_gasto"].'" type="number" class="validate" min="0" step="100">
                          <label for="txtGasto'.$rs["id_tipo_gasto"].'">Gasto</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="txtObservacion'.$rs["id_tipo_gasto"].'" class="materialize-textarea" length="200"></textarea>
                          <label for="txtObservacion'.$rs["id_tipo_gasto"].'">Observación</label>
                        </div>
                       
                        <button type="button" class="btn" id="btn'.$rs["id_tipo_gasto"].'" onclick="registrarDia('.$rs["id_tipo_gasto"].')">Registrar</button>
                      </form>
                    </div>
                   
                  </div>
                </div>';
				
				
				

			}
			

		}//cierre funcion de cargar productos de tipo de gas

		function registrarGasto($id,$gasto,$observacion)
		{
			date_default_timezone_set("America/Santiago");//metodo para que la hora sea la de Chile
			$time = time();
			$sql="INSERT INTO `chocman`.`gastos` VALUES (NULL, '$id', '$gasto', '".date("Y-m-d", $time)."', '$observacion');";
			$sentencia=mysql_query($sql,$this->id_con);
			echo "Gasto Registrado";
		}

		function pagarCredito()
		{
			$sql="SELECT * FROM chocman.creditos,chocman.producto,chocman.empresa where creditos.id_producto=producto.id_producto and producto.id_empresa=empresa.id_empresa and creditos.fecha_pago is NULL order by creditos.fecha_otorgado,creditos.hora asc";
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
							<th data-field="btnPagar">Pagar</th>
						</tr>
					</thead>
				
					<tbody>
						
					';
			
			while ($rs=mysql_fetch_array($sentencia,MYSQL_BOTH)) {

				echo "<tr>
							<td>".$rs["fecha_otorgado"]."</td>
							<td>".$rs["nombre_producto"]." - ".$rs["nombre_empresa"]."</td>
							<td>".$rs["cantidad"]."</td>
							<td>".$rs["nombre"]."</td>
							<td>".$rs["direccion"]."</td>
							<td><button type='button' class='waves-effect waves-light btn-large' onClick='pagar(".$rs["id_credito"].")'><i class='material-icons right'>done</i>Pagar</button></td>
						</tr>";
			}
			echo "	
					</tbody>
				</table>";
			

		}//cierre funcion pagar Credito

		function actualizarCredito($id)
		{
			date_default_timezone_set("America/Santiago");//metodo para que la hora sea la de Chile
			$time = time();
			$sql="UPDATE `chocman`.`creditos` SET `fecha_pago` = '".date("Y-m-d (H:i:s)", $time)."' WHERE `creditos`.`id_credito` = $id;";
			$sentencia=mysql_query($sql,$this->id_con);
			echo "Credito Pagado";
		}//cierre funcion de update de la fecha del credito







}//cierre clase BaseDeDatos
?>