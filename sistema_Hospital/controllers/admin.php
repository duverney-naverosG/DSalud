<?php
//incluye la clase Libro y CrudLibro
require_once('../models/AdminDao.php');
require_once('../models/usuarios.php');
session_start();

$crud  = new AdminDao();
$usuario = new usuarios();

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
    $usuario->setContraseña($_POST['contraseña']);

    $crud->actualizar($usuario);
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
    $usuario->setFechaNacimiento($_POST['fechaNacimiento']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setRol(1);
    $usuario->setContraseña($_POST['contraseña']);

    $crud->insertar($usuario);
    return;  
}

if (isset($_GET['eliminar'])) 
{
    $crud->eliminar($_GET['id']);
}
?>