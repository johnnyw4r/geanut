<?php

/* 	Autor: Johnny Aracena Araya
	Revisado por:
    Versi�n: 1.0
    Archivo: clase_conector.php
*/

/*Clase para conectar la base de datos*/

	class dbconnect{
		var $conexion=NULL;
		var $error;
		var $status;
		
		/* 	Funcion Cosntructor de la clase */		
		function dbconnect($hostname,$username,$password,$database)
		{
			$this->conexion= mysql_connect($hostname,$username,$password);
			if ($this->conexion==0){
				die("error de conexion con el servidor de db");
			}
			else{
				$dbselect= mysql_select_db($database,$this->conexion);
				if (!$dbselect){
					die("base de datos no existe");
				}
			}
		}
		
		/* 	Esta es la funcion que interactua directamente con la base de datos,
			ejecuta las consultas y retorna los resultados el id del proceso realizado*/
		function ejecutar_consulta($sql_str)
		{
		//	echo $sql_str;
			$result = mysql_query($sql_str,$this->conexion);
			if (!$result){
				$salida=NULL;
				echo $sql_str;
				die("error al ejecutar la consulta");
			}
			else
			{
				$salida= $result;
			}
			$this->destruye_conexion();
			$recordset=$salida;
			return $recordset;	
		}
		
		/* 	Funcion que realiza las inserciones a la base de datos */		
		function insertar_datos($tabla,$campos, $valores)
		{
			$estado;
			$consulta= $this-> genera_string_consulta('insert', $tabla,$campos,$valores,"");
			$estado= $this->ejecutar_consulta($consulta);
			return $estado;
		}
		
		/* funci�n que genera el string SQL de acuerdo a lo que se necesita hacer*/
		function genera_string_consulta($tipo,$tabla,$campos,$valores,$opciones)
		{
			switch ($tipo)
			{
				case 'insert':
					$consulta= "insert into $tabla ";
					if ($campos!="")
					{
						$consulta.="($campos)";
					}
					$consulta.= " values ($valores);";
					break;		
				case 'select':
					if ($tabla!= '')
					{
						if ($campos=='')
						{
							$campos='*';
						}
						$consulta= "select $campos from $tabla ";
						if ($valores!="")
						{
							$consulta.="where $valores ";
						}
						if ($opciones!="")
						{
							$consulta.="$opciones";
						}
						$consulta.=";";
					}
					else
					{
						$consulta =FALSE;
					}//FIN IF	
					break;
				default:
			} //FIN SWITCH
			return $consulta;
		}
			
		/* Funcion encargada de recuperar el ID de la tabla edicion */
		function edicion_numero($dia,$mes,$ano)
		{
			$estado;
			$consulta="SELECT numero FROM edicion where dia=$dia and mes = $mes and ano =$ano;";
			$estado=$this->ejecutar_consulta($consulta);
			if ($reg=mysql_fetch_array($estado))
			{
				$edicion = $reg['numero'];
			}
			else
			{	
				echo $consulta;
  				echo "No hay!!!!";
			}
			return $edicion;
		}

		/* Funcion encargada de recuperar el id del insert $result */
		function recupera_id()
		{
			$id_requerido= mysql_insert_id();
			return $id_requerido;
		}
		
		function recuperar_datos($tablas,$campos,$restricciones,$opciones)
		{
			
			$consulta=$this->genera_string_consulta('select',$tablas,$campos,$restricciones,$opciones);
			
			$resultado= mysql_query($consulta);
			
			
			/*if ($consulta!=FALSE)
			{
				$result=  $this->ejecutar_consulta($consulta);
				if (!$result)
				{
					$recordset = NULL;
					die("error al ejecutar la consulta");
				}
				else
				{
					do
					{
						$fila = mysql_fetch_assoc($resultado);
						if($fila)
						{
							$recordset[] = $fila;
						}
					}while($fila);
				/*}
			}
			else
			{
				$recordset=NULL;
			}	*/
			
			
			return $resultado;	
		}

		/* 	Funcion destructor de la clase */		
		function destruye_conexion(){
			if ($this->conn != 0){
				mysql_close($this->conn); 
			}
		}
	}	
?>