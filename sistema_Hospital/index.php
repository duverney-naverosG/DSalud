<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<title>Login</title>
  <?php 
  session_start();
  include "components/head.php" ; ?>
  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.php" class="app-brand-link gap-2">
                  <img src="assets/img/favicon/logon.png" alt="logo" width="200px">
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">BIEVENIDO AL SISTEMA! 👋</h4>
              <p class="mb-4">Inicia sesión en tu cuenta y comienza la aventura.</p>
              <?php if(isset($_SESSION['mensaje'])){?>
                <div class="alert alert-danger alert-dismissible show " role="alert">
                  <strong>ACESSO DENEGADO</strong> credenciales incorrectas
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php }?>
              <?php if(isset($_SESSION['insertar'])){?>
                <div class="alert alert-success alert-dismissible show " role="alert">
                  <strong>REGISTRO EXITOSO</strong> inicia sesion para ingresar a la plataforma
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php }?>
              <?php if(isset($_SESSION['activo'])){?>
                <div class="alert alert-warning  alert-dismissible show " role="alert">
                  <strong>USUARIO NO ACTIVO</strong> su usuario no esta activo
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php }?>
              <form class="mb-3" action="../sistema_Hospital/controllers/login.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Correo o identificacion</label>
                  <input type="text" class="form-control" id="email" name="email-username" required placeholder="Digita tu correo o identificacion"  autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Contraseña</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input  type="password" id="password" class="form-control" name="password" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">INICIAR SESION</button>
                </div>
              </form>

              <p class="text-center">
                <span>NO TIENES CUENTA?</span>
                <a href="/sistema_Hospital/registro.php">
                  <span>Crear cuenta</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
    
    <?php include "components/footer1.php" ; ?>
    <?php session_destroy();?>
  </body>
</html>
