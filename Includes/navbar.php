<nav class="navbar navbar-expand-lg" style="background-color: #5170ff;">
  <div class="container-fluid">

    <!-- BOTON PARA MOVIL-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCeleste" aria-controls="navbarCeleste" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido colapsable de la Navbar -->
    <div class="collapse navbar-collapse" id="navbarCeleste">

      <!--PARTE IZQUIERDA: (TEXTO FROZEN, INICIO,CEPARADOR,PRODUCTOS y UBICACION)-->

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!--FROZEN PRANIFICADOS-->
        <li>
          <div style="display: flex; flex-direction: column; align-items: flex-start; line-height: 1;">
            <span style="font-family: sans-serif; font-weight: bold; color: #d2dafc; font-size: 1.5rem; text-transform: uppercase;">
              FROZEN
            </span>
            <span style="font-family: sans-serif; font-size: 0.75rem; color: #11365c; margin-top: 2px;">
              panificados congelados
            </span>
          </div>
        </li>

        <!--CEPARADOR-->
        <li class="nav-item">
          <a class="nav-link fw-semibold text-secondary"> | </a>
        </li>

        <!--INICIO-->
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="inicio.php">Inicio</a>
        </li>

        <!--CEPARADOR-->
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold"> | </a>
        </li>

        <!--PRODUCTOS-->
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="productos.php">Productos</a>
        </li>

        <!--CEPARADOR-->
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold"> | </a>
        </li>
        <!--UBICACION-->
        <li>
          <div style="
                      display: inline-block;
                      background-color: #ffffff;
                      color: #1e293b;
                      font-family: sans-serif;
                      font-weight: bold;
                      padding: 8px 16px;
                      border-radius: 12px;
                      border: 1px solid #cbd5e1;
                      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
                    ">
                        Rodriguez Peña 2601
          </div>
        </li>
      </ul>





      <!--PARTE CENTRAL: ICONO-->
      <!--ICONO "F"-->
      <a class="navbar-brand d-flex align-items-center" href="inicio.php">
        <img src="./Img/F-icono-navbar.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
      </a>


      <!-- PARTE DERECHA: (USUARIO)-->
      <ul class="navbar-nav ms-auto">
        <!--USUARIO DESPLEGABLE-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <!-- CONTENIDO DEL DESPLEGABLE-->
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Ingresar</a></li>
            <li><a class="dropdown-item" href="#">Registrarme</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>