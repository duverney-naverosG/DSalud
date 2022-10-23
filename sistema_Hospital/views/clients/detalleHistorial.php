<?php 
session_start();
if(isset($_SESSION['rol'])){
  if(($_SESSION['rol'])==3){
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<title>detalle historial</title>
<?php include "../../components/head2.php" ; ?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include "../../components/menuPaciente.php" ; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include "../../components/menuPanelPacientes.php" ; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">DETALLE HISTORIAL</h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">identificacion paciente</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" disabled/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">fecha de ingreso</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" disabled
                            />
                          </div>
                        </div> 
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">descripcion</label>
                          <div class="col-sm-10">
                            <textarea id="basic-default-message" class="form-control" disabled></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">tratamiento</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message" class="form-control" disabled></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">fecha de salida</label>
                          <div class="col-sm-10">
                            <input
                              type="date"class="form-control" disabled
                            />
                          </div>
                        </div> 
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">consultorio</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" disabled
                            />
                          </div>
                        </div> 
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">REPORTE</button>
                          </div>
                        </div>
                      </form>
                    </div>
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