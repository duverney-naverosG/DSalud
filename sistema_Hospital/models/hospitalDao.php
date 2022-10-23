<?php
class hospitalDao{
    //constructor de la clase
		public function construct(){}

		public function mostrar()
		{
			require_once('../../conexion.php');
			require_once('../../models/hospital.php');
			$db=Db::conectar();
			$lista_hospitales=[];
			$select= $db->query('SELECT * FROM hospital');

			foreach ($select->fetchAll() as $hospital) 
			{
			    $hospitales = new hospital();
			    $hospitales->setId($hospital['id']);
			    $hospitales->setNombre($hospital['nombre']);
			    $hospitales->setCiudad($hospital['ciudad']);
			    $hospitales->setDireccion($hospital['direccion']);
			    $hospitales->setTelefono($hospital['telefono']);
			    $hospitales->setEstado($hospital['estado']);
			    $lista_hospitales[] = $hospitales;
			}
			return $lista_hospitales;
		}

        public function obtenerHospital($id)
		{
            require_once('../../conexion.php');
			require_once('../../models/hospital.php');
    		$db=Db::conectar();
    		$select=$db->prepare('SELECT * FROM hospital WHERE ID=:id');
    		$select->bindValue('id',$id);
    		$select->execute();
    		$hospital = $select->fetch();
    		$elHospital = new hospital();
    		$elHospital->setId($hospital['id']);
    		$elHospital->setNombre($hospital['nombre']);
    		$elHospital->setCiudad($hospital['ciudad']);
    		$elHospital->setDireccion($hospital['direccion']);
    		$elHospital->setTelefono($hospital['telefono']);
    		$elHospital->setEstado($hospital['estado']);
    		return $elHospital;
		}

		public function actualizar($hospital)
		{
			require_once('../conexion.php');
			require_once('../models/hospital.php');
            $db=Db::conectar();
           // se crea la linea de insertar
           try {
			$actualizar=$db->prepare('UPDATE  hospital SET nombre=:nombre,ciudad=:ciudad,direccion=:direccion,telefono=:telefono,estado=:estado WHERE id=:id');
           	$actualizar->bindValue('id',$hospital->getId());
           	$actualizar->bindValue('nombre',$hospital->getNombre());
           	$actualizar->bindValue('ciudad',$hospital->getCiudad());
           	$actualizar->bindValue('direccion',$hospital->getDireccion());
           	$actualizar->bindValue('telefono',$hospital->getTelefono());
			$actualizar->bindValue('estado',$hospital->getEstado());
			$actualizar->execute();
            $_SESSION['actualizacionHospital'] = true;
        	header('Location: ../../sistema_Hospital/views/admin/hospitales.php');
		   } catch (Exception $e) {
			$_SESSION['hospitalError'] = true;
    		header('Location: ../../sistema_Hospital/views/admin/hospitales.php');
			return;
		   }
		}

		public function insertar($hospital)
		{
			require_once('../conexion.php');
			require_once('../models/hospital.php');
           	$db=Db::conectar();
           // se crea la linea de insertar
		   try {
			$inserta=$db->prepare('INSERT INTO hospital values(NULL,:nombre,:ciudad,:direccion,:telefono,:estado)');
           	$inserta->bindValue('nombre',$hospital->getNombre());
           	$inserta->bindValue('ciudad',$hospital->getCiudad());
           	$inserta->bindValue('direccion',$hospital->getDireccion());
           	$inserta->bindValue('telefono',$hospital->getTelefono());
           	$inserta->bindValue('estado',$hospital->getEstado());
			$inserta->execute();
			$_SESSION['agregoHospital'] = true;
        	header('Location: ../../sistema_Hospital/views/admin/hospitales.php');
		   } catch (Exception $e) {
    		header('Location: ../../sistema_Hospital/views/admin/hospitales.php');
			return;
		   }
           	
			
		}

}

?>