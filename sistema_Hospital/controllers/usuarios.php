<?php
//incluye la clase Libro y CrudLibro
require_once('../models/pacientesDao.php');
require_once('../models/usuarios.php');
session_start();

$crud  = new pacientesDao();
$usuario = new usuarios();

if (isset($_POST['insertar'])) 
{
    $usuario->setIdentificacion($_POST['id']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setPrimerApellido($_POST['primerApellido']);
    $usuario->setSegundoApellido($_POST['segundoApellido']);
    $usuario->setDireccion($_POST['direccion']);
    $usuario->setRh($_POST['rh']);
    $usuario->setGenero($_POST['genero']);
    $usuario->setCorreo($_POST['email']);
    $usuario->setFechaNacimiento($_POST['fechaNacimiento']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setRol(3);
    $usuario->setContraseña($_POST['password']);

    $crud->insertar($usuario);
    return;  
}

if (isset($_POST['actualizar'])) 
{
    $usuario->setIdentificacion($_SESSION['identificacion']);
    $usuario->setNombre($_POST['nombre']);
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
?>