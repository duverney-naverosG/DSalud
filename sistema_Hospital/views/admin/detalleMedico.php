<?php 
session_start();
if (isset($_SESSION['rol'])) {
    if (($_SESSION['rol']) == 1) {
        require_once('../../models/medicoDAO.php');
        require_once('../../models/medico.php');
        require_once('../../models/hospital.php');
        require_once('../../models/hospitalDao.php');
        $crud = new medicoDao();
        $admins = new Medico();
        $medico = $crud->mostrar($_GET['id']);
        $crudH = new hospitalDao();
        $hospital = new hospital();
        $listaHospital = $crudH->mostrar();
        ?>
        <!DOCTYPE html>
        <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
            <title>detalle medico</title>
            <?php include "../../components/head2.php"; ?>
            <body>
                <!-- Layout wrapper -->
                <div class="layout-wrapper layout-content-navbar">
                    <div class="layout-container">
                        <!-- Menu -->
                        <?php include "../../components/menuAdmin.php"; ?>
                        <!-- / Menu -->

                        <!-- Layout container -->
                        <div class="layout-page">
                            <!-- Navbar -->

                            <?php include "../../components/menuPanelAdmin.php"; ?>

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
                                                    <h5 class="card-header">DETALLE MEDICO</h5>
                                                    <!-- Account -->
                                                    <hr class="my-0" />
                                                    <div class="card-body">
                                                        <form id="formAccountSettings" method="POST" action="/sistema_Hospital/controllers/medico.php?id=<?php echo $medico->getIdentificacion() ?>">
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="identificacion" class="form-label">IDENTIFICACION</label>
                                                                    <input class="form-control" type="text" id="firstName" name="identificacion" disabled value="<?php echo $medico->getIdentificacion(); ?>"
                                                                           />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="lastName" class="form-label">NOMBRES</label>
                                                                    <input class="form-control" type="text" name="nombres" id="nombre" value="<?php echo $medico->getNombre(); ?>" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="email" class="form-label">PRIMER APELLIDO</label>
                                                                    <input class="form-control" type="text" id="email" name="primerApellido" value="<?php echo $medico->getPrimerApellido(); ?>"
                                                                           />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="organization" class="form-label">SEGUNDO APELLIDO</label>
                                                                    <input type="text" class="form-control" id="organization" name="segundoApellido" value="<?php echo $medico->getSegundoApellido(); ?>"
                                                                           />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" for="phoneNumber">DIRECCION</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <input
                                                                            type="text" id="phoneNumber" name="direccion" class="form-control" value="<?php echo $medico->getDireccion(); ?>"
                                                                            />
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="state" class="form-label">CORREO</label>
                                                                    <input class="form-control" type="text" id="state" name="correo" value="<?php echo $medico->getCorreo(); ?>"/>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="username" class="form-label">Genero</label>
                                                                    <select class="form-select" name="genero" required aria-label="Default select example">
                                                                        <option value="M" <?php if ($medico->getGenero() === "M") { ?>selected="selected"<?php } ?>>masculino</option>
                                                                        <option value="F" <?php if ($medico->getGenero() === "F") { ?>selected="selected"<?php } ?>>femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="state" class="form-label">Rh</label>
                                                                    <input class="form-control" type="text" id="state" disabled value="<?php echo $medico->getRh(); ?>"/>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="language" class="form-label">TELEFONO</label>
                                                                    <input type="text" class="form-control" id="zipCode" name="telefono" value="<?php echo $medico->getTelefono(); ?>"
                                                                           />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="username" class="form-label">ESTADO</label>
                                                                    <select class="form-select" name="estado" required aria-label="Default select example">
                                                                        <option value=1 <?php if ($medico->getEstado() === 1) { ?>selected="selected"<?php } ?>>activo</option>
                                                                        <option value=2 <?php if ($medico->getEstado() === 2) { ?>selected="selected"<?php } ?>>no activo</option>
                                                                    </select>
                                                                </div>

                                                                <div class="mb-3 col-md-6">
                                                                    <label for="username" class="form-label">HOSPITAL</label>
                                                                    <select class="form-select" name="Idhospital" required aria-label="Default select example">
                                                                      <?php 
                                                                    foreach ($listaHospital as $hospital) {
                                                                ?>
                                                                        <option value="<?php echo $hospital->getId(); ?>" <?php if ($medico->getIdhospital() === $hospital->getId()) { ?>selected="selected"<?php } ?>> <?php echo $hospital->getNombre();?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                </div>

                                                                <input type='hidden' name='actualizar' value='actualizar'/>
                                                                <div class="mt-2">
                                                                    <button type="submit" class="btn btn-warning me-2">ACTUALIZAR</button>
                                                                    <a href="/sistema_Hospital/views/admin/medicos.php"  class="btn btn-outline-secondary" type="reset" role="button">CANCELAR</a>
                                                                    </form>
                                                                </div>
                                                                <!-- /Account -->
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
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