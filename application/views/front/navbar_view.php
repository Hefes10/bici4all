<!-- Header -->
<header id="header">
  <nav id="navBar" class="navbar navbar-expand-lg navbar-light navbar-static-top fixed-top" style="background: rgba(0,61,155,.85);">
    <div class="container">
      <a class="navbar-brand">
        <span class="navbar-logo">
          <a href="<?php echo base_url('principal');?>">
            <img id="logo" src="assets/img/logo.png" alt="Bici4all" title="" style="height: 2.8rem;">
          </a>
        </span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Bicicletas</a>
            <a class="dropdown-item" href="#">Scooter</a>
            <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
          </li>
          <li class="nav-item" data-toggle="modal" data-target="#modalLogin">
            <a class="nav-link" href="#">
              <i class="fa fa-user"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-shopping-cart"></i> Mi Carrito
            </a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
          <button class="btn btn-dark my-2 my-sm-0" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
</header>
<!-- /header -->
