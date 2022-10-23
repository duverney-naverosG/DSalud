<?php 
session_start();
if(isset($_SESSION['rol'])){
  if(($_SESSION['rol'])==3){
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
        <?php include "../../components/menuPaciente.php" ; ?>
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include "../../components/menuPanelPacientes.php" ; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">DETALLES PERFIL</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="identificacion" class="form-label">IDENTIFICACION</label>
                            <input class="form-control" type="text" id="firstName" name="identificacion"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">NOMBRES</label>
                            <input class="form-control" type="text" name="lastName" id="nombre" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">PRIMER APELLIDO</label>
                            <input class="form-control" type="text" id="email" name="primerNombre" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">SEGUNDO APELLIDO</label>
                            <input type="text" class="form-control" id="organization" name="segundoApellido"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">DIRECCION</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" id="phoneNumber" name="direccion" class="form-control"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">RH</label>
                            <input type="text" class="form-control" id="address" name="rh" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">CORREO</label>
                            <input class="form-control" type="text" id="state" name="correo" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">FECHA NACIMIENTO</label>
                            <input
                              type="date" class="form-control" id="zipCode" name="fechaNacimiento"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">TELEFONO</label>
                            <input type="text" class="form-control" id="zipCode" name="telefono"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">CONTRASEÑA</label>
                            <input type="text" class="form-control" id="zipCode" name="contraseña"
                            />
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">GUARDAR DATOS</button>
                          <button type="reset" class="btn btn-outline-secondary">CANCELAR</button>
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
            <?php include "../../components/piePanels.php" ; ?>
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