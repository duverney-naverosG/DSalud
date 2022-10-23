<?php 
session_start();
if(isset($_SESSION['rol'])){
  if(($_SESSION['rol'])==1){
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<title>agregar hospital</title>
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
                    <h5 class="card-header">AGREGAR HOSPITAL</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST"  action="../../../sistema_Hospital/controllers/hospital.php">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">NOMBRE</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" required/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">CIUDAD</label>
                            <input class="form-control" type="text" id="email" name="ciudad" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">DIRECCION</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" id="phoneNumber" name="direccion" class="form-control" required
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">TELEFONO</label>
                            <input class="form-control" type="text" id="state" name="telefono" requiered/>
                          </div>
                          <input type='hidden' name='insertar' value='insertar'>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">AGREGAR</button>
                          <a href="/sistema_Hospital/views/admin/hospitales.php"  class="btn btn-outline-secondary" type="reset" role="button">CANCELAR</a>
                        </div>
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