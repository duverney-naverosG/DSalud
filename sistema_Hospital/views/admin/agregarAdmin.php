<?php
session_start();
if (isset($_SESSION['rol'])) {
    if (($_SESSION['rol']) == 1) {
        ?>
        <!DOCTYPE html>
        <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
            <title>agregar administrador</title>
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
                                                    <h5 class="card-header">AGREGAR ADMINISTRADOR</h5>
                                                    <!-- Account -->
                                                    <hr class="my-0" />
                                                    <div class="card-body">
                                                        <form id="formAccountSettings" method="POST"  action="../../../sistema_Hospital/controllers/admin.php">
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="identificacion" class="form-label">IDENTIFICACION</label>
                                                                    <input class="form-control" type="text" id="firstName" name="identificacion"
                                                                           />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="lastName" class="form-label">NOMBRES</label>
                                                                    <input class="form-control" type="text" name="nombre" id="nombre" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="email" class="form-label">PRIMER APELLIDO</label>
                                                                    <input class="form-control" type="text" id="email" name="primerApellido" 
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
                                                                    <label for="username" class="form-label">RH</label>
                                                                    <select class="form-select" name="rh" aria-label="Default select example">
                                                                        <option selected>selecciona el tipo de sangre</option>
                                                                        <option value="1">A+</option>
                                                                        <option value="2">A-</option>
                                                                        <option value="3">B+</option>
                                                                        <option value="3">B-</option>
                                                                        <option value="1">AB+</option>
                                                                        <option value="2">AB-</option>
                                                                        <option value="3">O+</option>
                                                                        <option value="3">O-</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="username" class="form-label">Genero</label>
                                                                    <select class="form-select" name="genero" required aria-label="Default select example">
                                                                        <option selected>Genero</option>
                                                                        <option value="M">masculino</option>
                                                                        <option value="F">femenino</option>
                                                                    </select>
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
                                                                    <input type="password" class="form-control" id="zipCode" name="contraseña"
                                                                           />
                                                                </div>
                                                            </div>
                                                            <input type='hidden' name='insertar' value='insertar'>
                                                            <div class="mt-2">
                                                                <button type="submit" class="btn btn-primary me-2">AGREGAR</button>
                                                                <a href="/sistema_Hospital/views/admin/administradores.php"  class="btn btn-outline-secondary" type="reset" role="button">CANCELAR</a>
                                                            </div>
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