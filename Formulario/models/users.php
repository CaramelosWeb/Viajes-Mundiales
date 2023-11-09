<?php
	include dirname(__file__,2)."/config/conexion.php";
	/**
	*
	*/
	class Users
	{
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

		//Trae todos los usuarios registrados
		public function getUsers()
		{
			$query  ="SELECT * FROM viaje";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

		//Crea un nuevo usuario
		public function newUser($data){
			$query  ="INSERT INTO viaje 
			(Nombre, Direccion, Numero_Domicilio, Telefono, Correo, Codigo_Postal, Presupuesto, Numero_Personas, 
			Forma_Pago, Pasaporte, Inicio_Viaje, Fin_Viaje, Destino_Viaje)

			 VALUES ('".$data['Nombre']."', 
			 '".$data['Direccion']."', 
			 '".$data['Numero_Domicilio']."', 
			 '".$data['Telefono']."', 
			 '".$data['Correo']."', 
			 '".$data['Codigo_Postal']."', 
			 '".$data['Presupuesto']."', 
			 '".$data['Numero_Personas']."', 
			 '".$data['Forma_Pago']."', 
			 '".$data['Pasaporte']."', 
			 '".$data['Inicio_Viaje']."', 
			 '".$data['Fin_Viaje']."', 
			 '".$data['Destino_Viaje']."')";

			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Obtiene el usuario por id
		public function getUserById($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM viaje WHERE id=".$id;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Editar usuario
		public function setEditUser($data){
			if(!empty($data['id'])){

				$query  ="UPDATE viaje SET 
				Nombre= '".$data['Nombre']."',
				Direccion= '".$data['Direccion']."',
				Numero_Domicilio= '".$data['Numero_Domicilio']."',
				Telefono= '".$data['Telefono']."',
				Correo= '".$data['Correo']."',
				Codigo_Postal= '".$data['Codigo_Postal']."',
				Presupuesto= '".$data['Presupuesto']."',
				Numero_Personas= '".$data['Numero_Personas']."',
				Forma_Pago= '".$data['Forma_Pago']."',
				Pasaporte = '".$data['Pasaporte']."',
				Inicio_Viaje= '".$data['Inicio_Viaje']."',
				Fin_Viaje= '".$data['Fin_Viaje']."',
				Destino_Viaje= '".$data['Destino_Viaje']."'
				WHERE id=".$data['id'];

				$result =mysqli_query($this->link,$query);

				if($result){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		//Borra el usuario por id
		public function deleteUser($id=NULL){
			if(!empty($id)){
				$query  ="DELETE FROM viaje WHERE id=".$id;
				$result =mysqli_query($this->link,$query);
				if(mysqli_affected_rows($this->link)>0){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		//Filtro de busqueda
		public function getUsersBySearch($data=NULL){
			if(!empty($data)){
				$query  ="SELECT * FROM viaje WHERE Nombre LIKE '%". 
				$data."%'OR id Direccion LIKE'%". $data."%' OR id LIKE'%". $data."%' " ;

				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}
	}
