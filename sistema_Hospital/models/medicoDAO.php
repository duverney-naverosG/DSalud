<?php
class medicoDAO{

    //constructor de la clase
		public function construct(){}

		//metodo para insertar
		public function insertar($usuarios)
		{
            require_once('../conexion.php');
			require_once('../models/medico.php');	
            $db=Db::conectar();
		   try {
			$inserta=$db->prepare('INSERT INTO medicos values(:identificacion,:nombre,:primerApellido,:segundoApellido,:correo,:direccion,:rh,:genero,:telefono,:passwords,:idHospital,:rol,:estado)');
           	$inserta->bindValue('identificacion',$usuarios->getIdentificacion());
           	$inserta->bindValue('nombre',$usuarios->getNombre());
           	$inserta->bindValue('primerApellido',$usuarios->getPrimerApellido());
           	$inserta->bindValue('segundoApellido',$usuarios->getSegundoApellido());
           	$inserta->bindValue('direccion',$usuarios->getDireccion());
           	$inserta->bindValue('rh',$usuarios->getRh());
			$inserta->bindValue('genero',$usuarios->getGenero());
            $inserta->bindValue('correo',$usuarios->getCorreo());
           	$inserta->bindValue('telefono',$usuarios->getTelefono());
			$inserta->bindValue('rol',$usuarios->getRol());
            $inserta->bindValue('passwords',$usuarios->getContraseña());
			$inserta->bindValue('estado',$usuarios->getEstado());
			$inserta->bindValue('idHospital',$usuarios->getIdhospital());
			$inserta->execute();
			$_SESSION['agregado'] = true;
        	header('Location: ../../sistema_Hospital/views/admin/medicos.php');
		   } catch (Exception $e) {
			$_SESSION['error'] = true;
    		header('Location: ../../sistema_Hospital/views/admin/medicos.php');
			return;
		   }
		}

		public function mostrar($id)
		{
            require_once('../../conexion.php');
			require_once('../../models/medico.php');	
            $db=Db::conectar();
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM medicos WHERE identificacion='.$id);
			$select->execute();
			$usuarios = $select->fetch();
			$medico = new Medico();
			$medico->setIdentificacion($usuarios['identificacion']);
    		$medico->setNombre($usuarios['nombre']);
    		$medico->setPrimerApellido($usuarios['primerApellido']);
    		$medico->setSegundoApellido($usuarios['segundoApellido']);
    		$medico->setDireccion($usuarios['direccion']);
			$medico->setCorreo($usuarios['correo']);
    		$medico->setRh($usuarios['rh']);
    		$medico->setGenero($usuarios['genero']);
    		$medico->setTelefono($usuarios['telefono']);
    		$medico->setIdhospital($usuarios['idHospital']);
    		$medico->setEstado($usuarios['estado']);
			return $medico;
		}

		public function actualizar($usuario)
		{
		   try {
            require_once('../conexion.php');
			require_once('../models/medico.php');	
            $db=Db::conectar();
			$actualizar=$db->prepare('UPDATE  medicos SET nombre=:nombre,primerApellido=:primerApellido,segundoApellido=:segundoApellido,direccion=:direccion,genero=:genero,correo=:correo,telefono=:telefono,estado=:estado,idHospital=:idHospital WHERE identificacion=:identificacion');
           	$actualizar->bindValue('identificacion',$usuario->getIdentificacion());
           	$actualizar->bindValue('nombre',$usuario->getNombre());
           	$actualizar->bindValue('primerApellido',$usuario->getPrimerApellido());
           	$actualizar->bindValue('segundoApellido',$usuario->getSegundoApellido());
           	$actualizar->bindValue('direccion',$usuario->getDireccion());
			$actualizar->bindValue('genero',$usuario->getGenero());
            $actualizar->bindValue('correo',$usuario->getCorreo());
           	$actualizar->bindValue('telefono',$usuario->getTelefono());
            $actualizar->bindValue('estado',$usuario->getEstado());
			$actualizar->bindValue('idHospital',$usuario->getIdhospital());
			$actualizar->execute();
			$_SESSION['actualizacion'] = true;
        	header('Location: ../../sistema_Hospital/views/admin/medicos.php');
			return;
		   } catch (Exception $e) {
			$_SESSION['error'] = true;
    		header('Location: ../../sistema_Hospital/views/admin/medicos.php');
			return;
		   }
		}

		public function mostraMedicos()
		{
            require_once('../../conexion.php');
			require_once('../../models/medico.php');
			$db=Db::conectar();
			$listaMedico=[];
			$select=$db->query('SELECT medicos.identificacion, medicos.nombre, medicos.primerApellido, medicos.direccion, medicos.correo, medicos.telefono, hospital.nombre as nomHosp, medicos.estado FROM medicos, hospital WHERE medicos.idHospital = hospital.id');
			foreach ($select->fetchAll() as $medicos) 
			{
			$medico = new Medico();
			$medico->setIdentificacion($medicos['identificacion']);
    		$medico->setNombre($medicos['nombre']);
    		$medico->setPrimerApellido($medicos['primerApellido']);
    		$medico->setDireccion($medicos['direccion']);
    		$medico->setCorreo($medicos['correo']);
    		$medico->setTelefono($medicos['telefono']);
            $medico->setIdhospital($medicos['nomHosp']);
            $medico->setEstado($medicos['estado']);
			$listaMedico[]=$medico;
			}
			return $listaMedico;
		}

}

?>