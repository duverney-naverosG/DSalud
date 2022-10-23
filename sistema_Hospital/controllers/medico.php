<?php
//incluye la clase Libro y CrudLibro
require_once('../models/medicoDAO.php');
require_once('../models/medico.php');
session_start();

$crudMedico  = new medicoDAO();
$usuario = new Medico();

if (isset($_POST['actualizar'])) 
{
    $usuario->setIdentificacion($_GET['id']);
    $usuario->setNombre($_POST['nombres']);
    $usuario->setPrimerApellido($_POST['primerApellido']);
    $usuario->setSegundoApellido($_POST['segundoApellido']);
    $usuario->setDireccion($_POST['direccion']);
    $usuario->setGenero($_POST['genero']);
    $usuario->setCorreo($_POST['correo']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setEstado($_POST['estado']);
    $usuario->setIdhospital($_POST['Idhospital']);
    $crudMedico->actualizar($usuario);
    return;  
   
}

if (isset($_POST['insertar'])) 
{
    $usuario->setIdentificacion($_POST['identificacion']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setPrimerApellido($_POST['primerApellido']);
    $usuario->setSegundoApellido($_POST['segundoApellido']);
    $usuario->setDireccion($_POST['direccion']);
    $usuario->setRh($_POST['rh']);
    $usuario->setGenero($_POST['genero']);
    $usuario->setCorreo($_POST['correo']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setRol(2);
    $usuario->setEstado(1);
    $usuario->setIdhospital($_POST['Idhospital']);
    $usuario->setContraseña($_POST['contraseña']);

    $crudMedico->insertar($usuario);
    return;  
}
?>