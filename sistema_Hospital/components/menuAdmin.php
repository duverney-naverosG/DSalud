<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand" class="d-flex alinh-items-center" height="200px">
            <a href="../../views/admin/panelAdmin.php" class="app-brand-link">
              <img src="../../assets/img/favicon/logon.png" alt="" width="200px">
              <br>
            </a>
            </a>
          </div>
          <br>
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="../../views/admin/panelAdmin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">DASHBOARD</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="../../views/admin/perfilAdmin.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Analytics">PERFIL</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">PACIENTES</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">PACIENTES</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../../views/admin/pacientes.php" class="menu-link">
                    <div data-i18n="Account">LISTAR PACIENTES</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">MEDICOS</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">MEDICOS</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../../views/admin/agregarMedico.php" class="menu-link">
                    <div data-i18n="Account">AGREGAR  MEDICO</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../../views/admin/medicos.php" class="menu-link">
                    <div data-i18n="Notifications">LISTAR MEDICOS</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">ADMINISTRADORES</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">ADMINISTRADORES</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../../views/admin/agregarAdmin.php" class="menu-link">
                    <div data-i18n="Account">AGREGAR  ADMINISTRADOR</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../../views/admin/administradores.php" class="menu-link">
                    <div data-i18n="Notifications">LISTAR ADMINISTARDORES</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">HOSPITALES</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">HOSPITALES</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../../views/admin/agregarHospital.php" class="menu-link">
                    <div data-i18n="Account">AGREGAR  HOSPITAL</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../../views/admin/hospitales.php" class="menu-link">
                    <div data-i18n="Notifications">LISTAR HOSPITALES</div>
                  </a>
                </li>
              </ul>
            </li>
        </aside>
        <!-- / Menu -->