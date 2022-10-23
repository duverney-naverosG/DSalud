<?php
class AdminDao{
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
			$_SESSION['agregado'] = true;
        	header('Location: ../../sistema_Hospital/views/admin/administradores.php');
			return;
		   } catch (Exception $e) {
    		header('Location: ../../sistema_Hospital/views/admin/administradores.php');
			return;
		   }
			
			
		   
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
        	header('Location: ../../sistema_Hospital/views/admin/administradores.php');
			return;
		   } catch (Exception $e) {
			$_SESSION['error'] = true;
    		header('Location: ../../sistema_Hospital/views/admin/administradores.php');
			return;
		   }
		}

		public function eliminar($id)
		{
			require_once('../conexion.php');
			$db=Db::conectar();
			try {
				$eliminar=$db->prepare('DELETE FROM usuarios WHERE identificacion=:id');
				$eliminar->bindValue('id',$id);
				$eliminar->execute();
				$_SESSION['eliminacion'] = true;
				header('Location: ../../sistema_Hospital/views/admin/administradores.php');
				return;
			   } catch (Exception $e) {
				$_SESSION['error'] = true;
				header('Location: ../../sistema_Hospital/views/admin/administradores.php');
				return;
			   }
			
		}
}

?>