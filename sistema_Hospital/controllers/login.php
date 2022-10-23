<?php
require_once('../conexion.php');

session_start();

if(isset($_POST['email-username'])&&isset($_POST['password'])){
    $db=Db::conectar();
    $select=$db->prepare('SELECT * FROM medicos WHERE correo=:Correo OR identificacion=:Identificacion AND passwords=:passwords');
    $select->bindValue('Correo',$_POST['email-username']);
    $select->bindValue('Identificacion',$_POST['email-username']);
    $select->bindValue('passwords',$_POST['password']);
    $select->execute();
    $medico = $select->fetch();
    if($medico){
        $Identificacion = $medico['identificacion'];
        $Nombre = $medico['nombre'];
        $Apellido= $medico['primerApellido'];
        $Rol = $medico['rol'];
        $_SESSION['identificacion'] = $Identificacion;
        $_SESSION['nombre'] = $Nombre;
        $_SESSION['apellido'] = $Apellido;
        $_SESSION['rol'] = $Rol;
        $estado = $medico['estado'];
        if($estado == 2){
            $_SESSION['activo']=true;
            header('Location: ../index.php');
            return;
        }
        header('Location: ../views/medicos/panelMedico.php');
        return;
    }

    $select=$db->prepare('SELECT * FROM usuarios WHERE correo=:Correo OR identificacion=:Identificacion AND passwords=:passwords');
    $select->bindValue('Correo',$_POST['email-username']);
    $select->bindValue('Identificacion',$_POST['email-username']);
    $select->bindValue('passwords',$_POST['password']);
    $select->execute();
    $usuarios = $select->fetch();
    if($usuarios){
        $Identificacion = $usuarios['identificacion'];
        $Nombre= $usuarios['nombres'];
        $Apellido= $usuarios['primerApellido'];
        $Rol = $usuarios['rol'];
        $estado = $usuarios['estado'];
        $_SESSION['identificacion'] = $Identificacion;
        $_SESSION['nombre'] = $Nombre;
        $_SESSION['apellido'] = $Apellido;
        $_SESSION['rol'] = $Rol;

        if($_SESSION['rol'] == 3){
            header('Location: ../views/clients/panelPaciente.php');
            return;
        }
        if($_SESSION['rol']==1){
            header('Location: ../views/admin/panelAdmin.php');
            return;
        }
        
    }

    if($usuarios==null or $medico==null){
        $_SESSION['mensaje']=true;
        header('Location: ../index.php');
    }
        
}else{

}


?>