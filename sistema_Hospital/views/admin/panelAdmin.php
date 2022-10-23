<?php 
session_start();
if(isset($_SESSION['rol'])){
  if(($_SESSION['rol'])==1){
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<title>HOME</title>
<?php include "../../components/head2.php" ; ?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <?php include "../../components/menuAdmin.php" ; ?>
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include "../../components/menuPanelAdmin.php" ; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">BIENVENDIDO! <?php echo strtoupper($_SESSION['nombre']).' '.strtoupper($_SESSION['apellido'])?>  🎉</h5>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../../assets/img/illustrations/man-with-laptop-light.png"
                            height="300"
                            alt="View Badge User"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <?php include "../../components/piePanels.php" ; ?>
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
