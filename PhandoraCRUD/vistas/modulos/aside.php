<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="vistas/assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PhandoraAdmin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Tablero Principal
                </p>
              </a>
            </li>  
          
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/productos.php','content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventario</p>
                </a>
              </li>
              <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/categorías.php','content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorías</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
          <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/configuración.php','content-wrapper')">
          <i class="nav-icon fas fa-cog"></i>
              <p>
                Configuración
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    $(".nav-link").on('click',function(){
      $(".nav-link").removeClass('active');
      $(this).addClass('active')
    })
  </script>