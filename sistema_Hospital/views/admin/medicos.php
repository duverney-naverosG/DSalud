<?php
session_start();
if (isset($_SESSION['rol'])) {
    if (($_SESSION['rol']) == 1) {
        require_once('../../models/medico.php');
        require_once('../../models/medicoDAO.php');
        $crud = new medicoDAO();
        $admin = new Medico();
        $listaMedicos = $crud->mostraMedicos();
        ?>
        <!DOCTYPE html>
        <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
            <title>LISTA MEDICOS</title>
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
                                            <div class="card mb-4">
                                            <div>
                                                    <?php if (isset($_SESSION['error'])) { ?>
                                                    <div class="alert alert-danger alert-dismissible show " role="alert">
                                                        <strong>PROCESO NO EXITOSA</strong> intentar de nuevo
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                <?php } ?>
                                                <?php if (isset($_SESSION['actualizacion'])) { ?>
                                                    <div class="alert alert-success alert-dismissible show " role="alert">
                                                        <strong>ACTUALIZACION EXITOSA</strong> datos actualizados
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <?php } ?>
                                                    <?php if (isset($_SESSION['agregado'])) { ?>
                                                    <div class="alert alert-success alert-dismissible show " role="alert">
                                                        <strong>REGISTRO EXITOSO</strong> medico agregado
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <?php } ?>
                                                </div>
                                                <div class="card-header d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">LISTA DE MEDICOS</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form action="">
                                                    </form>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">identificacion</th>
                                                                <th scope="col">nombres</th>
                                                                <th scope="col">primer Apellido</th>
                                                                <th scope="col">correo</th>
                                                                <th scope="col">direccion</th>
                                                                <th scope="col">telefono</th>
                                                                <th scope="col">hospital</th>
                                                                <th scope="col">estado</th>
                                                                <th scope="col">accion</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($listaMedicos as $medico) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $medico->getIdentificacion(); ?></td>
                                                                    <td><?php echo $medico->getNombre(); ?></td>
                                                                    <td><?php echo $medico->getPrimerApellido(); ?> </td>
                                                                    <td><?php echo $medico->getCorreo(); ?> </td>
                                                                    <td><?php echo $medico->getDireccion(); ?> </td>
                                                                    <td><?php echo $medico->getTelefono(); ?> </td>
                                                                    <td><?php echo $medico->getIdhospital(); ?> </td>
                                                                    <td><?php if($medico->getEstado()==1){ ?>activo<?php }else{?>no activo<?php }?>  </td>

                                                                    <td><a class="btn btn-danger" href="./detalleMedico.php?id=<?php echo $medico->getIdentificacion() ?>">Detalles</a> 
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Content -->

                                <!-- Footer -->
                                <?php include "../../components/piePanels.php"; ?>
                                <!-- / Footer -->
                            </div>
                        </div>
                    </div>

                    <?php 
                    unset($_SESSION['actualizacion']);
                    unset($_SESSION['error']);
                    unset($_SESSION['agregado']);
                    unset($_SESSION['eliminacion']);
                    include "../../components/footer2.php"; ?>

            </body>
        </html>
        <?php
    } else {
        header('Location: ../../views/accesoDenegado.php');
    }
} else {
    header('Location: ../../views/accesoDenegado.php');
}
?>