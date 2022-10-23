<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<title>REGISTRO</title>
<?php 
session_start();
include "components/head.php" ; 
?>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">REGISTRO</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">la aventura comienza aqui 🚀</h4>
              <?php if(isset($_SESSION['error'])){?>
                <div class="alert alert-danger alert-dismissible show " role="alert">
                  <strong>ERROR AL REGISTRARSE</strong> identificacion o correo ya registrados
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php }?>

              <form id="formAuthentication" class="mb-3" action="../sistema_Hospital/controllers/usuarios.php" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Identificacion</label>
                  <input type="number" class="form-control" id="username" required name="id"autofocus />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="usernamne" required name="nombre"autofocus />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">primer apellido</label>
                  <input type="text" class="form-control" id="username" required required name="primerApellido"  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">segundo apellido</label>
                  <input type="text" class="form-control" id="username" required name="segundoApellido"  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">direccion</label>
                  <input type="text" class="form-control" id="username" name="direccion"  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">RH</label>
                  <select class="form-select" name="rh" required aria-label="Default select example">
                    <option selected>selecciona su tipo de sangre</option>
                    <option value="A+">A+</option>
                    <option value="A+">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Genero</label>
                  <select class="form-select" name="genero" required aria-label="Default select example">
                    <option selected>Genero</option>
                    <option value="M">masculino</option>
                    <option value="F">femenino</option>
                </select>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required name="email" />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">fecha de nacimiento</label>
                  <input type="date" class="form-control" id="username" required name="fechaNacimiento" max="<?php echo date("Y")."-".date("m")."-".date("d") ?>" />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">telefono</label>
                  <input type="text" class="form-control" id="username" required name="telefono"  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" required name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required />
                    <label class="form-check-label" for="terms-conditions">
                    Acepto la política de privacidad y los términos
                    </label>
                  </div>
                </div>
                <input type='hidden' name='insertar' value='insertar'>
                <button type="sumit" class="btn btn-primary d-grid w-100">REGISTRAR</button>
              </form>

              <p class="text-center">
                <span>ya tienes una cuenta?</span>
                <a href="/sistema_Hospital/index.php">
                  <span>inicia sesion</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <?php include "components/footer1.php" ; ?>

  </body>
</html>
