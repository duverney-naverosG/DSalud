<?php
require_once('../models/hospitalDao.php');
require_once('../models/hospital.php');
session_start();

$crud  = new hospitalDao();
$hospital = new hospital();

if(isset($_POST['actualizar']))
	{
		$hospital->setId($_GET['id']);
		$hospital->setNombre($_POST['nombre']);
		$hospital->setCiudad($_POST['ciudad']);
		$hospital->setDireccion($_POST['direccion']);
		$hospital->setTelefono($_POST['telefono']);
		$hospital->setEstado($_POST['estado']);
		
		$crud->actualizar($hospital);
    }
	if (isset($_POST['insertar'])) 
	{
		$hospital->setNombre($_POST['nombre']);
		$hospital->setCiudad($_POST['ciudad']);
		$hospital->setDireccion($_POST['direccion']);
		$hospital->setTelefono($_POST['telefono']);
		$hospital->setEstado(1);
	
		$crud->insertar($hospital);
		return;  
	}
?>

