<?php 
session_start();
if(isset($_SESSION['rol'])){
  if(($_SESSION['rol'])==1){
    require_once('../../models/usuarios.php');
    require_once('../../models/pacientesDao.php');
    $crud=new pacientesDao();
    $usuario = new usuarios();
    $usuarioAdmin = $crud->mostrar($_SESSION['identificacion']);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free" >
<title>PERFIL ADMIN</title>
<?php include "../../components/head2.php" ; ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include "../../components/menuAdmin.php" ; ?>
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include "../../components/menuPanelAdmin.php" ; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                  <?php if(isset($_SESSION['mensaje'])){?>
                    <div class="alert alert-danger alert-dismissible show " role="alert">
                      <strong>ACTUALIZACION NO EXITOSA</strong> error al actualizar dats
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php }?>
                  <?php if(isset($_SESSION['actualizacion'])){?>
                    <div class="alert alert-success alert-dismissible show " role="alert">
                    <strong>ACTUALIZACION EXITOSA</strong> datos actualizados
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php }?>
                    <h5 class="card-header">DETALLES PERFIL</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="/sistema_Hospital/controllers/usuarios.php">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="identificacion" class="form-label">IDENTIFICACION</label>
                            <input class="form-control" type="text" name="id" disabled value="<?php echo $usuarioAdmin->getIdentificacion();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">NOMBRES</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" required value="<?php echo $usuarioAdmin->getNombre();?>" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">PRIMER APELLIDO</label>
                            <input class="form-control" type="text" id="email" name="primerApellido" required value="<?php echo $usuarioAdmin->getPrimerApellido();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">SEGUNDO APELLIDO</label>
                            <input type="text" class="form-control" id="organization" name="segundoApellido" required value="<?php echo $usuarioAdmin->getSegundoApellido();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">DIRECCION</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" id="phoneNumber" name="direccion" class="form-control" required value="<?php echo $usuarioAdmin->getDireccion();?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">RH</label>
                            <input type="text" class="form-control" id="address" name="rh" value="<?php echo $usuarioAdmin->getRh();?>" disabled/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="username" class="form-label">Genero</label>
                            <select class="form-select" name="genero" required aria-label="Default select example">
                              <option selected>Genero</option>
                              <option value="M" <?php if($usuarioAdmin->getGenero()==="M"){?>selected="selected"<?php }?>>masculino</option>
                              <option value="F" <?php if($usuarioAdmin->getGenero()==="F"){?>selected="selected"<?php }?>>femenino</option>
                            </select>
                            </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">CORREO</label>
                            <input class="form-control" type="text" id="state" name="correo" required value="<?php echo $usuarioAdmin->getCorreo();?>"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">FECHA NACIMIENTO</label>
                            <input
                              type="date" class="form-control" id="zipCode" required disabled name="fechaNacimiento" value="<?php echo $usuarioAdmin->getFechaNacimiento();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">TELEFONO</label>
                            <input type="text" class="form-control" id="zipCode" name="telefono" required value="<?php echo $usuarioAdmin->getTelefono();?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">CONTRASEÑA</label>
                            <input type="text" class="form-control" id="zipCode" name="contraseña" required value="<?php echo $usuarioAdmin->getContraseña();?>"
                            />
                          </div>
                        </div>
                        <div class="mt-2">
                          <input type='hidden' name='actualizar' value='actualizar'/>
                          <button type="submit" class="btn btn-primary me-2">GUARDAR DATOS</button>
                          <a href="/sistema_Hospital/views/admin/panelAdmin.php"  class="btn btn-outline-secondary" type="reset" role="button">CANCELAR</a>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php 
            unset($_SESSION['mensaje']);
            unset($_SESSION['actualizacion']);
            include "../../components/piePanels.php" ; ?>
            <!-- / Footer -->
          </div>
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
