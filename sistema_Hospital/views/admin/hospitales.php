<?php
session_start();
if (isset($_SESSION['rol'])) {
    if (($_SESSION['rol']) == 1) {
        require_once('../../models/hospital.php');
        require_once('../../models/hospitalDao.php');
        $crud = new hospitalDao();
        $hospital = new hospital();
        $listaHospital = $crud->mostrar();
        ?>
        <!DOCTYPE html>
        <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
            <title>LISTA HOSPITALES</title>
            <?php include "../../components/head2.php"; ?>
            <body>
                <!-- Layout wrapper -->
                <div class="layout-wrapper layout-content-navbar">
                    <div class="layout-container">
                        <!-- Menu -->
                        <?php include "../../components/menuAdmin.php"; ?>>
                        <!-- / Menu -->

                        <!-- Layout container -->
                        <div class="layout-page">
                            <!-- Navbar -->

                            <?php include "../../components/menuPanelAdmin.php"; ?>

                            <!-- / Navbar -->

                            <!-- Content wrapper -->
                            <div class="content-wrapper">
                                <!-- Content -->

                                <div class="container-xxl flex-grow-1 container-p-y">

                                    <!-- Basic Layout & Basic with Icons -->
                                    <div class="row">
                                        <!-- Basic Layout -->
                                        <div class="col-xxl">
                                        <?php if (isset($_SESSION['hospitalError'])) { ?>
                                                    <div class="alert alert-danger alert-dismissible show " role="alert">
                                                        <strong>ACTUALIZACION NO EXITOSA</strong> error al actualizar dats
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                <?php } ?>
                                                <?php if (isset($_SESSION['actualizacionHospital'])) { ?>
                                                    <div class="alert alert-success alert-dismissible show " role="alert">
                                                        <strong>ACTUALIZACION EXITOSA</strong> datos actualizados
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <?php } ?>
                                                </div>
                                                <?php if (isset($_SESSION['agregoHospital'])) { ?>
                                                    <div class="alert alert-success alert-dismissible show " role="alert">
                                                        <strong>REGISTRO EXITOSA</strong> hospital agregado
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <?php } ?>
                                                </div>
                                            <div class="card mb-4">
                                                
                                                <div class="card-header d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">LISTA DE HOSPITALES</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form action="">
                                                    </form>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">nombre</th>
                                                                <th scope="col">direccion</th>
                                                                <th scope="col">telefono</th>
                                                                <th scope="col">ciudad</th>
                                                                <th scope="col">estado</th>
                                                                <th scope="col">accion</th>
                                                            </tr>
                                                        </thead>
                                                        <body>
                                                            <?php
                                                            foreach ($listaHospital as $hospital) {
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $hospital->getNombre() ?></td>
                                                                <td><?php echo $hospital->getDireccion() ?></td>
                                                                <td><?php echo $hospital->getTelefono() ?> </td>
                                                                <td><?php echo $hospital->getCiudad() ?> </td>
                                                                <td><?php if($hospital->getEstado()==1){ ?>abierto<?php }else{?>cerrado<?php }?>  </td>
                                                                <td><a href="./detalleHospital.php?id=<?php echo $hospital->getId() ?>">Actualizar</a> </td>
                                                            </tr>
                                                        <?php } ?>
                                                        </body>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php include "../../components/piePanels.php" ; ?>
                                </div>
                                <!-- / Content -->

                                <!-- Footer -->
                                
            <!-- / Footer -->
          </div>
        </div>
      </div>

    <?php 
    unset($_SESSION['hospitalError']);
    unset($_SESSION['actualizacionHospital']);
    unset($_SESSION['agregoHospital']);
    include "../../components/footer2.php" ; ?>

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
