<?php
session_start();
if (isset($_SESSION['rol'])) {
    if (($_SESSION['rol']) == 1) {
        require_once('../../models/usuarios.php');
        require_once('../../models/pacientesDao.php');
        $crud = new pacientesDao();
        $admin = new usuarios();
        $listaPaciente = $crud->mostrarPacientes();
        ?>
        <!DOCTYPE html>
        <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
            <title>LISTA PACIENTES</title>
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
                                                <div class="card-header d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">LISTA DE PACIENTES</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form action="">
                                                    </form>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">identificacion</th>
                                                                <th scope="col">nombres</th>
                                                                <th scope="col">fecha Nacimiento</th>
                                                                <th scope="col">Direccion</th>
                                                                <th scope="col">telefono</th>
                                                                <th scope="col">correo</th>
                                                                <th scope="col">accion</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($listaPaciente as $paciente) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $paciente->getIdentificacion() ?></td>
                                                                    <td><?php echo $paciente->getNombre() ?></td>
                                                                    <td><?php echo $paciente->getFechaNacimiento() ?> </td>
                                                                    <td><?php echo $paciente->getDireccion() ?> </td>
                                                                    <td><?php echo $paciente->getTelefono() ?> </td>
                                                                    <td><?php echo $paciente->getCorreo() ?> </td>

                                                                    <td><a class="btn btn-danger" href="./detallePaciente.php?id=<?php echo $paciente->getIdentificacion() ?>">ver mas</a> 
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

                    <?php include "../../components/footer2.php"; ?>

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
