<?php 
session_start();
if(isset($_SESSION['rol'])){
  if(($_SESSION['rol'])==1){
    require_once('../../models/pacientesDao.php');
	  require_once('../../models/usuarios.php');
	  $crud= new pacientesDao();
	  $admins=new usuarios();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	  $admin = $crud->mostrar($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<title>detalle administrador</title>
<?php include "../../components/head2.php" ; ?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include "../../components/menuAdmin.php" ; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include "../../components/menuPanelAdmin.php" ; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">DETALLE ADMINISTRADOR</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="/sistema_Hospital/controllers/admin.php?id=<?php echo $admin->getIdentificacion()?>">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="identificacion" class="form-label">IDENTIFICACION</label>
                            <input class="form-control" type="text" id="firstName" name="identificacion" disabled value="<?php echo $admin->getIdentificacion();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">NOMBRES</label>
                            <input class="form-control" type="text" name="nombres" id="nombre" value="<?php echo $admin->getNombre();?>" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">PRIMER APELLIDO</label>
                            <input class="form-control" type="text" id="email" name="primerApellido" value="<?php echo $admin->getPrimerApellido();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">SEGUNDO APELLIDO</label>
                            <input type="text" class="form-control" id="organization" name="segundoApellido" value="<?php echo $admin->getSegundoApellido();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">DIRECCION</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" id="phoneNumber" name="direccion" class="form-control" value="<?php echo $admin->getDireccion();?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">CORREO</label>
                            <input class="form-control" type="text" id="state" name="correo" value="<?php echo $admin->getCorreo();?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="username" class="form-label">Genero</label>
                            <select class="form-select" name="genero" required aria-label="Default select example">
                              <option selected>Genero</option>
                              <option value="M" <?php if($admin->getGenero()==="M"){?>selected="selected"<?php }?>>masculino</option>
                              <option value="F" <?php if($admin->getGenero()==="F"){?>selected="selected"<?php }?>>femenino</option>
                            </select>
                            </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Rh</label>
                            <input class="form-control" type="text" id="state" disabled value="<?php echo $admin->getRh();?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">FECHA NACIMIENTO</label>
                            <input
                              type="date" class="form-control" id="zipCode" disabled name="fechaNacimiento" value="<?php echo $admin->getFechaNacimiento();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">TELEFONO</label>
                            <input type="text" class="form-control" id="zipCode" name="telefono" value="<?php echo $admin->getTelefono();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">CONTRASEÑA</label>
                            <input type="text" class="form-control" id="zipCode" name="contraseña" value="<?php echo $admin->getContraseña();?>"
                            />
                          </div>
                        </div>
                        <input type='hidden' name='actualizar' value='actualizar'/>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-warning me-2">ACTUALIZAR</button>
                          <a href="/sistema_Hospital/views/admin/administradores.php"  class="btn btn-outline-secondary" type="reset" role="button">CANCELAR</a>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Footer -->
            <?php include "../../components/piePanels.php" ; ?>
            <!-- / Footer -->
          </div>
        </div>
      </div>

    <?php include "../../components/footer2.php" ; ?>

  </body>
</html>
<?php 
}else{
  header('Location: ../../views/accesoDenegado.php');
}
}else {
  header('Location: ../../views/accesoDenegado.php');
}
?>