<?php
class pacientesDao{
    //constructor de la clase
		public function construct(){}

		//metodo para insertar
		public function insertar($usuarios)
		{
			require_once('../conexion.php');
			require_once('../models/usuarios.php');	
            $db=Db::conectar();
           // se crea la linea de insertar
		   try {
			$inserta=$db->prepare('INSERT INTO usuarios values(:identificacion,:nombre,:primerApellido,:segundoApellido,:direccion,:rh,:genero,:correo,:fechaNacimiento,:telefono,:rol,:passwords)');
           	$inserta->bindValue('identificacion',$usuarios->getIdentificacion());
           	$inserta->bindValue('nombre',$usuarios->getNombre());
           	$inserta->bindValue('primerApellido',$usuarios->getPrimerApellido());
           	$inserta->bindValue('segundoApellido',$usuarios->getSegundoApellido());
           	$inserta->bindValue('direccion',$usuarios->getDireccion());
           	$inserta->bindValue('rh',$usuarios->getRh());
			$inserta->bindValue('genero',$usuarios->getGenero());
            $inserta->bindValue('correo',$usuarios->getCorreo());
           	$inserta->bindValue('fechaNacimiento',$usuarios->getFechaNacimiento());
           	$inserta->bindValue('telefono',$usuarios->getTelefono());
			$inserta->bindValue('rol',$usuarios->getRol());
            $inserta->bindValue('passwords',$usuarios->getContraseña());
			$inserta->execute();
			$_SESSION['insertar'] = true;
        	header('Location: ../index.php');
		   } catch (Exception $e) {
			$_SESSION['error'] = true;
    		header('Location: ../registro.php');
			return;
		   }
		}

		public function mostrar($id)
		{
			require_once('../../conexion.php');
			require_once('../../models/usuarios.php');
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE identificacion='.$id);
			$select->execute();
			$usuarios = $select->fetch();
			$usuario = new usuarios();
			$usuario->setIdentificacion($usuarios['identificacion']);
    		$usuario->setNombre($usuarios['nombres']);
    		$usuario->setPrimerApellido($usuarios['primerApellido']);
    		$usuario->setSegundoApellido($usuarios['segundoApellido']);
    		$usuario->setDireccion($usuarios['direccion']);
    		$usuario->setRh($usuarios['rh']);
    		$usuario->setGenero($usuarios['genero']);
    		$usuario->setCorreo($usuarios['correo']);
    		$usuario->setFechaNacimiento($usuarios['fechaNacimiento']);
    		$usuario->setTelefono($usuarios['telefono']);
    		$usuario->setRol($usuarios['rol']);
    		$usuario->setContraseña($usuarios['passwords']);
			return $usuario;
		}

		public function actualizar($usuario)
		{
			require_once('../conexion.php');
			require_once('../models/usuarios.php');
            $db=Db::conectar();
           // se crea la linea de insertar
		   try {
			$actualizar=$db->prepare('UPDATE  usuarios SET nombres=:nombre,primerApellido=:primerApellido,segundoApellido=:segundoApellido,direccion=:direccion,genero=:genero,correo=:correo,telefono=:telefono,passwords=:passwords WHERE identificacion=:identificacion');
           	$actualizar->bindValue('identificacion',$usuario->getIdentificacion());
           	$actualizar->bindValue('nombre',$usuario->getNombre());
           	$actualizar->bindValue('primerApellido',$usuario->getPrimerApellido());
           	$actualizar->bindValue('segundoApellido',$usuario->getSegundoApellido());
           	$actualizar->bindValue('direccion',$usuario->getDireccion());
			$actualizar->bindValue('genero',$usuario->getGenero());
            $actualizar->bindValue('correo',$usuario->getCorreo());
           	$actualizar->bindValue('telefono',$usuario->getTelefono());
            $actualizar->bindValue('passwords',$usuario->getContraseña());
			$actualizar->execute();
			$_SESSION['actualizacion'] = true;
        	header('Location: ../../sistema_Hospital/views/admin/perfilAdmin.php');
			return;
		   } catch (Exception $e) {
			$_SESSION['error'] = true;
    		header('Location: ../../sistema_Hospital/views/admin/perfilAdmin.php');
			return;
		   }
		}

		public function mostrarAdmis()
		{
			require_once('../../conexion.php');
			require_once('../../models/usuarios.php');
			$db=Db::conectar();
			$listaAdmin=[];
			$select=$db->query('SELECT * FROM usuarios WHERE rol=1');
			foreach ($select->fetchAll() as $admin) 
			{
			$usuario = new usuarios();
			$usuario->setIdentificacion($admin['identificacion']);
    		$usuario->setNombre($admin['nombres']);
    		$usuario->setPrimerApellido($admin['primerApellido']);
    		$usuario->setSegundoApellido($admin['segundoApellido']);
    		$usuario->setDireccion($admin['direccion']);
    		$usuario->setRh($admin['rh']);
    		$usuario->setGenero($admin['genero']);
    		$usuario->setCorreo($admin['correo']);
    		$usuario->setFechaNacimiento($admin['fechaNacimiento']);
    		$usuario->setTelefono($admin['telefono']);
    		$usuario->setRol($admin['rol']);
    		$usuario->setContraseña($admin['passwords']);
			$listaAdmin[]=$usuario;
			}
			return $listaAdmin;
		}

		public function mostrarPacientes()
		{
			require_once('../../conexion.php');
			require_once('../../models/usuarios.php');
			$db=Db::conectar();
			$listaPaciente=[];
			$select=$db->query('SELECT * FROM usuarios WHERE rol=3');
			foreach ($select->fetchAll() as $paciente) 
			{
			$usuario = new usuarios();
			$usuario->setIdentificacion($paciente['identificacion']);
    		$usuario->setNombre($paciente['nombres']);
    		$usuario->setPrimerApellido($paciente['primerApellido']);
    		$usuario->setSegundoApellido($paciente['segundoApellido']);
    		$usuario->setDireccion($paciente['direccion']);
    		$usuario->setRh($paciente['rh']);
    		$usuario->setGenero($paciente['genero']);
    		$usuario->setCorreo($paciente['correo']);
    		$usuario->setFechaNacimiento($paciente['fechaNacimiento']);
    		$usuario->setTelefono($paciente['telefono']);
    		$usuario->setRol($paciente['rol']);
    		$usuario->setContraseña($paciente['passwords']);
			$listaPaciente[]=$usuario;
			}
			return $listaPaciente;
		}
}

?>